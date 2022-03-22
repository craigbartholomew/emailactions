<?php

namespace App\EmailActions;

use Illuminate\Routing\UrlGenerator;

class EmailActionUrlFactory
{
    protected UrlGenerator $urlGenerator;

    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function createActionUrl(string $action, ?array $payload): string
    {
        return $this->urlGenerator->signedRoute('emailaction', [
            'actionName' => $action,
            'payload' => json_encode($payload)
        ]);
    }
}
