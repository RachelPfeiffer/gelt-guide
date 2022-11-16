<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create() {
        return view('categories.create');
    }

    public function store(Request $r) {
        $validate = $r->validate([
            'name' => 'required|unique:categories|max:255',
        ]);
        $new = Category::firstOrCreate([
            'name' => $r->name,
        ]);
        return redirect('/admin/categories')->with('message', 'New Category Created.');
    }

    public function show($id) {
        $category = Category::firstOrFail('id', $id);
        return view('categories.show', [
            'category' => $category
        ]);
    }

    public function index() {
        $categories = Category::all();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }
}
