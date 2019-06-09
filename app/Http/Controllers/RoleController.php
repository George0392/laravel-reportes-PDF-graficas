<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::orderByDesc('id')->paginate();

        return view('roles.index',compact('roles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = Role::create($request->all());

        $roles->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $roles->id)
            ->with('info', 'Rol guardado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Role $roles)
    {
        // dd($roles->id);
        return view('roles.show',compact('roles'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $roles)
    {
        //dd($roles->id);
        $permissions = Permission::get();

        return view('roles.edit',compact('roles','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $roles)
    {
        //dd($roles->id);

        $roles->update($request->all());

        $roles->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $roles->id)
            ->with('info', 'Rol guardado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $roles)
    {
        $roles->delete();
        return back()->with('info', 'Eliminado Exitosamente' );

    }
}
