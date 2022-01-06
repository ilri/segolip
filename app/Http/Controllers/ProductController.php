<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUploadsRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = auth()->user()->products()->orderBy('created_at', 'desc')->get();
        
        return view('products.index', compact('products'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function store(ProductRequest $request)
    {
        auth()->user()->products()->create($request->validated());
        
        return redirect()->route('products.index')->with('success', 'Product created...');
    }

    public function update(ProductRequest $request, Product $product)
    {
        auth()->user()->products()->where('id', $product->id)->update($request->validated());
        
        return redirect()->route('products.index')->with('success', 'Product updated...');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect()->route('products.index')->with('success', 'Product deleted...');
    }

    public function uploadPhoto(Request $request, Product $product)
    {
        $request->validate([
            'photo' => 'required|mimes:png,jpg,jpeg|unique:products',
        ]);
        
        if ($request->hasFile('photo')) {
            
            $filename = $request->photo->getClientOriginalName();

            if ($product->photo) {
                Storage::delete('/public/images/products/'.$product->photo);
            }

            $request->photo->storeAs('images/products', $filename, 'public');

            auth()->user()->products()->where('id', $product->id)->update(['photo' => $filename]);

            return redirect()->route('products.show', [$product])->with('success', 'Photo uploaded...');
        }
        
        return redirect()->route('products.show', [$product])->with('error', 'Photo not uploaded!');
    }

    public function uploadDetails(ProductUploadsRequest $request, Product $product)
    {
        if ($request->hasFile('details')) {
            
            $filename = $request->details->getClientOriginalName();

            if ($product->details) {
                Storage::delete('/public/docs/products/details/'.$product->details);
            }

            $request->details->storeAs('docs/products/details/', $filename, 'public');

            auth()->user()->products()->where('id', $product->id)->update(['details' => $filename]);

            return redirect()->route('products.show', [$product])->with('success', 'Details uploaded...');
        }
        
        return redirect()->route('products.show', [$product])->with('error', 'Details not uploaded!');
    }

    public function goToReport(Product $product)
    {
        return view('products.upload_report', compact('product'));
    }

    public function uploadReport(ProductUploadsRequest $request, Product $product)
    {
        if ($request->hasFile('report')) {
            
            $filename = $request->report->getClientOriginalName();

            if ($product->report) {
                Storage::delete('/public/docs/products/reports/'.$product->report);
            }

            $request->report->storeAs('docs/products/reports/', $filename, 'public');

            auth()->user()->products()->where('id', $product->id)->update(['report' => $filename]);

            return redirect()->route('products.show', [$product])->with('success', 'Report uploaded...');
        }
        
        return redirect()->route('products.show', [$product])->with('error', 'Report not uploaded!');
    }
}
