<?php
namespace P3\Http\Controllers;

use P3\Http\Controllers\Controller;

class MController extends Controller {

    /**
    * main page of p3
    */
    public function index() {
        return view('main.main');
    }
}

?>
