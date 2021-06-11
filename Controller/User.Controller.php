<?php
Class User
{
    public function InicioSesion()
    {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $estado=false;
        $cont=0;     
    foreach($user as $u)
    {
        if($u['user']==$user && $u['pass']==$pass)   
        {
            $estado=true;
            $cont++;    
        } 
    }
    if($estado)
    {
        echo "Este usuario si existe"
    }
    else
    {
        header('location:Home.tpl');   
    }
    }
}
?>