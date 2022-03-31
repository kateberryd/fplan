<?php

namespace App\Repositories\Category;

use App\Repositories\Category\CategoryContract;

use App\Models\Category;

class EloquentCategoryRepository implements CategoryContract {
    //
    
    public function create($request){
    $str = strtolower($request->name);
    $result = new Category;
    $result->name = $request->name;
    $result->desc = $request->desc;
    $result->slug = $str;
    $result->save();
    return $result;
    }
    
    
    public function findAll(){
        return Category::all();
    }
    
    
    public function findById($id) {
        return  Category::where('id', $id)->first();
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
    
      // Remove  Item
      public function remove($id) {
        $category = $this->findById($id);
        return $category->delete();
      }
}
