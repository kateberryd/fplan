<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\BussinessPlan\BussinessPlanContract;

class BussinessPlanController extends Controller
{
    protected $repo;

    public function __construct(BussinessPlanContract $bussinessPlanContract) {
        $this->repo = $bussinessPlanContract;
    }
    
    public function index()
    {
        return view('backend.businessplan.index');

    }
    
    public function create()
    {
        return view('backend.businessplan.create');

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
