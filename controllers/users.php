<?php
	class User extends Controller{
		protected function register(){
			$viewmodel = new UserModel();
			$this->returnView($viewmodel->register(), true);
		}

		protected function doRegister(){
			$viewmodel = new UserModel();
			$this->returnView($viewmodel->doRegister(), false);
		}

		protected function login(){
			$viewmodel = new UserModel();

			$this->returnView($viewmodel->login(), true);
		}


		protected function doLogin(){
			$viewmodel = new UserModel();

			$this->returnView($viewmodel->dologin(), false);
		}

		protected function logout(){
			unset($_SESSION['user_data']);
			$_SESSION['is_login'] = false;
			Message::setMsg("logged out", "success");
			Helper::redirect();
		}
	}
?>