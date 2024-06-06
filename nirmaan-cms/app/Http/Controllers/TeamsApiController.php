<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamsApiController extends Controller
{
    public function index()
    {
        $articles = DB::select("SELECT * FROM team_mates");
        return response()->json($articles);
    }

    // Create a new article
    // public function store(Request $request)
    // {
    //     $article = Article::create($request->all());
    //     return response()->json($article, 201);
    // }

    // Get a specific article
    // public function show(Article $article)
    // {
    //     return response()->json($article);
    // }

    // Update an article
    // public function update(Request $request, Article $article)
    // {
    //     $article->update($request->all());
    //     return response()->json($article);
    // }

    // Delete an article
    // public function destroy(Article $article)
    // {
    //     $article->delete();
    //     return response()->json(null, 204);
    // }
}
