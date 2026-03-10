<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use RealRashid\SweetAlert\Facades\Alert;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Role';
        $roles = Role::get(); //select * from users
        return view('role.index', compact('title', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create New Role';
        return view('role.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name',
        ]);

        //Insert into users () values()
        Role::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        Alert::success('Success', 'Role created successfully');
        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Role";
        $roles = Role::find($id); //select * from users where id='$id'
        return view('role.edit', compact('title', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,' . $id,
        ]);

       $roles = Role::find($id);
        $roles->name = $request->name;
        $roles->save();

        Alert::success('Success', 'Role updated successfully');
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roles = Role::find($id);
        $roles->delete();
        Alert::success('Success', 'Role deleted successfully');
        return redirect()->route('role.index');
    }
}
