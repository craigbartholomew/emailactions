<?php

namespace App\Http\Controllers;

use App\EmailActions\EmailActionHandlerFactory;
use App\EmailActions\Handlers\UnsubscribeHandler;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmailActionController extends Controller
{
    /**
     * @throws Exception
     */
    public function action(EmailActionHandlerFactory $factory, string $action, Request $request): Response
    {
        $handler = $factory->getEmailActionHandlerByActionName($action);

        return $handler->handle($request->get('payload'));
    }
}
