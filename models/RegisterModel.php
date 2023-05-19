<?php
class RegisterModel extends Model {
	
	public function RegUser() {
	
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
		$password = md5($_POST['password']);

        $sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";    
        $this->db->exec($sql);
        echo "Записи успешно вставлены.";
         
        // Закрыть соединение
        unset($conn);
	}
}