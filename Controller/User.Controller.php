<?php
Class User
{
    public function InicioSesion()
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        echo $user."--".$pass;
    }
}
?>