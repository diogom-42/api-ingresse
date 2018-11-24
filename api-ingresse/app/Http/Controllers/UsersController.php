<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        if(!$users){
        return response()->json(['message' => 'Registro não encontrado'],404);               
            }
            return response()->json($users);                 
    }

    //Fazendo a mesma busca por ID – método GET :

    public function show($id){

        $user = User::find($id);
        if(!$user){
            return response()->json(['message' => 'Registro não encontrado'],404);               
        }
        return response()->json($user);                 
    }

    //Inserindo Registro – método POST

    public function store(Request $request){

        $user = new User;
        $user->fill($request->all());
        $user->save();
    
        return response()->json($user, 201);
    }

    //Atualizando Registro – método PUT

    public function update(Request $request, $id){
        $user = User::find($id);
     
        if(!$user) {
           return response()->json(['message' => 'Registro não encontrado'], 404);
        }     
        $user->fill($request->all());
        $user->save();

        return response()->json($user);
     }

    //Deletando Registro – método DELETE

        public function destroy($id){
            $user = User::find($id);
        
            if(!$user) {
              return response()->json(['message' => 'Registro não encontrado'], 404);
            }
        
            $user->delete();
        
            return response()->json(['message' => 'Registro deletado'], 200);
        }
       

    



    
     
}
