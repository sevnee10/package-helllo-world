<?php

namespace RickyCA\HelloWorld\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    /**
     * Function prints the string `Hello world~!`
     *
     * @return string
     */
    public function index(): string
    {
        return view('hello-world::index');
    }
}
