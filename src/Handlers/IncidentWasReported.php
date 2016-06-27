<?php

namespace Mrbase\CachetEventTests\Handlers;

use CachetHQ\Cachet\Bus\Events\Incident\IncidentWasReportedEvent;

class IncidentWasReported
{
    public function handle(IncidentWasReportedEvent $event)
    {
        \Log::debug('-->> '.__METHOD__. " callled on incident report.");
    }
}
