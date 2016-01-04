<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Items;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
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
        $rec = $request->all();

        Items::firstOrCreate([
            'title'             => $rec['title'],
            'description'       => $rec['description'],
            'price'             => $rec['price'],
            'category'          => $rec['category'],
            'title-meta'        => $rec['title-meta'],
            'description-meta'  => $rec['description-meta'],
            'keywords-meta'     => $rec['keywords-meta']
        ]);

        return redirect('/store');
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
