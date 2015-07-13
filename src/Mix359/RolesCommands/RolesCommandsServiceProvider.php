<?php namespace Mix359\RolesCommands;

use Illuminate\Support\ServiceProvider;

class RolesCommandsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Mix359\RolesCommands\Console\ListrolesCommand');
        $this->commands('Mix359\RolesCommands\Console\AddroleCommand');
        $this->commands('Mix359\RolesCommands\Console\DeleteroleCommand');

        $this->commands('Mix359\RolesCommands\Console\ListpermissionsCommand');
        $this->commands('Mix359\RolesCommands\Console\AddpermissionCommand');
        $this->commands('Mix359\RolesCommands\Console\DeletepermissionCommand');

        $this->commands('Mix359\RolesCommands\Console\AttachroletouserCommand');
        $this->commands('Mix359\RolesCommands\Console\AttachpermissiontouserCommand');
        $this->commands('Mix359\RolesCommands\Console\AttachpermissiontoroleCommand');
    }
}