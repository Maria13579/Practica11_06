{include file="templates/Cabeceras/Header.tpl}
 
  <div class="card-panel teal lighten-2 "><h1 class="center-align">Inicie Sesion</h1> </div>
                <br/><br/>
                    <div align = "center">
                        <form action="?class=User&method=InicioSesion" method="post">
                            <input class ="left" type="text" name="user" placeholder="Ingrese su Usuario">   
                            <br/><br/>
                            <input type="password" name="pass" placeholder="Ingrese su Contraseña">
                            <br/><br/>
                            <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                        </form>
                    </div>
 
{include file="templates/Cabeceras/Footer.tpl}