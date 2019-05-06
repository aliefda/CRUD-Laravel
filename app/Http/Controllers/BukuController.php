<?php

namespace App\Http\Controllers;
use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();

        return view('index',['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'judul'         =>  'required',
            'pengarang'     =>  'required',
            'kategory'      =>  'required',
            'tahun_terbit'   => 'required',
            'penerbit'      =>  'required'
        ]);
        $data = new buku([
            'judul'         =>  $request->get('judul'),
            'pengarang'     =>  $request->get('pengarang'),
            'kategory'      =>  $request->get('kategory'),
            'tahun_terbit'   => $request->get('tahun_terbit'),
            'penerbit'      =>  $request->get('penerbit')
        ]);
        $data->save();
        return redirect()->route('buku.create')->with('success', 'Data Added');
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
        $buku = Buku::find($id);
        return view('edit', compact('buku', 'id'));

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
        $this->validate($request, [
            'judul'         =>  'required',
            'pengarang'     =>  'required',
            'kategory'      =>  'required',
            'tahun_terbit'   =>  'required',
            'penerbit'      =>  'required'
        ]);


        $data = Buku::find($id);

        $data->judul=$request->get('judul');
        $data->pengarang=$request->get('pengarang');
        $data->kategory=$request->get('kategory');
        $data->tahun_terbit=$request->get('tahun_terbit');
        $data->penerbit=$request->get('penerbit');

        $data->save();
        return redirect()->route('buku.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $buku = Buku::find($id);
      $buku->delete();
      return redirect()->route('buku.index');   
    }
}
