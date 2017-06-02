<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = category::all();
        return view("Admin.Category.create",compact('categories'));
    }

    public function create()
    {
        $categories = category::all();
        return view("Admin.Category.create",compact('categories'));
    }
    
    public function store(Request $request)
    {
       $this->validate($request, [
                'name' => 'required',
            ]);
        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];        
        category::create($input);
        return back()->with('success', 'New Category added successfully.');
    }

    public function show()
    {
        $categories = category::all();
        return view("Admin.Category.show",compact('categories'));
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
