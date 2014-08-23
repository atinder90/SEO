<?php namespace Calotype\SEO\Support\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class TwitterCard extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'calotype.seo.generators.twittercard'; }
}