<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'         => 'required|string|max:255',
            'category_id'   => 'nullable|exists:categories,id',
            'excerpt'       => 'nullable|string',
            'body'          => 'required|string',
            'featured_image'=> 'nullable|image|max:2048',
            'is_published'  => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blogs.edit', compact('blog','categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title'         => 'required|string|max:255',
            'category_id'   => 'nullable|exists:categories,id',
            'excerpt'       => 'nullable|string',
            'body'          => 'required|string',
            'featured_image'=> 'nullable|image|max:2048',
            'is_published'  => 'boolean',
        ]);

        $data['slug'] = Str::slug($data['title']).'-'.$blog->id;

        if ($request->hasFile('featured_image')) {
            $data['featured_image'] = $request->file('featured_image')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success','Blog updated');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success','Blog deleted');
    }
}
