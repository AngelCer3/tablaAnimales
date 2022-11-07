<?php 
    include "./conexion.php";
    include "./header.php";

    $conexion = conexion();

    //crear el query de select

    $sql = "SELECT * FROM t_nombres";
    $sql2 = "SELECT * FROM t_animales";
    $respuesta = mysqli_query($conexion,$sql);
    $respuesta2 = mysqli_query($conexion,$sql2);
?>

    <h2>Listado de Nombres</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php while($ver = mysqli_fetch_array($respuesta)):?>
            <tr>
                <td><?php echo $ver['ID'];?></td>
                <td><?php echo $ver['Nombre'];?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>region</th>
                <th>comida</th>
            </tr>
        </thead>
        <tbody>
            <?php while($ver2 = mysqli_fetch_array($respuesta2)): ?>
            <tr>
                <td><?php echo $ver2['id'];?></td>
                <td><?php echo $ver2['nombre'];?></td>
                <td><?php echo $ver2['region'];?></td>
                <td><?php echo $ver2['comida'];?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
    </table>

<?php include "./footer.php";?>