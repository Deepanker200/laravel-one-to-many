<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts=Post::all();

        // $posts=Post::with('user')->get();

        $posts = Post::with('user')->find(2);


        // $posts=Post::with('user')->get();

        return $posts;

        // echo "Title: ".$posts->title."<br>";
        // echo "Description: " .$posts->description."<br>";
        // echo "Author Name: " .$posts->user->name."<br>";

        // foreach($posts as $post ){
        //     echo "<div style='border:1px solid red; marhin:0 0 10px'>
        //          <h3>$post->title</h3>
        //          <span>{$post->user->name}</span>
        //          <p>$post->description<p>
        //     </div>";
        // }


        //Searching by title name
        // $posts=Post::with('user')
        //         ->where('title',"News Title Two")
        //         ->get();


        //For getting name from users table
        // $posts=Post::with('user')
        // ->WhereHas('user',function($query){
        //     // $query->where('name','Salman Khan');
        //     $query->where('name','Salman Khan')
        //           ->orWhere('name','Deepika Padukone');
        // })->get();


        // $users=User::where('name','Salman Khan')->get();
        // $posts=Post::whereBelongsTo($users)->get();

        // return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
