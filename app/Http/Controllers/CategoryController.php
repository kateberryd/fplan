<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Repositories\Category\CategoryContract;

use Sentinel;

class CategoryController extends Controller
{
    protected $repo;

    public function __construct(CategoryContract $categoryContract) {
        $this->repo = $categoryContract;
    }
    
    public function index()
    {
        //
        
        $categories = $this->repo->findAll();
        
        return view('backend.category.index')->with('categories', $categories);

        
    }
    
    public function create()
    {
        //
        
        return view('backend.category.create');

    }
    
    public function store(Request $request) {
        
        if(!Sentinel::forcecheck()){
          return redirect()->route('auth.login');
        }
        else{
          $this->validate($request, [
            'name' => 'required',
            
          ]);
      
          try {
            $category = $this->repo->create($request);
      
            $notification = array(
              'message' => " Category $category->name created successfully",
              'alert-type' => 'success'
            );		
      
            if($category->id) {
            return redirect()->back()->with($notification);
            } else {
              return back()->withInput()->with('error', 'Could not create  category. Try again!');
            }
          } catch (QueryException $e) {
              
              dd($e);
            
            $error = array(
              'message' => "Category $request->name already exists!",
              'alert-type' => 'error'
            );
      
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
              return redirect()->back()->withInput()->with($error);
            }
          }
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
      if(!Sentinel::forcecheck()){
        return redirect()->route('auth.login');
      }
      else{
       
        try {
          $category = $this->repo->update($request,  $id);
    
          $notification = array(
            'message' => " Category $category->name updated successfully",
            'alert-type' => 'success'
          );		
    
          if($category->id) {
          return redirect()->back()->with($notification);
          } else {
            return back()->withInput()->with('error', 'Could not update  category. Try again!');
          }
        } catch (QueryException $e) {
            
            dd($e);
          
          $error = array(
            'message' => "There was an error!",
            'alert-type' => 'error'
          );
    
          $errorCode = $e->errorInfo[1];
          if($errorCode == 1062){
            return redirect()->back()->withInput()->with($error);
          }
        }
      }
    }
    
    public function delete($id)
    {
      {
        if ($this->repo->remove($id)) {
          $notification = array(
            'message' => "Category deleted successfully",
            'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
         } else {
          $error = array(
            'message' => 'Error Deleting Category',
            'alert-type' => 'error'
          );
          return back()->with($error);
        }    
      }
    }
}
