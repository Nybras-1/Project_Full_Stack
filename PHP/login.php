<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>NO MAS</title>
</head>

<body>
    <main>
        <header>
            <section>
                <div>
                    <a class="linea1"></a>
                    <a><img class="icon_login" src="../IMAGE/icono_login.png" alt="Inicio"><!--INICIO --></a>
                    <a class="linea2"></a>
                </div>
            </section>
        </header>
        <section>
            <div class="menu">
                <form method="post" action="../BD/valid_conexion.php">
                    <div class="content_user">
                        <a><img class="sesion_icon" src="../IMAGE/usuario_sesion.png" alt="user"></a>
                        <label for="user">Usuariosss:</label>
                        <input type="text" id="user" name="usuarioo" class="input-data" required>
                    </div>
                    <div class="content_pass">
                        <a><img class="pass_icon" src="../IMAGE/clave.png" alt="pass"></a>
                        <label for="pass">Contraseña:</label>
                        <input type="password" id="pass" name="contrasenaa" class="input-data" required>
                    </div>
                    <button class="login_form" type="submit" name="ingresar">Iniciar sesión</button>
                </form>
            </div>
        </section>



    </main>
    <?php

    ?>
</body>

</html>