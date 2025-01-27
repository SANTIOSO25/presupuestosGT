// Función para actualizar los valores en tiempo real
function actualizarValores() {
    var ventasAntesImpuestos = document.getElementById('ventas_Antes_De_Impuestos_Individual').value;
    var utilidadBase = document.getElementById('utilidad_Base_Individual').value;
    var utilidadExtra = document.getElementById('utilidad_Extra_Individual').value;

    document.getElementById('bonoFijoIndividual').innerText = ventasAntesImpuestos;
    document.getElementById('comisionVentasIndividual').innerText = utilidadBase;
    document.getElementById('BonoUtilidadExtraIndividual').innerText = utilidadExtra;
}

// Agregar event listeners a los inputs para activar la función en tiempo real
document.getElementById('ventas_Antes_De_Impuestos_Individual').addEventListener('input', actualizarValores);
document.getElementById('utilidad_Base_Individual').addEventListener('input', actualizarValores);
document.getElementById('utilidad_Extra_Individual').addEventListener('input', actualizarValores);
