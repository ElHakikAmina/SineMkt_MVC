<?php
class UsersController{
    public function auth()
    {
        if(isset($_POST['btn-login']))
        {
            $data['username'] = $_POST['username'];
            $result = User::login($data);
            if($result->username === $_POST['username'] &&
            password_verify($_POST['password'],$result->password
            )
            )
            {
                $_SESSION['logged']=true;
                $_SESSION['username']=$result->username;
                //Redirect::to('home');
				header('location:index');
            }else{
                //Session::set('error','Pseudo ou mot de passe est incorrect');
                //Redirect::to('login');
				header('location:login');
            }
        }
    }

    static public function logout()
    {
        session_destroy();
    }
}
?>