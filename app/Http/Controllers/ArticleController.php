<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        if ($article) {
            return view('pages.article', ["article" => $article]);
        } else {
            return view('errors.not-found');
        }
    }

    public function create()
    {

        Article::truncate();
        Article::create([
            'title' => "L'IA soigne mieux",
            'description' => "L'intelligence artificielle aide les médecins à diagnostiquer plus vite."
        ]);

        Article::create([
            'title' => "Villes vertes",
            'description' => "Les métropoles deviennent plus écologiques et durables."
        ]);

        Article::create([
            'title' => "Télétravail",
            'description' => "Plus de liberté, mais aussi plus de solitude."
        ]);

        return "Articles ajoutés avec succès !";
    }

    public function update($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article = Article::find($id);
            $article->title = $article->title . " -Modifié";
            $article->save();
            return "Article modifié !";
        } else {
            return view('errors.not-found');
        }
    }

    public function delete($id)
    {

        $article = Article::find($id);
        if ($article) {
            Article::destroy($id);

            return "Article supprimé ! !";
        } else {
            return view('errors.not-found');
        }
    }
}
