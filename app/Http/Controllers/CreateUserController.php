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

          // get the number of fake users the user wants generated
          $numUsers = $request->input('numUsers');

          // create array to hold user info if more than one requested
          $users = array();

          // generate requested number of users
          for($i = 0; $i<$numUsers; $i++)
          {
                $users[$i] = $this->GenerateUser();
          }

          // send the $users array to the view
          return view('createuser.index')->with(['users'=>$users]);
        }
        else
        {
          return view('createuser.index');
        }

    }

    private function GenerateUser()
    {
        // Tested and working properly

        $faker = Faker::create();

        $user = array();

        // default option: just a name
        $user['name'] = $faker->name;
        $user['email'] = $faker->safeEmail;
        $user['profile'] = $faker->sentence($nbWords = 24);

        return $user;
    }
}
