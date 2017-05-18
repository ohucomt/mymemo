<?php
	class UserModel extends Model{

		public function register(){
			$user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if(!empty($user['submit'])){
				if($user['password'] == $user['re-password']){
					$this->query(
					"INSERT INTO users(first_name, last_name, email, username, password)
					VALUES(:first_name, :last_name, :email, :username, :password)"
					);
					$this->bind(":first_name", $user['first_name']);
					$this->bind(":last_name", $user['last_name']);
					$this->bind(":email", $user['email']);
					$this->bind(":username", $user['username']);
					$this->bind(":password", $user['password']);
					$this->execute();
					if($this->lastInsertId()){
						Message::setMsg("register success", "success");
						Helper::redirect("user/login");
						exit();
					}
				}else{
					Message::setMsg("something wrong", "danger");
					Helper::redirect("user/register");
					exit();
				}
			}
			
		}

		// public function Login(){
		// 	print_r($_POST);
		// 	$user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		// 	if(isset($user['submit'])){
		// 		$this->query("
		// 			SELECT * FROM users WHERE 
		// 			username = :username and password = :password
		// 			");
		// 		$this->bind(":username", $user['username']);
		// 		$this->bind(":password", $user['password']);
		// 		$row = $this->singleResultSet();
		// 		if(!empty($row)){
		// 			Message::setMsg("logged id", "success");
		// 			$_SESSION['is_login'] = true;
		// 			$_SESSION['user_data'] = array(
		// 				'username' => $row['username'],
		// 				'first_name' => $row['first_name'],
		// 				'last_name' => $row['last_name'],
		// 				'email' => $row['email'],
		// 				'id' => $row['id']
		// 				);
		// 			Helper::redirect("memo/index");
		// 			exit();
		// 		}else{
		// 			Message::setMsg("Please enter you username and password correctly!", "danger");
		// 			Helper::redirect("user/login");
		// 			exit();

		// 		}
		// 	}
		// }

		public function Login(){


			if(isset($_POST['submit'])){
				$connect = mysql_connect(DB_HOST, DB_USER, DB_PASS);
				mysql_select_db(DB_NAME);

				$username = $_POST['username'];
				$password = $_POST['password'];
				$query = "select * from users where username = '$username' and password = '$password'";

				$result = mysql_query($query) or die(mysql_error());

				$count = mysql_num_rows($result);
				$row = mysql_fetch_assoc($result);
				if($count){
					Message::setMsg("You are now login", "success");
					$_SESSION['is_login'] = 1;
					$_SESSION['user_data'] = array(
							'username' => $row['username'],
							'first_name' => $row['first_name'],
							'last_name' => $row['last_name'],
							'email' => $row['email'],
							'id' => $row['id']
							);
					Helper::redirect('memo/index');
					exit();
				}else{
					Message::setMsg("Wrong username or password", "danger");
					Helper::redirect("user/login");
					exit();
				}
			}
		}
	}
?>