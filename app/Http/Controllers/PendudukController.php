<?php

namespace App\Http\Controllers;


use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $penduduk = DB::table('penduduk')->get();
            return view ('/data' , ['penduduk' => $penduduk]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view ('create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('penduduk')->insert([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,  
            'hp' => $request->hp,  
            'kewarganegaraan' => $request->kewarganegaraan,  
        ]);

        return redirect('/');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $penduduk = DB::table('penduduk')->where('id', $id)->first();
            return view ('/edit', ['penduduk' => $penduduk]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        {
            DB::table('penduduk')->where('id', $request->id)->update([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'agama' => $request->agama,
                'status' => $request->status,
                'pekerjaan' => $request->pekerjaan,  
                'hp' => $request->hp,  
                'kewarganegaraan' => $request->kewarganegaraan,
        ]);
        return redirect ('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            DB::table('penduduk')->where('id', $id)->delete();
            return redirect('/');
        }
    }
}
