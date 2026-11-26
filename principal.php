<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agencia de viajes "Mi Destino"</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenido">
        <h1>Planeación del viaje</h1><br>
        <form action="resultados.php" method="POST">
            <label for="destino">Destinos turísticos</label>
            <select id="destino" name="destino">
                <option value="cancun">Cancún</option>
                <option value="vallarta">Puerto Vallarta</option>
                <option value="acapulco">Acapulco</option>
                <option value="cabos">Los Cabos</option>
                <option value="mazatlan">Mazatlán</option>
                <option value="huatulco">Huatulco</option>
                <option value="escondido">Puerto Escondido</option>
                <option value="ixtapa">Ixtapa Zihuatanejo</option>
                <option value="vegas">Las Vegas</option>
                <option value="ny">Nueva York</option>
                <option value="toronto">Toronto</option>
                <option value="vancouver">Vancouver</option>
                <option value="praga">Praga</option>
                <option value="tokio">Tokio</option>
            </select>
        </form>
    </div>
</body>
</html>