<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PasswordGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        if($request->input('number_of_words'))
        {
          // no need to validate form input because it is size 1 so max is a 9 word password.

          // Get a tidy variable for number of words requested
          $num = $request->input('number_of_words');

          // get the public directory pathinfo
          $path = public_path();

          // Array to hold file contents of word.txt
          $f_contents = file("$path/files/words.txt");

          // Count the number of lines in the file - later to be used in the rand() function
          $lines = count($f_contents) - 1;

          // Declare the output array
          $output = array();

          // Push $num elements in to the output array and include a dash in between
          for ($i = 0; $i < $num; $i++)
          {
            array_push($output, $f_contents[rand(0, $lines)]);
            // Add a hyphen between words unless we have reached the final word

            if ($i !== $num-1)
            {
              array_push($output, "-");
            }
          }

          // if the user requested a number, add it to the array
          // could have used $request but copied code from P2
          if (isset($_GET["add_number"]))
          {
            array_push($output, rand(0,9));
          }

          // if the user requested a symbol, add it to the array
          if (isset($_GET["add_symbol"]))
          {
            $symbols = array("!","@", "#","$","%","^","&","*","(",")");
            array_push($output, $symbols[array_rand($symbols)]);
          }

          // Trim the white space
          // Source: http://stackoverflow.com/questions/5762439/how-to-trim-white-spaces-of-array-values-in-php
          $trimmed = array_map('trim', $output);

          return view('password.index')->with(['password'=>$trimmed]);
        }
        else {
          return view('password.index');
        }
    }

}
