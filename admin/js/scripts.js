const body = document.querySelector("body"),
      sidebar = body.querySelector(".sidebar"),
      header = body.querySelector(".navbar"),
      main = body.querySelector(".contenido"),
      toggle = body.querySelector(".toggle");

toggle.addEventListener('click', () => {
    sidebar.classList.toggle("close");
});

toggle.addEventListener('click', () => {
    header.classList.toggle("close");
});

toggle.addEventListener('click', () => {
    main.classList.toggle("close");
});

     
     
      