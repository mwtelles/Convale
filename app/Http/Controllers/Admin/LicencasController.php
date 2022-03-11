<?php

namespace App\Http\Controllers\Admin;

use App\Licenca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Admin;

class LicencasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.licencas.index',[
            'licencas'  =>  Licenca::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.licencas.create',[
            "licenca"   =>  new Licenca
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
        $ata = new Licenca;

        if ($request->hasFile('licenca')) {
            $extension = $request->file('licenca')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Licenca deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('licenca')->move(base_path('/public_html/files/licencas'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.licencas.index')->with('flash.success','Arquivo de Licenca cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Licenca obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function show(Licenca $licenca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function edit(Licenca $licenca)
    {
        return view('admin.licencas.edit',[
            "licenca"   =>  $licenca
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licenca $licenca)
    {
        if ($request->hasFile('licenca')) {
            $extension = $request->file('licenca')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de licenca deve ser em formato pdf.');
            }

            $licenca->fill($request->all());

            $licenca->save();

            $request->file('licenca')->move(base_path('/public_html/files/licencas'), sprintf('%s.%s', $licenca->id, $extension));

            return redirect()->route('admin.licencas.index')->with('flash.success','Arquivo de licenca editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de licenca obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenca $licenca)
    {
        $licenca->delete();

        return redirect()->back()->withErrors('Arquivo de licenca deletado.');
    }
}
