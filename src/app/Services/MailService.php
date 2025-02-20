<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Jobs\SendWelcomeEmail;

class MailService
{
    public function sendWelcomeEmail(): void
    {
        $user = User::find(1);
        SendWelcomeEmail::dispatch($user);
    }
}
