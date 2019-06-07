<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Author;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function getLogin() {

      return view('home');
    }

  


     function getLast5Posts() {

       $categories = Category::all();
       $authors = Author::all();
       $posts = Post::OrderByDesc('updated_at')->take(5)->get();

       return view('page.home', compact('posts', 'categories', 'authors'));
     }



       function search(Request $request) {

         $title = $request -> title;
         $content = $request -> content;
         $category = $request -> category;
         $author = $request -> author;

         $query = Post::query();

         if ($title) {

           $query = $query -> where('title', 'LIKE', '%'. $title. '%');
         }
         if ($content) {

           $query = $query -> where('content', 'LIKE', '%'. $content. '%');
         }
         if ($author) {

           $query = $query -> where('author_id',  $author);
         }

         $posts = $query -> get();

         $categories = Category::all();
         $authors = Author::all();

         return view('page.home', compact('posts', 'categories', 'authors'));
       }
}
