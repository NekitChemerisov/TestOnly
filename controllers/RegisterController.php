<?php
class RegisterController extends Controller {
	private $pageTpl = '/views/register.tpl.php';
	public function __construct() {
		$this->model = new RegisterModel();
		$this->view = new View();
	}

    public function index(){
        $this->pageData['title'] = "Регистрация";

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function proverka(){
        $password = isset( $_POST['password'] ) ? trim( $_POST['password'] ) : NULL;
         
        $password_confirm = isset( $_POST['password_confirm'] ) ? trim( $_POST['password_confirm'] ) : NULL;
         
        if( $password == $password_confirm)
            $this->model->RegUser();
        else
            echo 'Пароли не совпадают';
    }
}


?>