<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::get();
        return view('kriteria.index',compact('kriterias'));
    }

    public function create()
    {
        return view('kriteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_kriteria' => 'required|string|max:255',
            'nama_kriteria' => 'required|string|max:255',
            'bobot' => 'required|integer',
            'status' => 'required|in:BENEFIT,COST',
        ]);

        Kriteria::create([
            'kode_kriteria'=>$request->kode_kriteria,
            'nama_kriteria'=>$request->nama_kriteria,
            'bobot'=>$request->bobot,
            'status'=>$request->status
        ]);

        return redirect('kriterias/create')->with('status', 'Kriteria berhasil dibuat.');
        
    }

    public function edit(int $id)
    {
        $kriteria = Kriteria::findOrFail($id);
        //return $kriteria; 
        return view('kriteria.edit',compact('kriteria'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'kode_kriteria' => 'required|string|max:255',
            'nama_kriteria' => 'required|string|max:255',
            'bobot' => 'required|integer',
            'status' => 'required|in:BENEFIT,COST',
        ]);

        Kriteria::findOrFail($id)->update([
            'kode_kriteria'=>$request->kode_kriteria,
            'nama_kriteria'=>$request->nama_kriteria,
            'bobot'=>$request->bobot,
            'status'=>$request->status
        ]);

        return redirect()->back()->with('status', 'Kriteria berhasil diUpdate.');
    }

    public function destroy(int $id)
    {
        
        $kriteria = Kriteria::findOrFail($id);
        $kriteria->delete();
    
        
        $kriteriaSemua = Kriteria::orderBy('id')->get();
    
       
        \DB::statement('ALTER TABLE kriterias AUTO_INCREMENT = 1;');
    
        
        foreach ($kriteriaSemua as $index => $item) {
            $item->id = $index + 1; 
            $item->save();
        }
    
        return redirect()->back()->with('status', 'Kriteria berhasil dihapus.');
    }
    
}
