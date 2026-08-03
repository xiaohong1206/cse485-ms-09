<?php

namespace App\Http\Controllers\Lab;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryLabController extends Controller
{
    // GET /lab/categories
    public function index()
    {
        return Category::all();
    }

    // GET /lab/categories/{id}
    public function show(int $id)
    {
        return Category::findOrFail($id);
    }

    // POST /lab/categories
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:categories,name'],
            'description' => ['nullable', 'string'],
        ]);

        $category = Category::create($data);

        return response()->json($category, 201);
    }

    // PUT /lab/categories/{id}
    public function update(Request $request, int $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name' => ['sometimes', 'string', 'max:100', 'unique:categories,name,' . $category->id],
            'description' => ['nullable', 'string'],
        ]);

        $category->update($data);

        return response()->json($category);
    }

    // DELETE /lab/categories/{id}
    public function destroy(int $id)
    {
        if (Product::where('category_id', $id)->exists()) {
            return response()->json([
                'message' => 'Category còn sản phẩm, không thể xóa.'
            ], 422);
        }

        Category::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Deleted'
        ], 200);
    }
}
