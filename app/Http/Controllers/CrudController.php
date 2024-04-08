<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
class CrudController extends Controller
{
    //Display a listing of the resource.
public function index(){
    $products = crud::all(); //fetch all products from DB
    return view('product.list', ['products' => $products]);
}
// Show the form for creating a new resource
public function create(){
    
    return view('product.add');
}

//Store a newly created resource in storage.

public function store(Request $request)
{
    $newPost = new crud();
    $newPost->title = request('title');
    //  $newPost->description = request('description');
     $newPost->short_notes= request('short_notes');
     $newPost->price = request('price');
    
     $newPost->save();
    
    return redirect('product');
    // return redirect('product/' . $newPost->id . '/edit');
}

public function show(Product $product)
{
    //
}


public function edit($id)
{
    $product = crud::find($id);
    return view('product.edit',  [
         'product' => $product,
     ]);
}
// public function edit(Product $product)
// {
//     return view('product.edit', [
//         'product' => $product,
//     ]);
// }

public function update(Request $request, $id)
{
//    $product->update([
//         'title' => $request->title,
//         'short_notes' => $request->short_notes,
//         'price' => $request->price
//     ]); 

$editProduct = Crud::findOrFail($id);

$editProduct->title = $request->input('title');
// $editProduct->description = $request->input('description');
$editProduct->short_notes= $request->input('short_notes');
$editProduct->price = $request->input('price');

$editProduct->update();
return redirect('product')->with('status','updated successfully');

}

public function destroy($id)
{
    $deleteProduct = Crud::findOrFail($id);
    $deleteProduct->delete();
    return redirect('product/');
}

public function search(Request $request)
{
   $projects = project::where([
    ['name', '!=', Null],
    [function($query) use ($request){
        if (($term = $request->term)){
            $query->orWhere('name', 'LIKE', '%' . $term . '%')->get();
        }
    }]
   ])->orderBy("id", "desc")
   ->pagination(10);
   //$projects = project::latest()->paginate(5);

   return view('project.view', compact('projects'))
   ->with('i', (request()->input('page', 1) -1) *5);
}


// public function index()
// {
//         $project = Project::query();
//         if (request('term')) {
//             $project->where('name', 'Like', '%' . request('term') . '%');
//         }

//         return $project->orderBy('id', 'DESC')->paginate(10);
// }

}
