// Llamada a la API en PHP
fetch('http://localhost/Glassvenca3/models/apis/apiesGetGraficaVenta.php') // Cambia a tu ruta real
.then(response => response.json())
.then(data => {
    // Procesar los datos para Chart.js
    const labels = data.map(item => item.fecha);
    const values = data.map(item => item.total);

    // Crear la gráfica con Chart.js
    const ctx = document.getElementById('graficaVentas').getContext('2d');
    new Chart(ctx, {
        type: 'bar', // Tipo de gráfica (line, bar, pie, etc.)
        data: {
            labels: labels, // Fechas en el eje X
            datasets: [{
                label: 'Ventas Totales',
                data: values, // Totales en el eje Y
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
.catch(error => console.error('Error al obtener datos:', error));


// Llamada a la API en PHP
fetch('http://localhost/Glassvenca3/models/apis/apiesGetGraficaVenta.php') // Cambia a tu ruta real
.then(response => response.json())
.then(data => {
    // Procesar los datos para Chart.js
    const labels = data.map(item => item.fecha);
    const values = data.map(item => item.total);

    // Crear la gráfica con Chart.js
    const ctx = document.getElementById('graficaIntentario').getContext('2d');
    new Chart(ctx, {
        type: 'bar', // Tipo de gráfica (line, bar, pie, etc.)
        data: {
            labels: labels, // Fechas en el eje X
            datasets: [{
                label: 'Ventas Totales',
                data: values, // Totales en el eje Y
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
.catch(error => console.error('Error al obtener datos:', error));