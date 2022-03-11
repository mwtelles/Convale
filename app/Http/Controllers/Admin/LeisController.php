<?php

namespace App\Http\Controllers\Admin;

use App\Lei;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Admin;

class LeisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.leis.index',[
            'leis'  =>  Lei::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leis.create',[
            "lei"   =>  new Lei
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
        $ata = new Lei;

        if ($request->hasFile('lei')) {
            $extension = $request->file('lei')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de Lei deve ser em formato pdf.');
            }

            $ata->fill($request->all());

            $ata->save();

            $request->file('lei')->move(base_path('/public_html/files/leis'), sprintf('%s.%s', $ata->id, $extension));

            return redirect()->route('admin.leis.index')->with('flash.success','Arquivo de Lei cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de Lei obrigatório.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lei  $lei
     * @return \Illuminate\Http\Response
     */
    public function show(Lei $lei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lei  $lei
     * @return \Illuminate\Http\Response
     */
    public function edit(Lei $lei)
    {
        return view('admin.leis.edit',[
            "lei"   =>  $lei
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lei  $lei
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lei $lei)
    {
        if ($request->hasFile('lei')) {
            $extension = $request->file('lei')->getClientOriginalExtension();

            if($extension != 'pdf'){
                return redirect()->back()->withErrors('Arquivo de lei deve ser em formato pdf.');
            }

            $lei->fill($request->all());

            $lei->save();

            $request->file('lei')->move(base_path('/public_html/files/leis'), sprintf('%s.%s', $lei->id, $extension));

            return redirect()->route('admin.leis.index')->with('flash.success','Arquivo de lei editado com sucesso.');
        }

        return redirect()->back()->withErrors('Arquivo de lei obrigatório.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lei  $lei
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lei $lei)
    {
        $lei->delete();

        return redirect()->back()->withErrors('Arquivo de lei deletado.');
    }
}
