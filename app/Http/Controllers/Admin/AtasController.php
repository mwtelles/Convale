<?php

namespace App\Http\Controllers\Admin;

use App\Ata;
use Illuminate\Http\Request;

class AtasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.atas.index',[
            'atas'  =>  Ata::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.atas.create',[
            "ata"   =>  new Ata
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ata = new Ata;

        if ($request->hasFile('ata')) {
            $extension = $request->file('ata')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Ata deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('ata')->move(base_path('/public_html/files/atas'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.atas.index')->with('flash.success','Arquivo de Ata cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Ata obrigatório.');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ata  $ata
     * @return \Illuminate\Http\Response
     */
    public function show(Ata $ata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ata  $ata
     * @return \Illuminate\Http\Response
     */
    public function edit(Ata $ata)
    {
        return view('admin.atas.edit',[
            "ata"   =>  $ata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ata  $ata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ata $ata)
    {

        if ($request->hasFile('ata')) {
            $extension = $request->file('ata')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Ata deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('ata')->move(base_path('/public_html/files/atas'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.atas.index')->with('flash.success','Arquivo de Ata editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Ata obrigatório.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ata  $ata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ata $ata)
    {
        $ata->delete();
        
        return redirect()->back()->withErrors('Arquivo de Ata obrigatório.'); 
    }
}
