

const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

// Función para actualizar el margen del contenido
const updateContentMargin = () => {
    if (sidebar.classList.contains("close")) {
        document.querySelector('.content').style.marginLeft = '88px';
    } else {
        document.querySelector('.content').style.marginLeft = '250px';
    }
};

// Agregar el evento de clic para alternar el sidebar
toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    updateContentMargin(); // Actualizamos el margen del contenido cuando se hace clic
});

// Cuando el buscador se hace clic, se abre el sidebar
searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
    updateContentMargin();
});

// Cambio entre modo día y modo noche
modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");

    if (body.classList.contains("dark")) {
        modeText.innerText = "Modo día";
    } else {
        modeText.innerText = "Modo noche";
    }
});

// Llamar a la función para asegurarse de que el margen esté correcto al cargar la página
updateContentMargin();
