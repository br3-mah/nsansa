<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'push-notify',
        'results',
        'change-questionaire-status',
        'rating',
        'api/register',
        'api/login',
        'api/submit-patient-survey',
        'upload-video',
        'save-notes',
        'close-session-call',
        'rate-video-call',
        '/transaction-summary/*',
        '/payment-details/*',
        'edit-question',
        '/processing-your-transaction'
    ];
}
