<?php
class Login
{
    public function isUserExist($email,$password)
    {
                $req="select * from admin where email=? and mot_de_passe=?";
                $req=$db->prepare($req);
                $req->execute([$email,$password]);
                return $req;
    }
}
?>