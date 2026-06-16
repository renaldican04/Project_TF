<?php

namespace App\Http\Controllers;

use App\Models\Jersey;
use App\Models\Category;
use Illuminate\Http\Request;

class JerseyController extends Controller {
public function index() {
$jerseys = Jersey::with('category')->get();
return view('jerseys.index', compact('jerseys'));
}
public function create() {
$categories = Category::all();
return view('jerseys.create', compact('categories'));
}
public function store(Request $request) {
$request->validate([
'category_id'=>'required',
'name'=>'required',
'price'=>'required|numeric',
'stock'=>'required|numeric'
]);
Jersey::create($request->all());
return redirect()->route('jerseys.index');
}
public function edit(Jersey $jersey) {
$categories = Category::all();
return view('jerseys.edit', compact('jersey','categories'));
}
public function update(Request $request, Jersey $jersey) {
$request->validate([
'category_id'=>'required',
'name'=>'required',
'price'=>'required|numeric',
'stock'=>'required|numeric'
]);
$jersey->update($request->all());
return redirect()->route('jerseys.index');
}
public function destroy(Jersey $jersey) {
$jersey->delete();
return redirect()->route('jerseys.index');
}
}
