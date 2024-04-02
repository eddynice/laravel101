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
     $newPost->description = request('description');
     $newPost->short_notes= request('short_notes');
     $newPost->price = request('price');
     $newPost->image= request('image');
     $newPost->slug= request('slug');
     $newPost->save();
    
    return redirect('product/' . $newPost->id . '/edit');
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

public function update(Request $request, Product $product)
{
    $product->update([
        'title' => $request->title,
        'short_notes' => $request->short_notes,
        'price' => $request->price
    ]);
    
    return redirect('product/' . $product->id . '/edit');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect('product/');
}
}
