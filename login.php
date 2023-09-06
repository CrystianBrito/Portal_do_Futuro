<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão - Acesso ao Sistema</title>

    <style>
        body{
            background: linear-gradient(45deg, #f0f9ff 10%, 
            #cbebff 47%, #a1dbff 100%);
            font-family: Tahoma;  
        }

        div.global{
            width: 40%;
            height: auto;
            background-color: #fff;
            border: 1px solid #606060;
            padding: 50px;
            box-shadow: 0px 0px 10px #000;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
        }
        
        input[type='text'], input[type='password']{
            width: 300px;
            height: 25px;
            border: solid 1px #606060;
            border-radius: 5px;
        }

        input[type='submit']{
            width: 150px;
        }


    </style>

</head>
<body>
    <div class="global">
        <form method="post">
            <label> Usuário: </label>
            <input type="text" name="user">
            <br> <br>
            <label> Senha: </label>
            <input type="password" name="pass">
            <br> <br>
            <input type="submit" name="submit" value="Entrar">
        </form>

        <?php
            $user = @$_REQUEST['user'];
            $pass = @$_REQUEST['pass'];
            $submit = @$_REQUEST['submit'];

            $user1 ='teste';
            $pass1 = '123';

            $user2 = 'teste';
            $pass2 = '123';

            if($submit){
                if($user == ""|| $pass == ""){
                    echo "<script: alert('Por favor, preencha
                    todos os campos'); </script>";
                }

                else{
                    if(($user == $user1 && $pass === $pass1)||
                    ($user == $user2 && $pass == $pass2)){
                        session_start();
                        $_SESSION['usuario'] = $user;
                        $_SESSION['senha'] = $pass;
                        header("Location: painel.html");
                    }

                else{
                    echo "<script>alert('Usuário e/ou senha 
                    inválido(s), Tente novamente!');</script>"; 
                }
                }
            }
        ?>


    </div>
</body>
</html>