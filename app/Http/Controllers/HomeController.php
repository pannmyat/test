<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\category;
use App\subcategory;
use App\product;

class HomeController extends Controller
{
   
    public function index()
    {
        // $cat=\Request::get('cat');
        // $subcat=\Request::get('subcat');
        // $search=\Request::get('search');
        $categories = category::all();
        $products = product::all();
        // $products = product::Where('categories_id', 'like', '%' . $cat . '%')
        //                     ->Where('subcategories_id', 'like', '%' . $subcat . '%')
        //                     ->Where('name', 'like', '%' . $search . '%')
        //                     ->select('name','photos','price','description')->get();      
        return view('Home.index',compact('categories','products'));            
    }

   
    public function create()
    {
        
    }
   
    public function store(Request $request)
    {
        
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
          
    }
}
