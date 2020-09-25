<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//validation
use App\Http\Requests\Admin\TravelPackageRequest;
use App\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ambil data travel package dari model
        $items = TravelPackage::all();

        return view('pages.admin.travel-package.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        //mengamvil data dari var request masukan ke var data
        $data = $request->all();
        // membuat slug dari title
        $data['slug'] = Str::slug($request->title);

        //memanggil travelPackage model dan function create membawa var data
        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
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
        //memanggil model dengan fungsi jika tdk ada menampilkan 404 & memasukan ke var item
        $item = TravelPackage::findOrFail($id);

        // parsing data ke view
        return view('pages.admin.travel-package.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, $id)
    {
         //mengamvil data dari var request masukan ke var data
         $data = $request->all();
         // membuat slug dari title
         $data['slug'] = Str::slug($request->title);

         $item = TravelPackage::findOrFail($id);

         $item->update($data);

         return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =  TravelPackage::findOrfail($id);
        $item->delete();

        return redirect()->route('travel-package.index');
    }
}
