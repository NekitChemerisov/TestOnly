<?php
class IndexModel extends Model {
	
	public function checkUser() {
		$login = $_POST['email_or_phone'];
		$password = md5($_POST['password']);
		$sql = "SELECT * FROM users WHERE (email = :login OR phone = :login) AND password = :password";
		$stmt = $this->db->prepare($sql);
		$stmt->bindValue(":login", $login, PDO::PARAM_STR);
		$stmt->bindValue(":password", $password, PDO::PARAM_STR);
		$stmt->execute();
		$res = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($res)) {
			$_SESSION['user'] = $_POST['email_or_phone'];
			header("Location: /cabinet");
		} else {
			return false;
		}
	}
}
