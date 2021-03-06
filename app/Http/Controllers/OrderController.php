<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Order\OrderContract;

class OrderController extends Controller
{
    protected $repo;

    public function __construct(OrderContract $orderContract) {
        $this->repo = $orderContract;
    }
    
    public function index()
    {
    return view('backend.order.index');

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
