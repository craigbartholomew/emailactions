<?php

namespace App\EmailActions;

use App\EmailActions\Exceptions\HandlerNotExistsException;
use App\EmailActions\Handlers\Contracts\EmailActionHandler;
use Exception;

class EmailActionHandlerFactory
{
    /**
     * @var array<string, EmailActionHandler>
     */
    protected array $handlers;

    /**
     * @throws Exception
     */
    public function getEmailActionHandlerByActionName(string $action): EmailActionHandler
    {
        $handler = $this->handlers[$action];

        if(!$handler instanceof EmailActionHandler) {
            throw new HandlerNotExistsException($action);
        }

        return $this->handlers[$action];
    }

    public function bindHandler(string $action, EmailActionHandler $handler)
    {
        $this->handlers[$action] = $handler;
    }
}
