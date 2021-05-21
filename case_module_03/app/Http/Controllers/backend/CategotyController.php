<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategotyController extends Controller
{
    public $categories = [
        [
            "id" => 1,
            "name" => "Lập trình cơ bản",
            "total_post" => 10,
            "slug" => "lap-trinh-co-ban"
        ],
        [
            "id" => 2,
            "name" => "Ebooks",
            "total_post" => 500,
            "slug" => "ebooks"
        ],
    ];
    public function index()
    {
        $totals = 2;
        $categories = $this->categories;
        return view('backend.category.index', compact('categories', 'totals'));
    }
    
    public function showEdit(Request $request)
    {

        $id = ($request->id) - 1;
        $cate = $this->categories[$id];
        $categories = $this->categories;
        return view('backend.category.edit', compact('cate', 'categories'));
    }
    
}
