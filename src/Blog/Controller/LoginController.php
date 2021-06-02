<?php

declare(strict_types=1);

namespace App\Blog\Controller;

use App\Framework\BaseController;
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

        return $this->renderTemplate('login.html.twig');
    }
}
