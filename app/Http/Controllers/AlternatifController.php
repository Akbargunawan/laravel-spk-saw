<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternatif;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatives = Alternatif::get();
        return view('alternatif.index',compact('alternatives'));
    }

    public function create()
    {
        return view('alternatif.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_alternatif' => 'required|string|max:255',
            'nama_destinasi' => 'required|string|max:255',
            'C1' => 'required|integer',
            'C2' => 'required|integer',
            'C3' => 'required|integer',
            'C4' => 'required|integer',
            'C5' => 'required|integer'
            
        ]);

        Alternatif ::create([
            'kode_alternatif'=>$request->kode_alternatif,
            'nama_destinasi'=>$request->nama_destinasi,
            'C1'=>$request->C1,
            'C2'=>$request->C2,
            'C3'=>$request->C3,
            'C4'=>$request->C4,
            'C5'=>$request->C5
            
        ]);

        return redirect('alternatives/create')->with('status', 'Alternatif berhasil dibuat.');
        
    }

    public function edit(int $id)
    {
        $alternatif = Alternatif::findOrFail($id);
        //return $kriteria; 
        return view('alternatif.edit',compact('alternatif'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'kode_alternatif' => 'required|string|max:255',
            'nama_destinasi' => 'required|string|max:255',
            'C1' => 'required|integer',
            'C2' => 'required|integer',
            'C3' => 'required|integer',
            'C4' => 'required|integer',
            'C5' => 'required|integer'
        ]);

        Alternatif::findOrFail($id)->update([
            'kode_alternatif'=>$request->kode_alternatif,
            'nama_destinasi'=>$request->nama_destinasi,
            'C1'=>$request->C1,
            'C2'=>$request->C2,
            'C3'=>$request->C3,
            'C4'=>$request->C4,
            'C5'=>$request->C5
        ]);

        return redirect()->back()->with('status', 'Alternatif berhasil diUpdate.');
    }


    public function destroy(int $id)
    {
        
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();
    
        
        $alternatifSemua = Alternatif::orderBy('id')->get();
    
       
        \DB::statement('ALTER TABLE alternatives AUTO_INCREMENT = 1;');
    
        
        foreach ($alternatifSemua as $index => $item) {
            $item->id = $index + 1; 
            $item->save();
        }
    
        return redirect()->back()->with('status', 'Alternatif berhasil dihapus.');
    }

}
