<?php 


class User_Controller extends Base_Controller
{
	public $restful = true;

	public function get_index()
	{
		$title = "Login";
		return View::make('user.index')
		->with('title', $title);
	}

	public function post_index()
	{
		$input = Input::all();

		$rules = array('email' => 'required|email', 'password' => 'required');

		$v = Validator::make($input, $rules);

		if ($v->fails()) {
			return Redirect::to('login')->with_errors($v);
		} else {
			$credentials = array('username' => $input['email'], 'password' => $input['password']);

			if (Auth::attempt($credentials)) {
				return Redirect::to('profile');
			} else {
				return Redirect::to('login');
			}
		}
	}

	public function get_register()
	{
		$title = "Register";
		return View::make('user.register')
		->with('title', $title);
	}

	public function post_register()
	{
		$input = Input::all();

		$rules = array(
			'username' => 'required|unique:users',
			'email' => 'required|unique:users|email',
			'password' => 'required'
			);

		$v = Validator::make($input, $rules);

		if ($v->fails()) {
			return Redirect::to('register')->with_errors($v);	
		} else {

			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User;
			$user->username = $input['username'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->save();

			return Redirect::to('login');
		}
	}

	public function get_profile()
	{

		$title = ucwords(Auth::user()->username."'s Page");
		return View::make('user.profile')
		->with('title', $title);	
	}

	public function get_logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}