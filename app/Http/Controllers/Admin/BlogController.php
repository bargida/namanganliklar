<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs')) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.blogs.create',  compact('blog','categories')) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all() ;
        if($request->hasFile('photo')){
            $file=request()->file('photo');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $file->move('files/photos', $fileName);
            $requestData['photo'] = $fileName;
        }
        $blogs = Blog::create($requestData) ;
        return redirect()->route('admin.blogs.store') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index') ;
    }
}
