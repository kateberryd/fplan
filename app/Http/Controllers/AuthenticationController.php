<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Authentication\AuthenticationContract;

use Sentinel;

class AuthenticationController extends Controller
{
    protected $repo;

    public function __construct(AuthenticationContract $authenticationContract) {
        $this->repo = $authenticationContract;
    }
    
    public function index()
    {
      return view('backend.auth.login');

    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
          ]);
  
          $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
          ];
  
         
                  
          try {
            if(Sentinel::forceauthenticate($credentials)) {
                  $authUser = Sentinel::getUser();
                  try {
                    if (Sentinel::getUser()->roles()->first()->slug === 'superadmin') {						
                        return redirect()->route('admin.dashboard');                  
                       }
                    elseif (Sentinel::getUser()->roles()->first()->slug === 'admin')  {
                         return redirect()->route('admin.dashboard');                          
                      } elseif (Sentinel::getUser()->roles()->first()->slug === 'vendor')  {
                                              
                        //   return redirect()->route('page.index');
                      }
                     elseif (Sentinel::getUser()->roles()->first()->slug === 'user') {			
                        //   return redirect()->route('page.index');
                    }
                  } catch (\BadMethodCallException $e) {
                    return redirect()->route('login.get')->with('error', 'Your Session has expired. Please login again!');
                  }
            } else {			
                  return redirect()->back()->with('error', 'Ops... Your Login Credentials did not match');
            }
          } catch(ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
          } catch(NotActivatedException $e){
            return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
          }
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
        //
    }
    
    
    public function logout() {
      if(!Sentinel::forcecheck()){
        return redirect()->route('auth.login');
      }else{
        Sentinel::logout(null, true);
        return redirect()->route('auth.login');
      }

    }
}
