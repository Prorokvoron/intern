<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return DB::table('users')->get();
    }

    public function update(User $user, UpdateUserRequest $request): User
    {
        $input = $request->validated();
        DB::table('users')
            ->where('id', $user->id)
            ->update($input);
        return $user->refresh();
    }

    public function destroy(User $user)
    {
        return User::findOrFail($user->id)->delete();
    }

    public function store(UserRequest $UserRequest)
    {
        $input = $UserRequest->validated();
        $user = new user($input);
        $user->save();
        return $user;
    }

    public function show(User $user)
    {
     return DB::table('users')->where('id', '=',$user->id)->first();
    }
}
