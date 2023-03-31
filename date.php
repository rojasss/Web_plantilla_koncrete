

<script>
		function mostrarHora() {
			var fecha = new Date();
			var hora = fecha.getHours();
			var minuto = fecha.getMinutes();
			var segundo = fecha.getSeconds();
			hora = hora < 10 ? "0" + hora : hora;
			minuto = minuto < 10 ? "0" + minuto : minuto;
			segundo = segundo < 10 ? "0" + segundo : segundo;
			document.getElementById("hora").innerHTML = hora + ":" + minuto + ":" + segundo;
		}
		setInterval(mostrarHora, 1000);
	</script>