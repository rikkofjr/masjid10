<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KasKategori;

class KasKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new KasKategori;
        $kategori->cat_transaksi = $request->kategori;

        $kategori->save();
        return redirect()->route('admin.kas.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getSearchKategori(Request $request){
	
        // $search = $request->search;

		// if($search == ''){
		// 	$kategori = KasKategori::orderby('cat_transaksi','asc')
        //         ->select('id','cat_transaksi')
        //         ->limit(5)
        //         ->get();
		// }else{
		// 	$kategori = KasKategori::orderby('cat_transaksi','asc')
        //     ->select('id','cat_transaksi')
		// 	->where('cat_transaksi', 'like', '%' .$search . '%')
		// 	->limit(5)
        //     ->get();
		// }

		// $response = array();
		// foreach($kategori as $kategorinya){
		// 	$response[] = array(
		// 		"id"=>$kategorinya->id,
		// 		"text"=>$kategorinya->cat_transaksi
		// 	);
		// }
		// return response()->json($response); 

        $categories = KasKategori::where('cat_transaksi', 'LIKE', '%'.$request->input('term', '').'%')
        ->get(['id', 'cat_transaksi as text']);
    return ['results' => $categories];

	}
}
