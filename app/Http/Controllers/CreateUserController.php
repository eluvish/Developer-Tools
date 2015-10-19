<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;

class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        if($request->input('numUsers'))
        {
          // validate form input
          $this->validate($request, ['numUsers' => 'required|numeric|min:1']);

          // just to keep it tidy let's give it its own variable
          $numUsers = $request->input('numUsers');

          // create array to hold user info
          $users = array();

          // generate requested number of users
          for($i = 0; $i<$numUsers; $i++)
          {
                $users[$i] = $this->GenerateUser();
          }

          // send the $users array to the view
          return view('createuser.index')->with(['users'=>$users]);
        }
        else // returns a view with just a form.
        {
          return view('createuser.index');
        }

    }

    private function GenerateUser()
    {
        $faker = Faker::create();

        $user = array();

        $user['name'] = $faker->name;
        $user['email'] = $faker->safeEmail;
        $user['profile'] = $faker->sentence($nbWords = 24);

        return $user;
    }
}
