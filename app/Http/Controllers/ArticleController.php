<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showAll() {
        $allArticles=Article::select('select * from articles');

    foreach ($allArticles as $allArticle) {
            echo $allArticle->title;
        }
    }

    public function showArticle($title) {
        $article=Article::select('select * from articles where title like '$title'');

    foreach ( as $allArticle) {
            echo $allArticle->title;
        }
    }

    public function saveArticle(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'article_content' => 'required',
            
          ]);
  
          $newArticle = Article::create([
            'title' => $validatedData['title'],
            'genre' => $validatedData['genre'],
            'article_content' => $validatedData['article_content'],
            
          ]);
  
          return response()->json('Article created!');
    }

    public function updateArticle(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'article_content' => 'required',
            
          ]);
  
          $updatedArticle = Article::update([
            'title' => $validatedData['title'],
            'genre' => $validatedData['genre'],
            'article_content' => $validatedData['article_content'],
            
          ]);
  
          return response()->json('Article updated!');
    }

    public function deleteArticle() {
       
  
          $deleteArticle = Article::delete(['delete from articles where title like '$title'']);
  
          return response()->json('Article deleted!');
    }
}
