<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserContract;
use Sentinel;

class UserController extends Controller
{
    protected $repo;

    public function __construct(UserContract $userContract) {
        $this->repo = $userContract;
    }
    
    public function index()
    {
        //
        
        if(!Sentinel::forcecheck()){
            return redirect()->route('auth.login');
          }
          else{
            $users = $this->repo->findAll();
            return view('backend.users.index')->with('users', $users);
          }
        
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
      {
        if ($this->repo->remove($id)) {
          $notification = array(
            'message' => "User deleted successfully",
            'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
         } else {
          $error = array(
            'message' => 'Error Deleting User',
            'alert-type' => 'error'
          );
          return back()->with($error);
        }    
      }
    }
}
