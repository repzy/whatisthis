<?php

class UsersController extends BaseController {

    public function Register()
    {
        $input = Input::all();
        $validator = Validator::make($input, User::$rules);
        if($validator->fails())
        {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator);
        }

        $user = new User;
        $user->username = $input['username'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();

        $message = "You have successfully registered.";

        return Redirect::back()->with('message', $message);
    }

    public function Login()
    {
        $input = Input::all();

        if(!Auth::attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            $error = "Invalid username or password";

            return Redirect::back()->withErrors($error);
        }

        return Redirect::route('indexArticle');
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}