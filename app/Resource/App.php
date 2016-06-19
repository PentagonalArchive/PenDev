<?php
namespace Pentagonal\StarterApp;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App as Slim;
use Slim\Http\Environment;
use Slim\Http\Uri;
use Slim\Views\PhpRenderer;

class App
{
    /**
     * @var \Slim\App
     */
    protected $slim;
    /**
     * @var bool
     */
    protected static $randed;
    /**
     * App constructor.
     */
    public function __construct()
    {
        $this->slim = new Slim(
            [
                'settings' => [
                    'determineRouteBeforeAppMiddleware' => false,
                    'displayErrorDetails' => (defined('ENVIRONMENT') && ENVIRONMENT == 'development'),
                    'view_dir' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR,
                    'data_dir' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR,
                ]
            ]
        );

        $this->registerApplication()
            ->registerMiddleWare()
            ->registerRoute();
    }

    /**
     * @return $this
     */
    protected function registerApplication()
    {
        /**
         * @return Domain
         */
        $this->slim->getContainer()['domain'] = function () {
            return new Domain();
        };
        /**
         * @return Data
         */
        $this->slim->getContainer()['data'] = function () {
            return new Data();
        };
        /**
         * @return PhpRenderer
         */
        $this->slim->getContainer()['view'] = function () {
            $renderer = new PhpRenderer();
            $renderer->container =& $this->slim->getContainer();
            $renderer->setTemplatePath($renderer->container->get('settings')->get('view_dir'));
            return $renderer;
        };

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerMiddleWare()
    {
        $this->slim->add(function (
            ServerRequestInterface $requestInterface,
            ResponseInterface $responseInterface,
            $next
        ) {
            /**
             * Require Error Handler
             */
            require $this->get('settings')['data_dir'] . 'ErrorHandler.php';
            /**
             * @var Environment
             */
            $env = clone $this->environment;
            $env['SCRIPT_NAME'] = dirname($env['SCRIPT_NAME']);
            /** @noinspection PhpUndefinedFieldInspection */
            $requestInterface =
                $this->request =
                $requestInterface->withUri(Uri::createFromEnvironment($env));
            return $next($requestInterface, $responseInterface);
        });

        return $this;
    }

    /**
     * @return $this
     */
    protected function registerRoute()
    {
        $this->slim->group('', function () {
            /**
             * @var \Slim\Container
             */
            $container =& $this->getContainer();
            require $container['settings']['data_dir'] . 'Routes.php';
        });

        return $this;
    }

    public function run()
    {
        if (!self::$randed) {
            self::$randed = true;
            $this->slim->run();
        }
        return $this;
    }
}