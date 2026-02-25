<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     */
   public function __invoke(Request $request, $id) // Added $id here
{
    return "Article Page with ID " . $id; 
}
}