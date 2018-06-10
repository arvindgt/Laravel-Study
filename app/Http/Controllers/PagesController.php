<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        //return 'this is text from Controller function';
        return view('pages.index');
    }
}
