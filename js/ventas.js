// Referencias a los elementos
const shippingOption = document.getElementById("shipping");
const storePickupOption = document.getElementById("storePickup");
const locationFields = document.getElementById("locationFields");

// Función para manejar el cambio de visibilidad
function toggleLocationFields() {
    if (shippingOption.checked) {
        // Mostrar campos de País y Estado si la opción "Envío" está seleccionada
        locationFields.style.display = "block";
    } else if (storePickupOption.checked) {
        // Ocultar campos si la opción "Retiro en tienda" está seleccionada
        locationFields.style.display = "none";
    }
}

// Escuchar los cambios en los botones de radio
shippingOption.addEventListener("change", toggleLocationFields);
storePickupOption.addEventListener("change", toggleLocationFields);

// Llamar la función inicialmente para asegurar que el estado inicial sea correcto
toggleLocationFields();
