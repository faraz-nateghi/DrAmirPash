<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::where('publish', true)
            ->with(['faqs' => function ($query) {
                $query->where('publish', true);
            }])
            ->get();

        return view('client.faq', compact('categories'));
    }
}
