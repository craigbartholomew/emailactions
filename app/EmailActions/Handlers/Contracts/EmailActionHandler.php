<?php

namespace App\EmailActions\Handlers\Contracts;

use Illuminate\Http\Response;

interface EmailActionHandler
{
    public function handle(?array $payload = null): Response;
}
