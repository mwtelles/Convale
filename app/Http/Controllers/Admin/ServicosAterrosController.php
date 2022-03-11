<?php

namespace App\Http\Controllers\Admin;

use App\ServicosAterro;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Admin;

class ServicosAterrosController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.servicosaterros.index',[
            'servicosaterros'  =>  ServicosAterro::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicosaterros.create',[
            "servicosaterro"   =>  new ServicosAterro
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
        $ata = new ServicosAterro;

        if ($request->hasFile('servicosaterro')) {
            $extension = $request->file('servicosaterro')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de ServicosAterro deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('servicosaterro')->move(base_path('/public_html/files/servicosaterros'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.servicosaterros.index')->with('flash.success','Arquivo de ServicosAterro cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de ServicosAterro obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServicosAterro  $servicosaterro
     * @return \Illuminate\Http\Response
     */
    public function show(ServicosAterro $servicosaterro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServicosAterro  $servicosaterro
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicosAterro $servicosaterro)
    {
        return view('admin.servicosaterros.edit',[
            "servicosaterro"   =>  $servicosaterro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServicosAterro  $servicosaterro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicosAterro $servicosaterro)
    {
        if ($request->hasFile('servicosaterro')) {
            $extension = $request->file('servicosaterro')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de servicosaterro deve ser em formato pdf.');
            }

            $servicosaterro->fill($request->all());

            $servicosaterro->save();

            $request->file('servicosaterro')->move(base_path('/public_html/files/servicosaterros'), sprintf('%s.%s', $servicosaterro->id, $extension));

            return redirect()->route('admin.servicosaterros.index')->with('flash.success','Arquivo de servicosaterro editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de servicosaterro obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicosaterro  $servicosaterro
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicosAterro $servicosaterro)
    {
        $servicosaterro->delete();

        return redirect()->back()->withErrors('Arquivo de servicosaterro deletado.');
    }
}
