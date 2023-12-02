<?php

namespace App\Providers;

use App\Infrastructure\FireBase\AuthService;
use App\Repository\PermissionRepository;
use App\Repository\UserRepository;
use App\ShopApi\Security\Auth\Service\AuthServiceInterface;
use App\ShopApi\Security\Permission\Storage\PermissionStorageInterface;
use App\ShopApi\User\Storage\UserStorageInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserStorageInterface::class, UserRepository::class);
        $this->app->bind(PermissionStorageInterface::class, PermissionRepository::class);
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
