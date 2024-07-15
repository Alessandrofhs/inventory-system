<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('content.product.list', compact('products'));
    }
    public function create()
    {
        return view('content.product.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'amount' => 'required',
            'place' => 'required',
            'update_at' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $filename = null;

        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $filename = date('Y-m-d') . '_' . $photo->getClientOriginalName(); // Ubah agar nama file unik dengan menambahkan tanggal
            $path = $photo->storeAs('public/photo-product', $filename);

            // Periksa apakah penyimpanan gambar berhasil
            if (!$path) {
                return redirect()->back()->withInput()->withErrors(['image' => 'Failed to upload image']);
            }
        }

        $product = new Product();
        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->place = $request->place;
        $product->update_at = $request->update_at;
        $product->image = $filename;


        $product->save();
        return redirect()->route('admin.product.index');
    }
    public function edit(Request $request, $id)
    {
        $products = Product::find($id);

        return view('content.product.edit', compact('products'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'amount' => 'required',
            'place' => 'required',
            'update_at' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048' // Menambahkan nullable dan image rule
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->place = $request->place;
        $product->update_at = $request->update_at;
        $product->image = $request->image;

        if ($request->password) {
            $product->password = Hash::make($request->password);
        }

        // Mengelola upload foto
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $filename = date('Y-m-d') . '_' . $photo->getClientOriginalName(); // Menggunakan timestamp untuk memastikan nama file yang unik
            $path = $photo->storeAs('public/photo-product', $filename); // Menyimpan foto ke dalam direktori 'storage/app/public/photo-product$product'

            $product->image = $filename; // Menyimpan nama file foto ke dalam kolom 'image' di tabel product
        }

        $product->save();

        return redirect()->route('admin.product.index');
    }

    public function delete(Request $request, $id)
    {
        $products = Product::find($id);
        if ($products) {
            $products->delete();
        }
        return redirect()->route('admin.product.index');
    }
}
