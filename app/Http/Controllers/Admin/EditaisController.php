<?php

namespace App\Http\Controllers\Admin;

use App\Edital;
use Illuminate\Http\Request;

class EditaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.editais.index',[
            'editais'  =>  Edital::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editais.create',[
            "edital"   =>  new Edital
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
        $ata = new Edital;

        if ($request->hasFile('edital')) {
            $extension = $request->file('edital')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Edital deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('edital')->move(base_path('/public_html/files/editais'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.editais.index')->with('flash.success','Arquivo de Edital cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Edital obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edital  $edital
     * @return \Illuminate\Http\Response
     */
    public function show(Edital $edital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edital  $edital
     * @return \Illuminate\Http\Response
     */
    public function edit(Edital $edital, $id)
    {

        return view('admin.editais.edit',[
            "edital"   =>  Edital::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edital  $edital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edital $edital,$id)
    {
        $edital = Edital::find($id);

        if ($request->hasFile('edital')) {
            $extension = $request->file('edital')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Edital deve ser em formato pdf.');
            }

            $edital->fill($request->all());

            $edital->save();

            $request->file('edital')->move(base_path('/public_html/files/editais'), sprintf('%s.%s', $edital->id, $extension));

            return redirect()->route('admin.editais.index')->with('flash.success','Arquivo de Edital editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Edital obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edital  $edital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edital $edital,$id)
    {
        $edital = Edital::find($id);

        $edital->delete();

        return redirect()->back()->withErrors('Arquivo de Edital deletado.');
    }
}
