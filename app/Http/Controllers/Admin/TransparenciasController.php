<?php

namespace App\Http\Controllers\Admin;

use App\Transparencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Admin;

class TransparenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transparencias.index',[
            'transparencias'  =>  Transparencia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transparencias.create',[
            "transparencia"   =>  new Transparencia
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
        $ata = new Transparencia;

        if ($request->hasFile('transparencia')) {
            $extension = $request->file('transparencia')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Transparencia deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('transparencia')->move(base_path('/public_html/files/transparencias'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.transparencias.index')->with('flash.success','Arquivo de Transparencia cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Transparencia obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function show(Transparencia $transparencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Transparencia $transparencia)
    {
        return view('admin.transparencias.edit',[
            "transparencia"   =>  $transparencia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transparencia $transparencia)
    {
        if ($request->hasFile('transparencia')) {
            $extension = $request->file('transparencia')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de transparencia deve ser em formato pdf.');
            }

            $transparencia->fill($request->all());

            $transparencia->save();

            $request->file('transparencia')->move(base_path('/public_html/files/transparencias'), sprintf('%s.%s', $transparencia->id, $extension));

            return redirect()->route('admin.transparencias.index')->with('flash.success','Arquivo de transparencia editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de transparencia obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transparencia  $transparencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transparencia $transparencia)
    {
        $transparencia->delete();

        return redirect()->back()->withErrors('Arquivo de transparencia deletado.');
    }
}
