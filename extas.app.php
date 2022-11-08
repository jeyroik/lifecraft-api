<?php

use lifecraft\components\api\routes\json\attributes\RouteListAttributeSample;
use lifecraft\components\api\routes\json\heroes\RouteCreateHero;
use lifecraft\components\api\routes\json\heroes\RouteCreateHeroSample;
use lifecraft\components\api\routes\json\heroes\RouteListHeroSample;
use lifecraft\components\api\routes\json\players\RouteCreatePlayer;
use lifecraft\components\api\routes\json\players\RouteListPlayer;
use lifecraft\components\api\routes\json\players\RouteViewPlayer;
use lifecraft\components\api\routes\json\attributes\RouteListAttribute;
use lifecraft\components\api\routes\json\heroes\RouteListHero;
use lifecraft\interfaces\api\versions\IVersion1;
use lifecraft\interfaces\attributes\IAttributeSample;
use lifecraft\interfaces\attributes\IHaveEnergy;
use lifecraft\interfaces\attributes\IHaveExpBuffered;
use lifecraft\interfaces\attributes\IHaveExperience;
use lifecraft\interfaces\attributes\IHaveGold;
use lifecraft\interfaces\attributes\IHaveHealth;
use lifecraft\interfaces\attributes\IHaveLevel;
use lifecraft\interfaces\attributes\IHaveRarity;
use lifecraft\interfaces\attributes\IHaveRequiredLevel;
use lifecraft\interfaces\routes\IRoute;

return [
    'attributes_samples' => [
        [
            IAttributeSample::FIELD__NAME => IHaveHealth::FIELD__HEALTH,
            IAttributeSample::FIELD__TITLE => 'Здоровье',
            IAttributeSample::FIELD__DESCRIPTION => 'Здоровье',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherHealth',
            IAttributeSample::FIELD__VALUE => 10,
            IAttributeSample::FIELD__VALUE_MIN => 1,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveGold::FIELD__GOLD,
            IAttributeSample::FIELD__TITLE => 'Золото',
            IAttributeSample::FIELD__DESCRIPTION => 'Золото',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherGold',
            IAttributeSample::FIELD__VALUE => 0,
            IAttributeSample::FIELD__VALUE_MIN => 0,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveEnergy::FIELD__ENERGY,
            IAttributeSample::FIELD__TITLE => 'Энергия',
            IAttributeSample::FIELD__DESCRIPTION => 'Энергия',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherEnergy',
            IAttributeSample::FIELD__VALUE => 10,
            IAttributeSample::FIELD__VALUE_MIN => 1,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveRarity::FIELD__RARITY,
            IAttributeSample::FIELD__TITLE => 'Редкость',
            IAttributeSample::FIELD__DESCRIPTION => 'Текущая редкость',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherRarity',
            IAttributeSample::FIELD__VALUE => 1,
            IAttributeSample::FIELD__VALUE_MIN => 1,
            IAttributeSample::FIELD__VALUE_MAX => 6
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveExperience::FIELD__EXPERIENCE,
            IAttributeSample::FIELD__TITLE => 'Опыт',
            IAttributeSample::FIELD__DESCRIPTION => 'Текущий опыт',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherExperience',
            IAttributeSample::FIELD__VALUE => 0,
            IAttributeSample::FIELD__VALUE_MIN => 0,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveGold::FIELD__GOLD,
            IAttributeSample::FIELD__TITLE => 'Золото',
            IAttributeSample::FIELD__DESCRIPTION => 'Текущее количество золота',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherGold',
            IAttributeSample::FIELD__VALUE => 0,
            IAttributeSample::FIELD__VALUE_MIN => 0,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveExpBuffered::FIELD__EXP_BUFFERED,
            IAttributeSample::FIELD__TITLE => 'Накопленный опыт',
            IAttributeSample::FIELD__DESCRIPTION => 'Текущий накопленный опыт',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherExpBuffered',
            IAttributeSample::FIELD__VALUE => 0,
            IAttributeSample::FIELD__VALUE_MIN => 0,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveLevel::FIELD__LEVEL,
            IAttributeSample::FIELD__TITLE => 'Уровень',
            IAttributeSample::FIELD__DESCRIPTION => 'Текущий уровень',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherLevel',
            IAttributeSample::FIELD__VALUE => 1,
            IAttributeSample::FIELD__VALUE_MIN => 1,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ],
        [
            IAttributeSample::FIELD__NAME => IHaveRequiredLevel::FIELD__LEVEL_REQUIRED,
            IAttributeSample::FIELD__TITLE => 'Требуемый опыт',
            IAttributeSample::FIELD__DESCRIPTION => 'Текущий требуемый опыт',
            IAttributeSample::FIELD__LEVEL => 1,
            IAttributeSample::FIELD__LEVEL_DISPATCHER => '\\lifecraft\\components\\levels\\dispatchers\\DispatcherRequiredLevel',
            IAttributeSample::FIELD__VALUE => 1,
            IAttributeSample::FIELD__VALUE_MIN => 1,
            IAttributeSample::FIELD__VALUE_MAX => -1
        ]
    ],
    'routes' => [
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE,
            IRoute::FIELD__TITLE => 'Главная. v1',
            IRoute::FIELD__DESCRIPTION => 'Главная страничка API v1',
            IRoute::FIELD__METHOD => IRoute::METHOD__READ,
            IRoute::FIELD__CLASS => '\\'. RouteMain::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteListAttribute::PATH,
            IRoute::FIELD__METHOD => IRoute::METHOD__READ,
            IRoute::FIELD__TITLE => 'Список атрибутов',
            IRoute::FIELD__DESCRIPTION => 'Список существующих атрибутов по всем сущностям',
            IRoute::FIELD__CLASS => '\\'. RouteListAttribute::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteCreatePlayer::PATH,
            IRoute::FIELD__TITLE => 'Создать игрока',
            IRoute::FIELD__DESCRIPTION => 'Создать игрока',
            IRoute::FIELD__METHOD => IRoute::METHOD__CREATE,
            IRoute::FIELD__CLASS => '\\'. RouteCreatePlayer::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteViewPlayer::PATH,
            IRoute::FIELD__TITLE => 'Инорфмация об игроке',
            IRoute::FIELD__DESCRIPTION => 'Детальная информация об игроке',
            IRoute::FIELD__METHOD => IRoute::METHOD__CREATE,
            IRoute::FIELD__CLASS => '\\'. RouteViewPlayer::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteListPlayer::PATH,
            IRoute::FIELD__TITLE => 'Список игроков',
            IRoute::FIELD__DESCRIPTION => 'Список всех игроков',
            IRoute::FIELD__METHOD => IRoute::METHOD__READ,
            IRoute::FIELD__CLASS => '\\'. RouteListPlayer::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteListAttributeSample::PATH,
            IRoute::FIELD__TITLE => 'Список шаблонов атрибутов',
            IRoute::FIELD__DESCRIPTION => 'Список предустановленных шаблонов атрибутов',
            IRoute::FIELD__METHOD => IRoute::METHOD__READ,
            IRoute::FIELD__CLASS => '\\'. RouteListAttributeSample::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteListHeroSample::PATH,
            IRoute::FIELD__TITLE => 'Список шаблонов героев',
            IRoute::FIELD__DESCRIPTION => 'Список шаблонов героев',
            IRoute::FIELD__METHOD => IRoute::METHOD__READ,
            IRoute::FIELD__CLASS => '\\'. RouteListHeroSample::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteCreateHeroSample::PATH,
            IRoute::FIELD__TITLE => 'Создание шаблона героя',
            IRoute::FIELD__DESCRIPTION => 'Создание шаблона героя',
            IRoute::FIELD__METHOD => IRoute::METHOD__CREATE,
            IRoute::FIELD__CLASS => '\\'. RouteCreateHeroSample::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteCreateHero::PATH,
            IRoute::FIELD__TITLE => 'Создание героя',
            IRoute::FIELD__DESCRIPTION => 'Создание героя по шаблону',
            IRoute::FIELD__METHOD => IRoute::METHOD__CREATE,
            IRoute::FIELD__CLASS => '\\'. RouteCreateHero::class
        ],
        [
            IRoute::FIELD__NAME => IVersion1::PATH__BASE . RouteListHero::PATH,
            IRoute::FIELD__TITLE => 'Список героев',
            IRoute::FIELD__DESCRIPTION => 'Список героеов',
            IRoute::FIELD__METHOD => IRoute::METHOD__READ,
            IRoute::FIELD__CLASS => '\\'. RouteListHero::class
        ]
    ]
];