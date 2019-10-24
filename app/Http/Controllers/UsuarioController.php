<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function all()
    {
        //
        $users = DB::select('select * from usuarios');
        return response()->json($users);
    }

    public function createUser(Request $request)
    {
        $usuario = $request->name;
        $email = $request->email;
        $affected = DB::table('usuarios')->insert(array(
            'usuario' => $usuario,
            'email'  => $email,
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));        
    }
    
    public function updateUser(Request $request)
    {
        $usuario = $request->name;
        $email = $request->email;
        $id = $request->id;
        DB::update('update usuarios set usuario = ?, email = ? where id = ?', [$usuario, $email, $id]);        
    }

    public function deleteUser(Request $request)
    {        
        $id = $request->id;
        $affected = DB::delete('delete from usuarios where id = ?', [$id]);        
    }
}
