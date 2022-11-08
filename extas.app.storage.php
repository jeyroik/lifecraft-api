<?php

use extas\components\repositories\drivers\DriverFileJson;
use lifecraft\components\encoders\EncoderSha1;
use lifecraft\components\plugins\routes\PluginRoutesJsonV1;
use lifecraft\components\repositories\IsExist;
use lifecraft\components\UUid;

return [
    "name" => "lifecraft/api",
    "drivers" => [
        [
            "class" => '\\'.DriverFileJson::class,
            "options" => [
                "path" => 'resources/',
                "db" => "system"
            ],
            "tables" => [
                "plugins", "extensions", "player_roles_links", "players", "roles",
                "heroes_samples", "heroes", "attributes_samples","attributes", "tasks_samples", "tasks",
                "dangers_samples", "dangers", "stories_samples", "stories",
                "achievements_samples", "achievements", "ranks_samples", "ranks",
                "hero_stats", "structures_samples", "structures", "pets_samples", "pets",
                "avatars_samples", "avatars", "artefacts_samples", "artefacts", "routes"
            ]
        ]
    ],
    "tables" => [
        "routes" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\routes\\Route",
            "pk" => "id",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "player_roles_links" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\players\\PlayerRoleLink",
            "pk" => "name",
            "aliases" => ["playerRolesLinks"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "roles" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\players\\roles\\Role",
            "pk" => "id",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "players" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\players\\Player",
            "pk" => "identity",
            "code" => [
                "create-before" => 
                '\\'. UUid::class . '::generateFor($item);'
                . '\\'. EncoderSha1::class . '::encode($item, [\'secret\']);'
                . '\\' . IsExist::class . '::check($this, $item, [\'identity\']);'
            ]
        ],
        "heroes_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\heroes\\HeroSample",
            "pk" => "name",
            "aliases" => ["heroesSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "heroes" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\heroes\\Hero",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
                . '\\' . IsExist::class . '::check($this, $item, [\'name\']);'
            ]
        ],
        "attributes_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\attributes\\AttributeSample",
            "pk" => "name",
            "aliases" => ["attributesSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "attributes" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\attributes\\Attribute",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "tasks_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\tesks\\TaskSample",
            "pk" => "name",
            "aliases" => ["tasksSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "tasks" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\tasks\\Task",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "dangers_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\dangers\\DangerSample",
            "pk" => "name",
            "aliases" => ["dangersSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "dangers" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\dangers\\Danger",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "stories_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\stories\\StorySample",
            "pk" => "name",
            "aliases" => ["storiesSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "stories" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\stories\\Story",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "achievements_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\achievements\\AchievementSample",
            "pk" => "name",
            "aliases" => ["achievementsSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "achievements" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\achievements\\Achievement",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "ranks_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\ranks\\RankSample",
            "pk" => "name",
            "aliases" => ["ranksSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "ranks" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\ranks\\Rank",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "hero_stats" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\hero\\HeroStat",
            "pk" => "name",
            "aliases" => ["heroStat"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "structures_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\structures\\StructureSample",
            "pk" => "name",
            "aliases" => ["structureSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "structures" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\structures\\Structure",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "pets_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\pets\\PetSample",
            "pk" => "name",
            "aliases" => ["petsSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "pets" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\pets\\Pet",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "avatars_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\avatars\\AvatarSample",
            "pk" => "name",
            "aliases" => ["avatarsSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "avatars" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\avatars\\Avatar",
            "pk" => "name",
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "artefacts_samples" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\artefacts\\ArtefactSample",
            "pk" => "name",
            "aliases" => ["artefactsSamples"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ],
        "artefacts" => [
            "namespace" => "repositories",
            "item_class" => "\\lifecraft\\components\\artefacts\\Artefact",
            "pk" => "name",
            "aliases" => ["artefacts"],
            "code" => [
                "create-before" => '\\' . UUid::class . '::generateFor($item);'
            ]
        ]
    ],
    "plugins" => [
        [
            "class" => '\\'. PluginRoutesJsonV1::class,
            "stage" => "extas.api.app.init"
        ]
    ]
        ];