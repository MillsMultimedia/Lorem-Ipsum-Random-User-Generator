<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Faker\src\autoload;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUser()
    {
        return view('layouts/user');
    }

    public function postUser(Request $request)
    {

        //validate input

        //generate users
        $userArray = array();

        for ($i = 0; $i < $request['users']; $i++)
        {
            $user = \Faker\Factory::create();
            $bday = $user->dateTimeThisCentury($max = 'now');


            $userArray[$i] = array(
                'name' => $user->name,
                'birthday' => date_format($bday, 'm/d/Y'),
                'email' => $user->email,
                'password' => $user->password,
                // 'avatar' => '',
            );
        }

        //generate avatar if needed
        $avatars = array(); //image url list
            //random number
            //avatar = $avatars[ RANDOM ]

        //display results
        return view('layouts/user')->with('users', $userArray)->with('request', $request);
    }

}