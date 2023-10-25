<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
            $users = User::all();
            return view('users', [
               'users'=> $users,
            ]);
    }

    public function show(User $user){
        
        //cria posts 1 para N
        // $user ->posts()->create([
        //     'title' => 'Rafael',
        //     'body'  => 'Post1',
        // ]);



        //$user->load('teams');
        //$user->teams()->attach(1);
        //$user->teams()->sync([2,3]);
        //$user->teams()->syncWithoutDetaching([2]);
        //$user->teams()->detach([1,3]);
        

        $team = Team::find(1);
        $team->load('users');
        $team->users()->attach(3);
        return $team;
        return $user;




        $user ->posts()->create([
            'title' => 'Rafael',
            'body'  => 'Post1',
        ]);

        

        //dd($user->posts()->delete()); //deleta usuário

        dd($user->posts);

        return view('user',[
            'name'=> 'Rafael',
            'user'=> $user,
        ]);
    }
}
