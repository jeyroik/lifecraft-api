<?php
namespace lifecraft\components\api\routes\json;

use extas\components\extensions\TExtendable;
use extas\interfaces\IHasId;
use extas\interfaces\repositories\IRepository;
use lifecraft\components\api\routes\Route;
use lifecraft\components\api\routes\THasRouteJson;
use lifecraft\interfaces\attributes\IAttribute;
use lifecraft\interfaces\api\routes\IHaveRouteJson;
use Psr\Http\Message\ResponseInterface;

use ReflectionClass;
use ReflectionClassConstant;
use ReflectionMethod;

/**
 * @property IRepository $attributes
 */
abstract class RouteList extends Route implements IHaveRouteJson
{
    use TExtendable;
    use THasRouteJson;

    protected string $entityName = '';
    protected bool $withAttributes = false;

    public function execute(): ResponseInterface
    {
        $items = $this->getItems();

        if ($this->withAttributes) {
            foreach ($items as $index => $item) {
                $this->attachAttributes($item);
                $items[$index] = $item;
            }
        }

        $this->setJsonData($items);
        
        return $this->response;
    }

    public function help(): ResponseInterface
    {
        $tableName  = $this->getTableName();
        $itemClass  = $this->$tableName()->getItemClass();
        $item       = new $itemClass();
        $reflect    = new ReflectionClass($item);
        $consts     = $reflect->getConstants(ReflectionClassConstant::IS_PUBLIC);
        $fields     = [];

        foreach ($consts as $name => $value) {
            if (!str_contains($name, 'FIELD')) {
                continue;
            }

            $method = $this->getAttrMethod($value, $item, $reflect);

            list($type, $edges) = $this->getAttrType($method, static::TYPE__STRING, [1,30]);
            $desc               = $this->getAttrDescription($method, $value);
            $useIn              = $this->getAttrUseIn($method, static::USE_IN__CODE);
            $fields[$value]     = $this->getAttributeHelp($desc, $useIn, $type, $edges);
        }

        $this->setJsonData([
            static::HELP__REQUEST => [
                static::HELP__REQUEST_METHOD => static::METHOD__GET,
                static::HELP__REQUEST_PARAMETERS => []
            ],
            static::HELP__RESPONSE => $fields
        ]);

        return $this->response;
    }

    protected function getAttrMethod($propName, $item, $reflect): ?ReflectionMethod
    {
        $ucwords = ucwords($propName, '_');
        $methodName = 'get' . implode('', explode('_', $ucwords));
        if (method_exists($item, $methodName)) {
            return $reflect->getMethod($methodName);
        }

        return null;
    }

    protected function getAttrUseIn(?ReflectionMethod $method, string $default): string
    {
        if (!$method) {
            return $default;
        }

        $doc = $method->getDocComment();
        preg_match('/\@use_in\s(.*)/m', $doc, $matches);
        if (!empty($matches)) {
            return trim($matches[1]);
        }

        return $default;
    }

    protected function getAttrType(?ReflectionMethod $method, string $defaultType, array $defaultEdges): array
    {
        if (!$method) {
            return [$defaultType, $defaultEdges];
        }

        $type = $method->getReturnType();
        $typeName = $type ? $type->getName() : $defaultType;
        $typeEdges = $defaultEdges;

        $doc = $method->getDocComment();
        preg_match_all('/\@return_(\S+)\s(.*)/m', $doc, $matches);
        if (!empty($matches)) {
            $minMax = array_flip($matches[1]);
            $typeEdges = [trim($matches[2][$minMax['min']]), trim($matches[2][$minMax['max']])];
        }

        if ($typeEdges[1] == -1) {
            $typeEdges[1] = 'inf';
        }

        return [$typeName, $typeEdges];
    }

    protected function getAttrDescription(?ReflectionMethod $method, string $default): string
    {
        $desc = $default;

        if ($method) {
            $doc = $method->getDocComment();
            preg_match('/\@description_ru\s(.*)$/m', $doc, $matches);
            if (!empty($matches)) {
                $desc = trim($matches[1]);
            }
        }

        return $desc;
    }

    protected function attachAttributes(array &$item): void
    {
        /**
         * @var array $attributes
         */
        $attributes = $this->attributes()->allAsArray([
            IAttribute::FIELD__OWNER_ID => $item[IHasId::FIELD__ID]
        ]);

        $item['attributes'] = array_column($attributes, null, IAttribute::FIELD__NAME);
    }

    protected function getItems(): array
    {
        $table = $this->getTableName();
        return $this->$table()->allAsArray([]);
    }

    protected function getTableName(): string
    {
        return $this->entityName . 's';
    }

    protected function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.' . $this->entityName . '.list';
    }
}
