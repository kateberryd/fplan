<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AdminDashboard\AdminDashboardContract;
use Sentinel;
class AdminDashboardController extends Controller
{
    protected $repo;

    public function __construct(AdminDashboardContract $adminDashboardContract) {
        $this->repo = $adminDashboardContract;
    }
    
    public function index()
    {
        
        if(!Sentinel::forcecheck()){
            return redirect()->route('auth.login');
        }else{
         return view('backend.admindashboard.index');

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
        //
    }
}
