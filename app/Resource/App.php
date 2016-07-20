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
        $server_env = $this->fixHTTPSEnvironment();
        $this->slim = new Slim(
            [
                'environment' => Environment::mock($server_env),
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
     * Detecting & Fix Environment on some cases
     *     Default Environment uses $_SERVER to attach
     *     just to fix https
     * @return array
     */
    protected function fixHTTPSEnvironment()
    {
        if (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off'
            // hide behind proxy / maybe cloudflare cdn
            || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'
            || !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off'
        ) {
            // detect if non standard protocol
            if ($_SERVER['SERVER_PORT'] == 80
                && (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
                    || isset($_SERVER['HTTP_FRONT_END_HTTPS'])
                )
            ) {
                // add original standard port
                $_SERVER['SERVER_PORT_ORIGINAL'] = 80;
                $_SERVER['SERVER_PORT'] = 443;
            }

            // fixing HTTPS Environment
            $_SERVER['HTTPS'] = 'on';
        }

        return $_SERVER;
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
            $renderer->container = $this->slim->getContainer();
            $renderer->setTemplatePath($renderer->container->get('settings')->get('view_dir'));
            return $renderer;
        };

        return $this;
    }

    /**
     * Register Additional Middleware to make sure getting better on
     * mod_rewrite, prevent multiple /duplicate URL
     *
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
            $container = $this->getContainer();
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
