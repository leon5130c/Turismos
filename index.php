<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <title>Escola de nerd</title>

    <!-------------- css aplicando do html ------------------->
    <link rel="stylesheet" type="text/css" href="css/00-Style.css">
    <!---------------------------------------------------------> 

</head>


<body>


    <div class="container">

        <section id="content">



            <!-------------------------Formulário inicio--------------------------->											
            <form method="post" action="login.php">

                <h1>Login </h1>

                <!-------------------------Usuário--------------------------->	

                <div>

                    <input type="text" placeholder="Seu nome" required="" id="username" name="login" />

                </div>	

                <!--------------------------Senha----------------------------->																				

                <div>

                    <input type="password" placeholder="Sua senha" required="" id="password" name="senha"/>

                </div>
                <!--------------------------Enviar----------------------------->				

                <div>

                    <input type="submit" value="Log in" href="login.php"/> 
                    <a href="#">Esqueci minha senha?</a>
                    <a href="cadastro.php">Registar</a>

                </div>

                </div>
                <!---------------------------containe fim---------------------------->


            </form>
            <!-------------------------Formulário fim--------------------------->			


    </body>


</html>
