<?php

namespace Mrbase\CachetEventTests\Handlers;

use CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent;

class ComponentWasUpdated
{
    public function handle(ComponentWasUpdatedEvent $event)
    {
        \Log::debug('-->> '.__METHOD__. " callled on component update.");
        error_log('-->> '.__METHOD__. " callled on component update.");
    }
}
