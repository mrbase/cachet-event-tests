<?php

namespace Mrbase\CachetEventTests;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Mrbase\CachetEventTests\Handlers;

class ServiceProvider extends BaseServiceProvider
{
#    protected $listen = [
#        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasReportedEvent'  => [Handlers\IncidentWasReported::class],
#        'CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent'   => [Handlers\IncidentWasUpdated::class],
#        'CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent' => [Handlers\ComponentWasUpdated::class],
#    ];

    public function boot(DispatcherContract $events)
    {
        $events->listen('CachetHQ\Cachet\Bus\Events\Incident\IncidentWasReportedEvent', function () {
            \Log::debug('IncidentWasReportedEvent event called ...');
        });
        $events->listen('CachetHQ\Cachet\Bus\Events\Incident\IncidentWasUpdatedEvent', function () {
            \Log::debug('IncidentWasUpdatedEvent event called ...');
        });
        $events->listen('CachetHQ\Cachet\Bus\Events\Component\ComponentWasUpdatedEvent', function () {
            \Log::debug('ComponentWasUpdatedEvent event called ...');
        });
    }

    public function register(){}
}
