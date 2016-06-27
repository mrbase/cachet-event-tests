<?php

namespace Mrbase\CachetEventTests;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Mrbase\CachetEventTests\Handlers;

class ServiceProvider extends EventServiceProvider
{
    protected $listen = [
        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasReportedEvent'   => [Handlers\IncidentWasReported::class],
        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent'    => [Handlers\IncidentWasUpdated::class],
        'CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent>' => [Handlers\ComponentWasUpdated::class],
    ];
}
