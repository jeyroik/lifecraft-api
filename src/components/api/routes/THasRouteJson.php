<?php
namespace lifecraft\components\api\routes;

use lifecraft\interfaces\api\routes\IHaveRouteJson;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @property RequestInterface $request
 * @property ResponseInterface $response
 */
trait THasRouteJson
{
    public function getJsonData(): array
    {
        return json_decode($this->request->getBody()->getContents(), true);
    }

    public function setJsonData(array $data, string $errorMessage = ''): void
    {
        $result = [
            IHaveRouteJson::FIELD__DATA => $data
        ];

        if ($errorMessage) {
            $result[IHaveRouteJson::FIELD__ERROR] = $errorMessage;
        }

        $this->response->getBody()->write(json_encode($result));
    }

    public function getAttributeHelp(string $desc, string $useIn, string $type, array $maxMin): array
    {
        $edges = count($maxMin) == 2 ? implode(',', $maxMin) : array_shift($maxMin);

        return [
            IHaveRouteJson::HELP__DESCRIPTION => $desc,
            IHaveRouteJson::HELP__USE_IN => $useIn,
            IHaveRouteJson::HELP__TYPE => $type . '(' . $edges . ')'
        ];
    }
}
