<?php
class Admin_UserController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    /**
     * Show the user profile.
     */
    public function showProfile()
    {
        $this->layout->content = View::make('admin.login');
    }

    public function signUp()
    {
        $email = Input::get('email', '');   
        $pwd = Input::get('password', '');
        if ($email && $pwd) {
            $admin = new Administrator;
            $admin->username = $email;
            $admin->password = md5($pwd);
            $admin->email = $email;
            $admin->real_name = 'David';
            $admin->status = 'kingdom';
            $admin->role = 1;
            $admin->save();
        }
    }

    public function sign_in()
    {

    }
}