<?php

namespace App\Http\Controllers;
use Jenssegers\Agent\Agent;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing');
    }

    /**
     * Display a contacts
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        return view('contact');
    }

    /**
     * Display a categories-article
     *
     * @return \Illuminate\Http\Response
     */
    public function categoriesArticle()
    {
        return view('categories-article');
    }

    /**
     * Display a categories
     *
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        return view('categories');
    }

}
