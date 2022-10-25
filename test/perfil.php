<?php
$conn=mysqli_connect('localhost', 'root', '','base_usuario');
?>
<html>
    <style>
        body
        {
            background:url(../test/portada.png) ;
            background-repeat: no-repeat;
            background-size: cover;
        }
        table
        {
            border: 2px solid #FFFFFF;
            background-color: #64FE2E;
        }
        input[type=text]
        {
            width: 100%;
            padding: 8px 90px;
            border: 2px solid #FFFFFF;
            box-sizing: border-box;
        }
        img
        {
            width: 100px;
            height: 100px;
        }
        label
        {
            font-size: 14px;
            font-weight: bold;
            font-family: arial;
        }
        input[type=submit]
        {
            background-color: #82FA58;
            color: #000000;
            padding: 8px 10px;
            margin: 8px 0px;
            border: solid;
            cursor: pointer;
            width: 40%;
        }
    </style>
    <body>
        <center><font color="#088A08"><h1>consulta de datos personales</h1></font></center>
        <center><img src="../test/perfil.jpg" style="width:400px; height: 300px;"></center>
        <br>
        <center>
            <table>
            <form name="form" method="post">
            <tr></tr>
            <td>clave:<input type="text" name="clave" required><p></p></td>
            <tr></tr>
            <tr></tr>
            <td><input type="submit" value="consultar" name="btn2"></td>
            <tr></tr>
            </form>
            </table>
            <br>
            <table border="1px">
                <tr>
                    <td><h4>ID</h4></td>
                    <td><h4>nombre</h4></td>
                    <td><h4>cedula</h4></td>
                    <td><h4>correo</h4></td>
                    <td><h4>direccion</h4></td>
                    <td><h4>telefono fijo</h4></td>
                    <td><h4>celular</h4></td>
                </tr>
                <?php
                if(isset($_POST['btn2'])){
                $clave=$_POST['clave'];
                $sql="SELECT * FROM usarios WHERE clave='$clave'";
                $result=mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <td><?php echo $mostrar['ID'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['cedula'] ?></td>
                    <td><?php echo $mostrar['correo'] ?></td>
                    <td><?php echo $mostrar['direccion'] ?></td>
                    <td><?php echo $mostrar['telefono_fijo'] ?></td>
                    <td><?php echo $mostrar['celular'] ?></td>
                </tr>
                <?php
                }
            }
                ?>
            </table>
            <br>
            <a href="login.html"><button style="background-color:#82FA58; border-color:#000000; padding: 8px 10px; margin: 8px 0px; border: solid; cursor: pointer; width: 26%;">cerrar seccion</button></a>
        </center>
    </body>
</html>