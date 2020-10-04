<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    public function show(Product $product)
    {
        // $data = Product::where('product_slug', $slug)
        //         ->first();
        // if (!$data) {
        //     abort(404);
        // }
        // dd($data);
        return view('product', compact('product'));
    }

    public function index() {
        $products = Product::all();
        return view('details',compact('products'))
            ->with('i');
    }

    public function edit(Product $product, $slug)
    {
        $data = Product::where('product_slug',$slug)->get();
		return view('edit',compact('data'));
    }

    public function update(Request $request, Product $product, $slug)
    {
        Product::where('product_slug',$request->$slug)->update([
            'product_title' => $request->title,
            'product_slug'  => $request->slug,
            'product_image' => $request->image
            ]);

            // redirect
            return redirect('products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
