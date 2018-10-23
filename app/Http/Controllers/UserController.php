<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:users.index')->only('index');
      $this->middleware('permission:users.show')->only('show');
      $this->middleware('permission:users.edit')->only(['edit', 'update']);
      $this->middleware('permission:roles.destroy')->only('destroy');
    }

    public function index()
    {
      $users = User::orderBy('id', 'DESC')->paginate();

      return view('users.index',compact('users'));
    }


    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
      // actualizar usuario
      $user->update($request->all());

      // actualizar roles
      $user->roles()->sync($request->get('roles'));

      return redirect()->route('users.edit', $user->id)
              ->with('success', 'Usuario actualizado con éxito');
    }


    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'Usuario eliminado con éxito');
    }
}
