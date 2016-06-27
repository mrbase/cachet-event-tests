<?php

namespace Mrbase\CachetEventTests\Handlers;

use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent;

class IncidentWasUpdated
{
    public function handle(IncidentWasUpdatedEvent $event)
    {
        \Log::debug('-->> '.__METHOD__. " callled on incident update.");
    }
}
