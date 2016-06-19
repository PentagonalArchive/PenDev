<?php
if (!isset($this) || !$this instanceof \Slim\App) {
    return;
}
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

$this->post(
    '/subscribe',
    function (RequestInterface $request, ResponseInterface $response) {
        return $response;
    }
);

$this->map(
    ['POST', 'GET'],
    '/',
    function (RequestInterface $request, ResponseInterface $response) {
        $this->view->addAttribute('title', 'Pentagonal Development');
        return $this->view->render($response, 'main.php');
    }
);
