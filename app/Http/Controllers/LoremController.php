<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        if($request->input('numParagraphs'))
        {
                  // Validate form input for (1) required, (2) must be numeric, and (3) can not be a negative number.
                  $this->validate($request, ['numParagraphs' => 'required|numeric|min:1|max:10']);
                  //dd($request->all());

                  // Create new Lorem Ipsum Object
                  $generator = new Generator();

                  // Generate x number of paragraphs based on user input
                  $paragraphs = $generator->getParagraphs($request->input('numParagraphs'));

                  // return view with an array of paragraphs
                  return view('lorem.index')->with(['paragraphs'=>$paragraphs]);
        }
        else
        {
          return view('lorem.index');
        }
    }
}
