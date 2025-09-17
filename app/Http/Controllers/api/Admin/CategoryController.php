<?php

namespace App\Http\Controllers\api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Traits\ApiResponse;

class CategoryController extends Controller
{
    use ApiResponse;
    public function index()
    {
        //lấy theo id giảm dần
        $categories = Category::orderBy('id', 'desc')->get();
        return $this->success($categories);
    }
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        if (!$category) {
            return $this->error('Danh mục không tồn tại', 404);
        }
        return $this->success($category);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description ?? null,
            'image' => $request->image ?? null,
            'status' => $request->status ?? 1,
        ]);

        return $this->success($category, 'Danh mục đã được tạo', 201);
    }
}
