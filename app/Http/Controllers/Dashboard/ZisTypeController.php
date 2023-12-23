<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;
use Auth;
use App\Models\User;

use Carbon\Carbon;
use DataTables;
use Ramsey\Uuid\Uuid;
use DB;
use Alert;


use App\Models\ZisType;
use App\Models\ZisStandarisasi;
use App\Models\Zis;

//// Untuk Zis Type dan Stamdarisasi Ziss

class ZisTypeController extends Controller
{
    function __construct(){
        $this->middleware('permission:outsource-delete', ['only' => ['store' ,'destroy']]);
    }
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'zis_type.required' => 'Type ZIS Wajib Diisi',
        ];
        $this->validate($request, [
            'zis_type'=>'required'
        ],$messages);
        $kp = new ZisType;
        $kp->zis_type = $request->zis_type;
        $kp->save();

        Alert::success('Berhasil Menambah Type ZIS', $kp->zis_type);
        return redirect()->route('admin.zis.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        ZisType::find($id)->delete();
        return back();
    }

    //Zis Standarisasi
    
    public function storeStandarisasi(request $request){
        $messages = [
            'zis_standarisasi.required' => 'jumlah standarisasi zakat Wajib Diisi',
        ];
        $this->validate($request, [
            'zis_standarisasi'=>'required'
        ],$messages);
        $kp = new ZisStandarisasi;
        $kp->zis_standarisasi = $request->zis_standarisasi;
        $kp->save();

        Alert::success('Jumlah Standarisasi dirubah menjadi', $kp->zis_standarisasi);
        return redirect()->route('admin.zis.dashboard');
    }
}
