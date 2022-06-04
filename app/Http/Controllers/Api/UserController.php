<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::with('group', 'role')->get();


        return response()->json([
            'status' => true,
            'user' => $user,
        ]);
    }



//
//    public function index()
//    {
//        $user = User::with('group')->get() ;
//
//
//        foreach ($user as $u) {
//            return response()->json(
//                ['user' => [
//                    'status' => true,
//                    'id' => $u->id,
//                    'firstname' => $u->firstName,
//                    'lastname' => $u->lastName,
//                    'email' => $u->email,
//                    'role' => $u->role->name,
//                    'created_at' => $u->created_at,
//                    'updated_at' => $u->updated_at,
//                ]
//                ]);
//        }
//    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "user Created successfully!",
            'user' => $user
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "user Updated successfully!",
            'user' => $user
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'status' => true,
            'message' => "user Deleted successfully!",
        ], 200);
    }
}
