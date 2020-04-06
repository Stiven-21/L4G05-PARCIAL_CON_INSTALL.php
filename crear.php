<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body background="halo.jpg">
<div class="container">
    <div class="center">
        <font color="white" size="7">CREAR USUARIO</font>
    </div>

    <div>
    <form action="guardar.php" method="post">
        <table class="table">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email(*)</th>
                <th>password(*)</th>
            </tr>
            </thead>

            <tbody class="center">
            <tr>
                <td><input type="text" name="nombre" size="40" maxlength="50"></td>
                <td><input type="text" name="apellido" size="40" maxlength="50"></td>
                <td><input type="text" name="email" size="40" maxlength="255"></td>
                <td><input type="password" name="password" size="40" maxlength="20"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <br><button type="submit" class="btn btn-green">Guardar</button>
                    <a href="index.php" class="btn btn-red">Cancelar</a>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    </div>
</div>

</body>
</html>