<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::leftJoin('jabatan', 'jabatan.id_jabatan', '=', 'pegawai.id_jabatan')->get();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('pegawai/create', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'       => 'required|max:255',
            'jk'         => 'required',
            'tanggal'    => 'required',
            'jabatan'    => 'required',
            'keterangan' => 'required',
            'foto'       => 'required'
        ], [
            'nama.required'       => 'Nama pegawai tidak boleh kosong',
            'jk.required'         => 'Jenis Kelamin tidak boleh kosong',
            'tanggal.required'    => 'Tanggal lahir tidak boleh kosong',
            'jabatan.required'    => 'Jabatan harus diisi',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'foto.required'       => 'Foto tidak boleh kosong'
        ]);

        if ($request->hasFile('foto')) {
            $file     = $request->file('foto');
            $namafile = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namafile);
        }

        $pegawai                = new Pegawai;
        $pegawai->nama_pegawai  = $request->nama;
        $pegawai->jenis_kelamin = $request->jk;
        $pegawai->tgl_lahir     = $request->tanggal;
        $pegawai->id_jabatan       = $request->jabatan;
        $pegawai->keterangan    = $request->keterangan;
        $pegawai->foto          = $namafile;
        $pegawai->save();

        return redirect('pegawai')->with('status', 'Data pegawai berhasil ditambahkan!');
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
    public function edit(Pegawai $pegawai)
    {
        $jabatan = Jabatan::all();
        $l = ($pegawai->jenis_kelamin == "L") ? " checked" : "";
        $p = ($pegawai->jenis_kelamin == "P") ? " checked" : "";
        return view('pegawai.edit', compact('pegawai', 'jabatan', 'l', 'p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $this->validate($request, [
            'nama'       => 'required|max:255',
            'jk'         => 'required',
            'tanggal'    => 'required',
            'jabatan'    => 'required',
            'keterangan' => 'required'
        ], [
            'nama.required'       => 'Nama pegawai tidak boleh kosong',
            'jk.required'         => 'Jenis Kelamin tidak boleh kosong',
            'tanggal.required'    => 'Tanggal lahir tidak boleh kosong',
            'jabatan.required'    => 'Jabatan harus diisi',
            'keterangan.required' => 'Keterangan tidak boleh kosong',
            'foto.required'       => 'Foto tidak boleh kosong'
        ]);

        $ubahfile = false;
        if ($request->hasFile('foto')) {
            $file     = $request->file('foto');
            $namafile = time().$file->getClientOriginalName();
            $file->move(public_patch().'/images/', $namafile);
            $ubahfile = true;
        }

        $pegawai->nama_pegawai  = $request->nama;
        $pegawai->jenis_kelamin = $request->jk;
        $pegawai->tgl_lahir     = $request->tanggal;
        $pegawai->id_jabatan       = $request->jabatan;
        $pegawai->keterangan    = $request->keterangan;
        if ($ubahfile) {
            unlink(public_path().'/images/', $pegawai->foto);
            $pegawai->foto = $namafile;
        }
        $pegawai->update();

        return redirect('pegawai')->with('status', 'Data pegawai berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        unlink(public_path().'/images/'.$pegawai->foto);

        return redirect('pegawai')->with('status', 'Data pegawai berhasil dihapus!');
    }
}
