<?php

namespace App\Http\Controllers\Admin;

use App\Galeria;
use Illuminate\Http\Request;

class GaleriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galerias.index',[
           'galerias'   =>  Galeria::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galerias.create',[
           'galeria'   =>  new Galeria()
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
        $galeria = new Galeria;

        if ($request->hasFile('imagem')) {
            $extension = $request->file('imagem')->getClientOriginalExtension();

            $galeria->image_extension = $extension;
            
            $galeria->fill($request->all());

            $galeria->save();

            $request->file('imagem')->move(base_path('/public_html/files/galerias'), sprintf('%s.%s', $galeria->id, $extension));

            return redirect()->route('admin.galerias.index')->with('flash.success','Imagem cadastrada com sucesso.');
        }

        return redirect()->back()->withErrors('Imagem obrigatória.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        return view('admin.galerias.edit',[
           'galeria'   =>  $galeria
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {

        if ($request->hasFile('imagem')) {
             // Apagando imagem antiga
            unlink(base_path('/public_html/files/galerias/'.$galeria->id.'.'.$galeria->image_extension));

            $extension = $request->file('imagem')->getClientOriginalExtension();

            $galeria->image_extension = $extension;
            
            $galeria->fill($request->all());

            $galeria->save();

            $request->file('imagem')->move(base_path('/public_html/files/galerias'), sprintf('%s.%s', $galeria->id, $extension));

            return redirect()->route('admin.galerias.index')->with('flash.success','Imagem editada com sucesso.');
        }

        return redirect()->back()->withErrors('Imagem obrigatória.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        $galeria->delete();

        return redirect()->route('admin.galerias.index')->with('flash.success','Imagem deletada com sucesso.');
    }
}
