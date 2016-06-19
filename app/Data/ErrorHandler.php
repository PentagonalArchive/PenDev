<?php
if (!isset($this) || !$this instanceof \Slim\Container) {
    return;
}
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

$this['notFoundHandler'] = function () {
    return function (RequestInterface $request, ResponseInterface $response) {
        $response = $response->withStatus(404);
        $this->view->addAttribute('title', '404 Page Not Found');
        return $this->view->render($response, '404.php');
    };
};

$this['errorHandler'] = function () {
    return function (RequestInterface $request, ResponseInterface $response, Throwable $e) {
        $response = $response->withStatus(500);
        $this->view->setAttributes(
            array(
                'title' => '500 Internal Error',
                'exception' => $e
            )
        );
        return $this->view->render($response, '500.php');
    };
};

$this['phpErrorHandler'] = function () {
    return function (RequestInterface $request, ResponseInterface $response, Throwable $e) {
        $response = $response->withStatus(500);
        $this->view->setAttributes(
            array(
                'title' => '500 Internal Error',
                'exception' => $e
            )
        );
        return $this->view->render($response, '500.php');
    };
};

$this['notAllowedHandler'] = function () {
    return function (RequestInterface $request, ResponseInterface $response, array $allowedMethods) {
        $response = $response->withStatus(405);
        $this->view->setAttributes(
            array(
                'title' => '405 Not Allowed',
                'allowed_method' => $allowedMethods,
            )
        );
        return $this->view->render($response, '405.php');
    };
};
