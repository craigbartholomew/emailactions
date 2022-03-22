<?php

use App\EmailActions\Handlers\ConfirmPrescriptionHandler;
use App\EmailActions\Handlers\UnsubscribeHandler;

return [
    'handlers' => [
        'unsubscribe' => UnsubscribeHandler::class,
        'confirmprescription' => ConfirmPrescriptionHandler::class,
    ]
];
