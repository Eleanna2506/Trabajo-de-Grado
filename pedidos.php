<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pedidos.css">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <main>
        <div class="pedidosBotones">
            <button onclick="consultarPedido()">Consultar Pedido</button>
        <div class="consultarPedido" id="consultarPedido">
        <p>Si ya realizaste tu pedido puedes consultar el servicio, estado del pedido, facturas pendientes.</p>
        <a href="consultar_pedido.php">Ingresar</a>
        </div>
        <button onclick="realizarPedido()">Realizar Pedido</button>
            <div class="realizarPedido" id="realizarPedido">
                <p>Si deseas realizar un pedido ingresa los datos en el formulario desde tu panel de usuarios</p>
                <a href="realizar_pedido.php">Ingresar</a>
            </div>
        </div>
        <div class="pedidosTexto">
            <div><p>Adcesa publicidad <br> te ofrece una variedad de servicios, pues somos especialistas en publicidad de exteriores</p></div>
            <div><p>Te recomendamos que antes de realizar un pedido, despejes tus dudas con nuestro asesor de ventasa travez de la mensajeria instantanea. Somos una empresa responsable y comprometida con nuestra querida clientela.</p></div>
        </div>
    </main>
    <script src="pedidos.js"></script>
</body>
</html>