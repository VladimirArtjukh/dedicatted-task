<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\MailService;

class MailController extends Controller
{
    public function sendWelcomeEmail(MailService $mailService): void
    {
        $mailService->sendWelcomeEmail();
    }
}
