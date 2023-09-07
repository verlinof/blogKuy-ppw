<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category', [
            'title' => 'category',
            'category' => 'web programming',
            'isLogin' => false
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
        ]);
    
        Categories::create($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}