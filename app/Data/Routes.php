<?php
if (!isset($this) || !$this instanceof \Slim\App) {
    return;
}
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\NotFoundException;

$this->post(
    '/subscribe',
    function (RequestInterface $request, ResponseInterface $response) {
        if ($request->isXhr()) {
            $array = array(
                'email' => $request->getParam('email'),
                'status' => 'error',
                'message' => 'Invalid email address. Please check your email address.',
            );
            if (($email = $this->domain->emailAlphabetic($array['email']))) {
                preg_match('/\@((example|google|pentagonal|microsoft|envato|codecanyon|grahicriver|themeforest|whatsapp|telegram|3docean|github|wordpress|localhost|domain|youtube|facebook|twitter|linkedin|pinterest)\.[a-z]{2,18})$/i', $email, $match);
                if (empty($match[1])) {
                    if ($this->data->put($email)) {
                        $array['status'] = 'ok';
                        $array['message'] = 'Your email has been successfully recorded into our database.';
                    } else {
                        $array['status'] = 'conflict';
                        $array['message'] = 'We are sorry there was some conflict on our server :(';
                    }
                } else {
                    $array['message'] = 'Why you try to cheat us ? Please use your email.';
                }
            }
            $response = $response->withJson($array);
        } else {
            throw new NotFoundException($request, $response);
        }
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
