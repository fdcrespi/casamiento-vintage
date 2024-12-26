 "use strict"

 document.addEventListener("DOMContentLoaded", function(event) {
 
  // Usar JavaScript para cargar los datos desde el archivo PHP
  fetch('controller/lista_invitados.php')
  .then(response => response.text())
  .then(data => {
      document.getElementById('personas').innerHTML = data;
  })
  .catch(error => {
      console.error('Error:', error);
  });

})