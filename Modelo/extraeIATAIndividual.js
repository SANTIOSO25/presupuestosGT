// Función para extraer las tres letras dentro del paréntesis
function extraerLetras() {
    var selector = document.getElementById('selector_Base_CVY_Individual');
    var seleccion = selector.options[selector.selectedIndex].text;
    var regex = /\(([^)]+)\)/; // Expresión regular para encontrar el texto dentro del paréntesis
    var letras = regex.exec(seleccion);
    return letras ? letras[1] : '';
}

// Función para mostrar la extracción en un elemento de la página
function mostrarLetrasExtraidas() {
    var resultado = extraerLetras();
    document.getElementById('resultadoLetras').innerText = resultado;
}

// Agregar event listener al selector para activar la función en tiempo real
document.getElementById('selector_Base_CVY_Individual').addEventListener('change', mostrarLetrasExtraidas);
