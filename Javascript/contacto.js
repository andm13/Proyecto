window.onload = function () {
  var envia = document.getElementById("enviar");
  envia.onclick = function () {
    var mail = document.getElementById("email").value;
    var mensaje = document.getElementsById("texto").value;
    if (mail == "" || mensaje == "") {
      alert("Falta llenar el Correo Electronico o el Mensaje");
    }
  }
}
