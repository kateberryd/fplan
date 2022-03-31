<?php

namespace App\Repositories\User;

use App\Repositories\User\UserContract;

use App\Models\User;

class EloquentUserRepository implements UserContract {
    //
    
    public function findAll() {
        return User::all();
    }

    public function findAllUsers(){
        $users = User::where('user_role', 'user')->get();
        return $users;
        
    }
    
    public function findById($id){
        return User::where('id', $id)->first();
    }

     public function remove($id) {
        $user = $this->findById($id);
        return $user->delete();
     }
     
    
    
    // Update  category
    public function update($request, $id) {
        $category = $this->findById($id);
        $category->name = $request->name;  
        $category->desc = $request->desc;   
        $str = strtolower($request->name);
        $category->slug = preg_replace('/\s+/', '-', $str);
        $category->save();
        return $category;
      }
    
    
}
