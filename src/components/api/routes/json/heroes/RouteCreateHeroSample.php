<?php
namespace lifecraft\components\api\routes\json\heroes;

use extas\components\exceptions\AlreadyExist;
use extas\components\extensions\TExtendable;
use extas\interfaces\repositories\IRepository;
use lifecraft\components\attributes\Attribute;
use lifecraft\components\heroes\HeroSample;
use lifecraft\components\api\routes\Route;
use lifecraft\components\api\routes\THasRouteJson;
use lifecraft\interfaces\attributes\IAttributeSample;
use lifecraft\interfaces\heroes\IHero;
use lifecraft\interfaces\heroes\IHeroSample;
use lifecraft\interfaces\players\IPlayer;
use lifecraft\interfaces\api\routes\IHaveRouteJson;
use Psr\Http\Message\ResponseInterface;

/**
 * @method IRepository players()
 * @method IRepository heroesSamples()
 * @method IRepository attributes()
 * @method IRepository attributesSamples()
 */
class RouteCreateHeroSample extends Route
{
    use TExtendable;
    use THasRouteJson;

    public const PATH = 'hero-sample';

    public function execute(): ResponseInterface
    {
        $data = $this->getJsonData();

        $heroSample = new HeroSample($data);
        try {
            /**
             * @var IHeroSample $heroSample
             */
            $heroSample = $this->heroesSamples()->create($heroSample);
        } catch (AlreadyExist $e) {
            $this->setJsonData($data, $e->getMessage());
            return $this->response;
        }

        $this->createAttributes($heroSample);

        $this->heroesSamples()->update($heroSample);

        $this->setJsonData($heroSample->__toArray());

        return $this->response;
    }

    public function help(): ResponseInterface
    {
        $this->setJsonData([
            IHaveRouteJson::HELP__REQUEST => [
                IHeroSample::FIELD__NAME => [
                    'description' => 'Имя шаблона',
                    'use_in' => 'Code',
                    'type' => 'string(1,30)'
                ],
                IHeroSample::FIELD__TITLE => [
                    'description' => 'Название шаблона',
                    'use_in' => 'UI',
                    'type' => 'string(1,30)'
                ],
                IHeroSample::FIELD__DESCRIPTION => [
                    'description' => 'Описание шаблона',
                    'use_in' => 'UI',
                    'type' => 'string(1,100)'
                ]
            ],
            IHaveRouteJson::HELP__RESPONSE => [
                IHeroSample::FIELD__ID => $this->getAttributeHelp(
                    'ID', 
                    IHaveRouteJson::USE_IN__CODE, 
                    IHaveRouteJson::TYPE__STRING,
                    [36]
                ),
                IHeroSample::FIELD__NAME => $this->getAttributeHelp(
                    'Имя шаблона', 
                    IHaveRouteJson::USE_IN__CODE, 
                    IHaveRouteJson::TYPE__STRING,
                    [1,30]
                ),
                IHeroSample::FIELD__TITLE => [
                    'description' => 'Название шаблона',
                    'use_in' => 'UI',
                    'type' => 'string(1,30)'
                ],
                IHeroSample::FIELD__DESCRIPTION => [
                    'description' => 'Описание шаблона',
                    'use_in' => 'UI',
                    'type' => 'string(1,100)'
                ]
            ]
        ]);

        return $this->response;
    }

    protected function createAttributes(IHeroSample &$heroSample)
    {
        /**
         * @var IAttributeSample[] $samples
         */
        $samples = $this->attributesSamples()->all([]);

        foreach ($samples as $sample) {
            $attr = new Attribute([
                Attribute::FIELD__VALUE => $sample->getValue(),
                Attribute::FIELD__NAME => $sample->getName(),
                Attribute::FIELD__LEVEL => $sample->getLevel(),
                Attribute::FIELD__TITLE => $sample->getTitle(),
                Attribute::FIELD__DESCRIPTION => $sample->getDescription(),
                Attribute::FIELD__VALUE_MIN => $sample->getMinValue(),
                Attribute::FIELD__VALUE_MAX => $sample->getMaxValue()
            ]);
            $method = $this->constructMethodName($sample);
            if (method_exists($heroSample, $method)) {
                $heroSample->$method($attr);
            }
        }
    }

    protected function constructMethodName(IAttributeSample $sample): string
    {
        $name = $sample->getName();
        return 'set' . ucwords($name, '_');
    }

    protected function isValidPlayer(array $data): bool
    {
        if (!isset($data[IHero::FIELD__PLAYER_ID])) {
            $this->setJsonData($data, 'Missed '.IHero::FIELD__PLAYER_ID.' field');
            return false;
        }

        $player = $this->players()->one([
            IPlayer::FIELD__ID => $data[IHero::FIELD__PLAYER_ID]
        ]);

        if (!$player) {
            $this->setJsonData($data, 'Unknown player');
            return false;
        }

        return true;
    }

    protected function getSubjectForExtension(): string
    {
        return 'lifecraft.route.json.hero.sample.create';
    }
}
