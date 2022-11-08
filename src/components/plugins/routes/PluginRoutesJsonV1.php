<?php
namespace lifecraft\components\plugins\routes;

use extas\components\plugins\Plugin;
use extas\interfaces\stages\IStageApiAppInit;
use lifecraft\components\Lifecraft;
use lifecraft\interfaces\routes\IRoute;
use Slim\App;

class PluginRoutesJsonV1 extends Plugin implements IStageApiAppInit
{
    public function __invoke(App &$app): void
    {  
        $lifecraft = new Lifecraft();

        /**
         * @var IRoute[] $routes
         */
        $routes = $lifecraft->routes()->all([]);

        foreach ($routes as $route) {
            $method = $route->getMethod();
            
            $app->$method($route->getName(), function($request, $response, array $args) use ($route) {
                $route = $route->buildDispatcher($request, $response, $args);
                return $route->execute();
            });

            $app->$method($route->getName() . '/help', function($request, $response, array $args) use ($route) {
                $route = $route->buildDispatcher($request, $response, $args);
                return $route->help();
            });
        }
    }
}
