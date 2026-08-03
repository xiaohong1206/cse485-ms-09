<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index()
    {
        return Product::orderByDesc('id')->paginate(10);
    }

    public function show(int $id)
    {
        return Product::findOrFail($id);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:150'],
            'price' => ['required', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
        ]);

        $product = Product::create($data);
        return response()->json($product, 201);
    }

    public function update(Request $request, int $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->validate([
            'category_id' => ['sometimes', 'exists:categories,id'],
            'name' => ['sometimes', 'string', 'max:150'],
            'price' => ['sometimes', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
        ]);
        $product->update($data);
        return $product;
    }

    public function destroy(int $id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
