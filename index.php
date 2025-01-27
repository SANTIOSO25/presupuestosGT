<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/estilosIndex.css">
    <title>CVY Presupuesto</title>
</head>
<body>
    <section class="datos">
        <div class="formularioPresupuesto">
            <h1>CVY Presupuesto Individual</h1>
            <label for="selector_Base_CVY_Individual">Base:</label>
            <select name="" id="selector_Base_CVY_Individual">
                <?php include("Modelo/opcionesDeBases.php"); ?>
            </select>
            <label for="ventas_Antes_De_Impuestos_Individual">Ventas Antes de Fees E Impuestos:</label>
            <input id="ventas_Antes_De_Impuestos_Individual" type="number">
            <label for="utilidad_Base_Individual">Utilidad Base:</label>
            <input id="utilidad_Base_Individual" type="number">
            <label for="utilidad_Extra_Individual">Utilidad Extra:</label>
            <input id="utilidad_Extra_Individual" type="number">
            <h1>CVY Presupuesto Grupal</h1>
            <label for="selector_Base_CVY_Grupal">Base:</label>
            <select name="" id="selector_Base_CVY_Grupal">
                <?php include("Modelo/opcionesDeBases.php"); ?>
            </select>
            <label for="ventas_Antes_De_Impuestos_Grupal">Ventas Antes de Fees E Impuestos:</label>
            <input id="ventas_Antes_De_Impuestos_Grupal" type="number">
            <label for="utilidad_Base_Grupal">Utilidad Base:</label>
            <input id="utilidad_Base_Grupal" type="number">
        </div>
    </section>
    <section class="dos">
        <h1>Liquidación</h1>
        <label for="">Bono fijo por monto de ventas antes de impuestos (individual):</label>
        <p id="bonoFijoIndividual"></p>
        <label for="">Comisión por utilidades (individual):</label>
        <p id="comisionVentasIndividual"></p>
        <label for="">Bono por Utilidad Extra (individual):</label>
        <p id="BonoUtilidadExtraIndividual"></p>
        <p id="resultadoLetras"></p>
    </section>
    <script src="Modelo/extraerDatos.js"></script>
    <script src="Modelo/extraeIATAIndividual.js"></script>
</body>
</html>