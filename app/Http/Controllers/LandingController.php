<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Blog;
use App\Models\Contact;
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
        $footer = Footer::find(1);
        $blogs = Blog::all();
        return view('landing', compact('footer', 'blogs'));
    }

    /**
     * Display a contacts
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        $footer = Footer::find(1);
        $contact = Contact::find(1);

        return view('contact', compact('footer', 'contact'));
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
        $footer = Footer::find(1);
        return view('categories', compact('footer', 'contact'));
    }

    /**
     * Display a categories
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        $footer = Footer::find(1);
        return view('shop-magazine', compact('footer', 'contact'));
    }



}
