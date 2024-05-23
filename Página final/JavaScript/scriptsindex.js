document.addEventListener("DOMContentLoaded", () => {
    const boton = document.getElementById("enviar");
    boton.addEventListener("click", () => {
      alert("¡Hola! Gracias por interesarte en nuestro contacto.");
  });

  const botonmenu = document.getElementById("navbutton");
  const barmenu = document.getElementsByClassName("navbar")
  botonmenu.addEventListener("click", () => {
    barmenu.style.display = botonmenu.style.display === "none" ? "flex" : "none";
  });
});