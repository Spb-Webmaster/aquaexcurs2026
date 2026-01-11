<?php

namespace App\Listeners\Form;

use App\Events\Form\ExcursionEmailEvent;
use App\Jobs\Form\ExcursionEmailJob;
use Support\Traits\CreatorToken;
use Support\Traits\EmailAddressCollector;

class ExcursionEmailHandlerListener
{
    use EmailAddressCollector;
    use CreatorToken;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * сообщение
     */
    public function handle(ExcursionEmailEvent $event): void
    {
        ExcursionEmailJob::dispatch($event->request); // Job
    }
}
