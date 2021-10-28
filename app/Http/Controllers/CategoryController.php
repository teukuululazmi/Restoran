<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    public function categoryPost(Request $request)
    {
        Category::create(['category' => $request->category]);
        return redirect()->back()->with('success', 'menambahkan');
    }

    public function categoryDelete($id)
    {
        Category::where('id', $id)->delete($id);
        return redirect()->back()->with('success', 'dihapuskan');
    }

    public function categoryUpdate(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ]);
        Category::where('id', $id)->update([
            'category' => $request->category,
        ]);
        return redirect()->back()->with('success', 'di edit');
    }
}
