<?php

namespace NewWorld\providers;


use Plenty\Plugin\ServiceProvider;

class NewWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
      $this->getApplication()->register(NewWorldRouteServiceProvider::class);
    }
}
