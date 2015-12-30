<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImage()
    {
        $file = Request::file('file');
        $destinationPath = public_path().'/uploads/';
        $filename = $file->getClientOriginalName();
        $file->move($destinationPath, $filename);
        echo url('/').'/uploads/'.$filename;
    }
}
