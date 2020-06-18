<?php
    // Nimbomx\PackageTest\src\Http\Controllers\PackageTestController.php
    namespace Nimbomx\PackageTest\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class PackageTestController extends Controller {

        public function index()
        {
            return view('PackageTest::test');
        }


    }