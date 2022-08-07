<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderHtmlController extends Controller
{
    //

    public function render () {
        return view("home")->render();
    }
}
