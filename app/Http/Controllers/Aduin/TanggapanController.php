<?php

namespace App\Http\Controllers\Pengkat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class TanggapanController extends Controller
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
        DB::table('pengaduans')->where('id', $request->id_pengaduan)->update([
            'status'=> $request->status,
        ]);
        

        $petugas_id = Auth::user()->id;        

            
        $data = $request->all();

        $data['id_pengaduan'] = $request->id_pengaduan;
        $data['petugas_id']=$petugas_id;

        // Alert::success('Berhasil', 'Pengaduan berhasil ditanggapi');
        Tanggapan::create($data);
        return redirect('menu-pengaduan/pengaduan')->with('success', 'Tanggapan Berhasil di Berikan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pengaduan::with([
            'details', 'user' 
        ])->findOrFail($id);

        return view('pages.admin.tanggapan.index',[
        'item' => $item
        ]);

    //     echo "<pre>";
    //     print_r($item);
    //     exit;
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}