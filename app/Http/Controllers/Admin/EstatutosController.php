<?php

namespace App\Http\Controllers\Admin;

use App\Estatuto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Admin;

class EstatutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.estatutos.index',[
            'estatutos'  =>  Estatuto::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estatutos.create',[
            "estatuto"   =>  new Estatuto
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
        $ata = new Estatuto;

        if ($request->hasFile('estatuto')) {
            $extension = $request->file('estatuto')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Estatuto deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('estatuto')->move(base_path('/public_html/files/estatutos'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.estatutos.index')->with('flash.success','Arquivo de Estatuto cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Estatuto obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estatuto  $estatuto
     * @return \Illuminate\Http\Response
     */
    public function show(Estatuto $estatuto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estatuto  $estatuto
     * @return \Illuminate\Http\Response
     */
    public function edit(Estatuto $estatuto)
    {
        return view('admin.estatutos.edit',[
            "estatuto"   =>  $estatuto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estatuto  $estatuto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estatuto $estatuto)
    {
        if ($request->hasFile('estatuto')) {
            $extension = $request->file('estatuto')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de estatuto deve ser em formato pdf.');
            }

            $estatuto->fill($request->all());

            $estatuto->save();

            $request->file('estatuto')->move(base_path('/public_html/files/estatutos'), sprintf('%s.%s', $estatuto->id, $extension));

            return redirect()->route('admin.estatutos.index')->with('flash.success','Arquivo de estatuto editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de estatuto obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estatuto  $estatuto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estatuto $estatuto)
    {
        $estatuto->delete();

        return redirect()->back()->withErrors('Arquivo de estatuto deletado.');
    }
}
