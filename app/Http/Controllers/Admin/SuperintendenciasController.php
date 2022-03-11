<?php

namespace App\Http\Controllers\Admin;

use App\Superintendencia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Admin;

class SuperintendenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.superintendencias.index',[
            'superintendencias'  =>  Superintendencia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.superintendencias.create',[
            "superintendencia"   =>  new Superintendencia
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
        $ata = new Superintendencia;

        if ($request->hasFile('superintendencia')) {
            $extension = $request->file('superintendencia')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Superintendencia deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('superintendencia')->move(base_path('/public_html/files/superintendencias'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.superintendencias.index')->with('flash.success','Arquivo de Superintendencia cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Superintendencia obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Superintendencia  $superintendencia
     * @return \Illuminate\Http\Response
     */
    public function show(Superintendencia $superintendencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Superintendencia  $superintendencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Superintendencia $superintendencia)
    {
        return view('admin.superintendencias.edit',[
            "superintendencia"   =>  $superintendencia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Superintendencia  $superintendencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Superintendencia $superintendencia)
    {
        if ($request->hasFile('superintendencia')) {
            $extension = $request->file('superintendencia')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de superintendencia deve ser em formato pdf.');
            }

            $superintendencia->fill($request->all());

            $superintendencia->save();

            $request->file('superintendencia')->move(base_path('/public_html/files/superintendencias'), sprintf('%s.%s', $superintendencia->id, $extension));

            return redirect()->route('admin.superintendencias.index')->with('flash.success','Arquivo de superintendencia editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de superintendencia obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\superintendencia  $superintendencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Superintendencia $superintendencia)
    {
        $superintendencia->delete();

        return redirect()->back()->withErrors('Arquivo de superintendencia deletado.');
    }
}
