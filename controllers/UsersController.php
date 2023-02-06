<?php
class UsersController{
    public function auth()
    {
        if(isset($_POST['btn-login']))
        {
            $data['username'] = $_POST['username'];
            $result = User::login($data);
            if($result->username === $_POST['username'] &&
            $_POST['password']===$result->password
            
            )
            {
                $_SESSION['logged']=true;
                $_SESSION['username']=$result->username;
				header('location:index');
            }else{
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