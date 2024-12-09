// URLS de la API
const statesApiUrl = "https://www.universal-tutorial.com/api/states/";


// Elementos del DOM
const countrySelect = document.getElementById("country");
const stateSelect = document.getElementById("state");

// Obtener el token de acceso
fetch("https://www.universal-tutorial.com/api/getaccesstoken", {
    method: "GET",
    headers: {
        "Accept": "application/json",
        "api-token": "mrDlQBOxqOeVPtXOctRjWr7Mlp41ngCpTwETW3P-mV4OWOTxuptmDLbc3gqsrgtzvbc",
        "user-email": "delltv262002@gmail.com"
    }
})
    .then(response => response.json())
    .then(data => {
        const accessToken = data.auth_token;

        // Llenar el select de países
        fetch("https://www.universal-tutorial.com/api/countries", {
            method: "GET",
            headers: {
                "Authorization": `Bearer ${accessToken}`,
                "Accept": "application/json"
            }
        })
            .then(response => response.json())
            .then(countries => {
                countries.forEach(country => {
                    const option = document.createElement("option");
                    option.value = country.country_name;
                    option.textContent = country.country_name;
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => console.error("Error al obtener países:", error));

        // Escuchar el cambio en el select de países
        countrySelect.addEventListener("change", function () {
            const selectedCountry = countrySelect.value;

            // Limpiar el select de estados y deshabilitar mientras carga
            stateSelect.innerHTML = '<option value="" disabled selected>Cargando...</option>';
            stateSelect.disabled = true;

            // Obtener los estados del país seleccionado
            fetch("https://www.universal-tutorial.com/api/states/" + encodeURIComponent(selectedCountry), {
                method: "GET",
                headers: {
                    "Authorization": `Bearer ${accessToken}`,
                    "Accept": "application/json"
                }
            })
                .then(response => response.json())
                .then(states => {
                    // Limpiar y habilitar el select de estados
                    stateSelect.innerHTML = '<option value="" disabled selected>Seleccione un estado</option>';
                    stateSelect.disabled = false;

                    states.forEach(state => {
                        const option = document.createElement("option");
                        option.value = state.state_name;
                        option.textContent = state.state_name;
                        stateSelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error("Error al obtener estados:", error);
                    stateSelect.innerHTML = '<option value="" disabled>No se pudieron cargar los estados</option>';
                });
        });
    })
    .catch(error => console.error("Error al obtener token:", error));



