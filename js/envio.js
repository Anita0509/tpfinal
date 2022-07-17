// levanto el a del link de whatssap 

var a_msj_wsp = document.getElementById('WSP')
function mensaje_wsp(){
  var nombre = document.getElementById("name")
  var apellido = document.getElementById("name2")
  var mail = document.getElementById("email")
  var mensaje = document.getElementById("message")

  //console.log(nombre.value)

  var mensaje_final
  mensaje_final ="Hola!,%20Mi%20Nombre%20es:%20" + apellido.value + nombre.value +",%20"
  mensaje_final = mensaje_final + "%20Mi%20Mail%20es:%20" + mail.value +",%20"
  mensaje_final = mensaje_final + "%20mensaje%20:%20" + mensaje.value
  var mensaje = "https://api.whatsapp.com/send?phone=+5491150453200&text="+mensaje_final 
  //Esto%20es%20una%20prueba
  a_msj_wsp.href = mensaje  
}

a_msj_wsp.addEventListener('click', mensaje_wsp)