<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function saveUser(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
          ]);
  
          $newUser = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            
          ]);
  
          return response()->json('User created!');
    }

    public function showUser($name) {
        $showUser=User::select('select * from user where name like '$name'');
    }

    foreach ( as $showUser) {
        echo $showUser->user;
    }
    }

    public function updateUser(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
          ]);
  
          $updatedArticle = User::update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            
          ]);
  
          return response()->json('User updated!');
    }

    public function deleteUser($email) {
       
  
        $deleteUser = User::delete(['delete from users where email like '$email'']);

        return response()->json('User deleted!');
  }
}
