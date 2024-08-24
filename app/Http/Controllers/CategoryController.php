<?php

namespace App\Http\Controllers;

use App\Services\CategoryServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryServices $service
    ) {
        $this->service = $service;
    }

    public function store()
    {
        //
    }

    public function index()
    {
        $categories = $this->service->getAllCategories();

        return view('categories.index', compact('categories'));
    }

    public function show(int $id)
    {
        // 
    }

    public function destroy(int $id)
    {
        // 
    }
}
