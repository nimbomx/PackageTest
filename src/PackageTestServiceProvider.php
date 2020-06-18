<?php
    // nimbomx\package-test\src\PackageTestServiceProvider.php
    namespace Nimbomx\PackageTest;
    use Illuminate\Support\ServiceProvider;
    class PackageTestServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
        public function register()
        {
        }
    }
    ?>