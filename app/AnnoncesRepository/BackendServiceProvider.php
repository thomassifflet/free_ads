<?php
/**
 * Created by IntelliJ IDEA.
 * User: hikiyo
 * Date: 13/04/17
 * Time: 11:29
 */

namespace AnnoncesRepository;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('AnnoncesRepository\AnnoncesRepositoryInterface', 'AnnoncesRepository\DbAnnoncesRepository');
    }
}