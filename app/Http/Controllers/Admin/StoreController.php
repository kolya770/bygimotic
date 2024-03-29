<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use App\Models\Items;
use App\Models\Images;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input as Input;
 use Response;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::latest()->get();

        return view('admin.store.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store.create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Items();
        $item->title        = $request->title;
        $item->description  = $request->description;
        $item->price        = $request->price;
        $item->category     = $request->category;
        $item->title_meta   = $request->title_meta;
        $item->description_meta = $request->description_meta;
        $item->keywords_meta    = $request->keywords_meta;

        $item->save();

        $img = new Images();

        $files = Input::file('file');


        $path = public_path() . '/uploads/';

        foreach($files as $file) {
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
            $qq = $path . $fileName;
        }

        $route_image = $path . $qq;
        $img->image = $route_image;
        $img->items_id = $item->id;

        $img->save();
        

        //return redirect('admin/store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Items::findOrFail($id);

        return view('admin.store.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Items::findOrFail($id);
        $item->update($request->all());

        return redirect('admin/store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();

        return redirect('admin/store');
    }
}
