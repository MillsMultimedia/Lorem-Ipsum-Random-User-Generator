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

        $messages = [
            'required' => 'A number of names is required',
            'numeric' => 'This should be a numeric value',
            'max' => 'We both know you don\'t have more than 11 friends'
        ];
        //validate input
        $this->validate($request, [
            'users' => 'required|numeric|max:12',
            ], $messages);

        //generate users
        $userArray = array();

        //avatar list
        $avatars = array('batman', 'boba', 'bond', 'link', 'mario', 'prime', 'spock', 'superman', 'tmnt', 'trooper', 'wolverine', 'yoda'); //image url list

        for ($i = 0; $i < $request['users']; $i++)
        {
            $user = \Faker\Factory::create();
            $bday = $user->dateTimeThisCentury($max = 'now');


            $userArray[$i] = array(
                'name' => $user->name,
                'birthday' => date_format($bday, 'm/d/Y'),
                'email' => $user->email,
                'password' => $user->password,
                'avatar' => 'img/' . $avatars[$i] . '.jpg',
            );
        }

        //display results
        return view('layouts/user')->with('users', $userArray)->with('request', $request);
    }

}