<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permission::orderByDesc('id')->paginate();

        return view('permisos.index',compact('permisos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permisos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisos = Permission::create($request->all());
        return redirect()->route('permisos.index',$permisos->id)->with('info', 'Guardado Exitosamente' );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permisos
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permisos)
    {
        //dd($permisos->id);
        return view('permisos.show',compact('permisos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permisos
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permisos)
    {
        //dd($permisos->id);
        return view('permisos.edit',compact('permisos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permisos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permisos)
    {
        //dd($permisos->id);
        $permisos->update($request->all());
        return redirect()->route('permisos.index',$permisos->id)->with('info', 'Actualizado Exitosamente' );


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permisos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permisos)
    {
        $permisos->delete();
        return back()->with('info', 'Eliminado Exitosamente' );

    }
}