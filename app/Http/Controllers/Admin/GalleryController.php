<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//validation
use App\Http\Requests\Admin\GalleryRequest;
use App\Gallery;
use App\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memanggil function travel_package dari model gallery
        $items = Gallery::with(['travel_package'])->get();

        return view('pages.admin.gallery.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackage::all();
        return view('pages.admin.gallery.create',[
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        //mengamvil data dari var request masukan ke var data
        $data = $request->all();
        // asign data ke var image berisi request file name image dari view dan memanggil fungsi sotere ke folder assets/gallery dan di simpan scr public
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );

        //memanggil Gallery model dan function create membawa var data
        Gallery::create($data);
        return redirect()->route('gallery.index');
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
        $item = Gallery::findOrFail($id);
        $travel_packages = TravelPackage::all();

        return view('pages.admin.gallery.edit',[
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
         //mengamvil data dari var request masukan ke var data
         $data = $request->all();
         $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );

         $item = Gallery::findOrFail($id);

         $item->update($data);

         return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =  Gallery::findOrfail($id);
        $item->delete();

        return redirect()->route('gallery.index');
    }
}
