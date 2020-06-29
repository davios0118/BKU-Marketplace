<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $usuarios = User::all();
        return view('usuarios', compact('usuarios'));
    }
    public function editar($usuarioId)
    {
        $usuario = User::find($usuarioId);
        return view('actualizar', compact('usuario'));
    }
    public function actualizar(Request $request, $usuarioId)
    {
        if ($request->isOn) {
            $checkOn = true;
        } else {
            $checkOn = false;
        }


        $usuario = User::find($usuarioId);
        $usuario->update([
            'name' => $request->nombre,
            'isOn' => $checkOn,
        ]);
        return redirect()->route('usuarios.show');
        //return $usuario;
    }
}
