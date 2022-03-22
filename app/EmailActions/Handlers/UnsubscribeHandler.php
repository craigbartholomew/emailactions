<?php

namespace App\EmailActions\Handlers;

use App\EmailActions\Handlers\Contracts\EmailActionHandler;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Response;

class UnsubscribeHandler implements EmailActionHandler
{
    public function handle(?array $payload = null): Response
    {

    }
}
