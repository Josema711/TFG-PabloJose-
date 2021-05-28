var dateStamp = new Date("<?php echo date('D M j Y H:i:s'); ?>");
var intStamp = Number(dateStamp);
   function getTime() {

     now = new Date(intStamp);
     nowC = new Date("<?php echo date('M j Y H:i:s', time() + 3600); ?>");

      dias = (nowC - now) / 1000 / 60 / 60 / 24;
      diasRound = Math.floor(dias);

      horas = (nowC - now) / 1000 / 60 / 60 - (24 * diasRound);
      horasRound = Math.floor(horas);

      minutos = (nowC - now) / 1000 /60 - (24 * 60 * diasRound) - (60 * horasRound);
      minutosRound = Math.floor(minutos);

      segundos = (nowC - now) / 1000 - (24 * 60 * 60 * diasRound) - (60 * 60 * horasRound) - (60 * minutosRound);
      segundosRound = Math.round(segundos);

      sec = (segundosRound == 1) ? " segundo" : " segundos";
      min = (minutosRound == 1) ? " minuto, " : " minutos, ";
      hr = (horasRound == 1) ? " hora, " : " horas, ";
      dy = (diasRound == 1)  ? " d\355a, " : " d\355as, "

      if (diasRound+horasRound+minutosRound+segundosRound == '0000'){
         document.getElementById("tiempo").innerHTML = '<span style="color: red;">La subasta ha terminado.</span><br />' + horasRound + hr + minutosRound + min + segundosRound + sec;
      } else {
         document.getElementById("tiempo").innerHTML = "Tiempo restante de esta subasta: <br />" + horasRound + hr + minutosRound + min + segundosRound + sec;
         newtime = window.setTimeout("getTime();", 1000);
         intStamp = intStamp + 1000; // Para avanzar un segundo en cada iteracion a partir de la fecha y hora actual obtenida desde el servidor
      }
   }

   window.onload=getTime;


function empezar(){

  $('#timerDiv').timer('remove');
  $('#timerDiv').timer({
    countdown: true,
    duration: $('#h').val()+"h"+$('#m').val()+"m"+$('#s').val()+'s',
  
    format: '%H:%M:%S'
});
    }
