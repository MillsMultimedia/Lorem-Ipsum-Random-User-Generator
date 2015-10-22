<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLorem()
    {
        return view('layouts/lorem');
    }

    public function postLorem(Request $request)
    {

        $messages = [
            'required' => 'A paragraph count is required',
            'numeric' => 'This needs to be a numeric value',
            'max' => '10 paragraphs is more than enough for you'
        ];
        
        // Validate form input
        $this->validate($request, [
            'paragraphs' => 'required|numeric|max:10',
            ], $messages);

        // generate ipsum
        $generator = new \Badcow\LoremIpsum\Generator();
        
        $paragraphs = $generator->getParagraphs( $request['paragraphs'] );

        // send ipsum to view
        return view('layouts/lorem')->with('paragraphs', $paragraphs);
        
    }

}