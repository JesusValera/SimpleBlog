<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class LoginController extends BaseController
{
    public function invoke(Request $request): Response
    {
        $isLogin = filter_var($request->request->get('login'), FILTER_VALIDATE_BOOLEAN);

        if ($isLogin) {
            return new RedirectResponse('/index.php/admin');
        }

        return new Response($this->twig->render('login.html.twig'));
    }
}
