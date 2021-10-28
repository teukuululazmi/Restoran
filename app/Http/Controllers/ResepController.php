<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $resep = Resep::all();
        return view('admin.resep',compact('category', 'resep'));
    }

    public function resepPost(Request $request)
    {
        Resep::create([
            'category_id' => $request->category_id,
            'nama_makanan' => $request->nama_makanan,
            'bahan_bahan' => $request->bahan_bahan,
        ]);
        return redirect()->back()->with('success', 'menambahkan');
    }

    public function resepDelete($id)
    {
        Resep::where('id', $id)->delete($id);
        return redirect()->back()->with('success', 'dihapuskan');
    }

    public function resepUpdate(Request $request, $id)
    {
        Resep::where('id', $id)->update([
            'bahan_bahan' => $request->bahan_bahan,
        ]);
        return redirect()->back()->with('success', 'di edit');
    }

    public function resep()
    {
        $category = Category::all();
        $resep = Resep::all();
        return view('resep',compact('category', 'resep'));
    }
}
