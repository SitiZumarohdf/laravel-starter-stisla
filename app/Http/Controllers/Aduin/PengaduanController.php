<?php

namespace App\Http\Controllers\Pengkat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LaporanExport;
use PDF;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $items = Pengaduan::all();
        $items = DB::table('pengaduans')->paginate(5);

        return view('pages.admin.pengaduan.index',[
            'items' => $items
        ]);

        
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
        //
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

        $tangap = Tanggapan::where('id_pengaduan',$id)->first();

        return view('pages.admin.pengaduan.detail',[
        'item' => $item,
        'tangap' => $tangap
        ]);
        // echo "<pre>";
        // print_r($item);
        // echo "<pre>";
        // print_r($tangap);
        // exit;
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
        
        
        $status->update($data);
        return redirect('admin/pengaduans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        // Alert::success('Berhasil', 'Pengaduan telah di hapus');
        return redirect('menu-pengaduan/pengaduan')->with('success', 'Data berhasil dihapus');
    }

    public function laporan() {

        $pengaduan = DB::table('pengaduans')->paginate(5);

        return view('pages.admin.laporan.index',[
            'pengaduan' => $pengaduan
        ]);

        // echo "<pre>";
        // print_r($pengaduan);
        // exit;
    }

    public function cetak() {

        $pengaduan = DB::table('pengaduans')->paginate(5);

        $pdf = PDF::loadview('pages.admin.laporan.index',[
            'pengaduan' => $pengaduan
        ]);
        return $pdf->download('laporan.pdf');
    }

    public function pdf($id) {

        $pengaduan = Pengaduan::find($id);

        $pdf = PDF::loadview('pages.admin.laporan.index', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }

    public function export()
    {
        // export data ke excel
        return Excel::download(new LaporanExport, 'pengaduan.xlsx');
    }
}