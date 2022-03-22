<?php

namespace App\EmailActions\Handlers;

use App\EmailActions\Handlers\Contracts\EmailActionHandler;
use Illuminate\Http\Response;

class ConfirmPrescriptionHandler implements EmailActionHandler
{
    public function handle(?array $payload = null): Response
    {

    }
}
