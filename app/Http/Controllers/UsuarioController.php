<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Requests\UsuarioRequest;
use Alert;

class UsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users = User::searchUsuario($request->name)->orderBy('id','ASC')->paginate(15);
        $users = DB::table('users')->orderBy('id','ASC')->paginate(15);
        return view('usuarios.index')->with('users',$users);
        
    }

    public function buscar(Request $request)
    {

        $users = DB::table('users')->where('name', 'like', '%'.$request->name.'%' )->orderBy('id','ASC')->paginate(15);
        return view('usuarios.index')->with('users',$users);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        //
        DB::table('users')->insert(
            [
                'name'  => $request->name,
                'email' => $request->email, 
                'password' => bcrypt($request->password),

            ]
        );
        /*
        $user = new  User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();*/

        alert()->success('El usuario ha sido registrado', 'Usuario registrado')->persistent('Close');

        return redirect()->route('usuarios.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$user = User::find($id);
        $user = DB::table('users')->where('id', $id)->first();

        return view('usuarios.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioRequest $request, $id)
    {
        //
        //$user = User::find($id);
        DB::table('users')->where('id', $id)->update(
            [
                'name' => $request->name,
                'email' => $request->email

            ]);
        /*
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();*/

        alert()->success('El usuario ha sido modificado', 'Usuario modificado')->persistent('Close');

        return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
