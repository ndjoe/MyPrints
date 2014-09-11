<?php

class UserController extends BaseController {
    protected $layout = "layouts.main";
    
    
    public function getRegister(){
        $this->layout->content = View::make('users.register');    
    }
    
    public function postCreate(){
        $validator = Validator::make(Input::all(), User::$rules);
        
        if ($validator->passes()){
            //$validator true, save ke db
            $user = new User;
            
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            
            return Redirect::to('users/login')->with('message', 'makasih udah register');
        } else {
            //validator false, kirim notifikasi
            return Redirect::to('users/register')->with('message', 'Hal Berikut Error')->withErrors($validator)->withInput;
        }
    }
    
    public function __construct() {
    $this->beforeFilter('csrf', array('on'=>'post'));
    $this->beforeFilter('auth', array('only'=>array('getIndex')));
    }
    
    public function getLogin() {
        $this->layout->content = View::make('users.login');
    }
    
    public function postSignin() {
        //cek auth
        if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
            return Redirect::to('users/')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('users/login')
        ->with('message', 'Your username/password combination was incorrect')
        ->withInput();
        }
    }
    
    public function getIndex() {
        $this->layout->content = View::make('users.index');
    }
    
    
}