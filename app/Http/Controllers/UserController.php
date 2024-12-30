<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users=User::all();
        $users=User::with('post')->get();

        //Finding a particular id data
        //1st Method
        //$users = User::with('post')->find(2);

        //2nd Method
        // $users = User::find(2);
        // $posts=$users->post;

        //Displaying data who doesn't have any post/connection
        // $users=User::doesntHave("post")->get();

        //Displaying data of users which have atleast 1 post
        // $users=User::has("post")->get();

        //1st Method
        // $users=User::has("post",'>=',3)
        // ->with('post')
        // ->get();

        //2nd Method
        // $users=User::with('post')->has("post",'>=',3)
        // ->get();

        //It counts the no of posts for each user
        // $users=User::withCount("post")
        //         ->get();


        // $users = User::select(['name', 'email'])
        //     ->withCount('post')
        //     ->get();

        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //1st Method

        // $post=new Post([
        //     'title'=>"News Title - Test",
        //     'description'=>'Just Typing...'
        // ]);

        // $user=User::find(2);

        // $user->post()->save($post);


        //2nd Method

        // $user = User::find(2);

        // $user->post()->create([
        //     'title'=>"News Title 2 - Test",
        //     'description'=>'Just Testing 2...'
        // ]);

        //Create Many

        $user = User::find(2);

        $user->post()->createMany([
            [
                'title' => "News Title 3 - Test",
                'description' => 'Just Testing 3...'
            ],
            [
                'title' => "News Title 4 - Test",
                'description' => 'Just Testing 4...'
            ]
            ]
        );
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
