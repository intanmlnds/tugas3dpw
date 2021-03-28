<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<h1 id="name" style="display:none">Selamat datang</h3>
	<script>
		inputName();
		function inputName() {
			var Name = prompt("Masukan Nama Anda");
			datetoday = new Date();
			timenow=datetoday.getTime();
			datetoday.setTime(timenow);
			thehour = datetoday.getHours();
			if (thehour > 18) display = "Malam";
			else if (thehour > 11) display = "Siang";
			else display = "Pagi"
			var greeting = "Selamat" + " " + display + " " +Name;
			document.getElementById("name").style.display="block";
			document.getElementById("name").innerHTML = greeting;
		}
	</script>

<form action="silinder" action="/action_page.php">
  <h2>3D Kalkulator</h2>
  <p>Menghitung volume dan luas permukaan dari silinder, kerucut dan bola.</p>
  <p> - Silinder</p>
  <h3>Silinder</h3>
<script>
        function hasilSilinder() 
        {       
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = 2*Math.PI*r*r+2*Math.PI*r*t;
            document.getElementById('hasilPermukaanSilinder').innerHTML = hasil.toFixed(2);
      
            var r = document.getElementById('jariSilinder').value;
            var t = document.getElementById('tinggiSilinder').value;

            var hasil = Math.PI*(r*r)*t;
            document.getElementById('hasilVolumeSilinder').innerHTML = hasil.toFixed(2);
        }
</script>
  Masukkan jari-jari silinder(dalam meter) <input type="text" id="jariSilinder"><br>
  Masukkan tinggi silinder(dalam meter) <input type="text" id="tinggiSilinder"><br><br>
  <input type="button" onclick="hasilSilinder()" value="Hitung!">

</script>
<h4>Hasil perhitungan</h4>
<p>Luas permukaan: <span id="hasilPermukaanSilinder"></span> m<sup>2</sup></p>
<p>Volume: <span id="hasilVolumeSilinder"></span> m<sup>3</sup></p>

	<p> - Kerucut</p>
	<h3>Kerucut</h3>
<script>
        function hasilKerucut() 
        {
            var r = document.getElementById('jariKerucut').value;
            var pelukis = document.getElementById('pelukisKerucut').value;
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = Math.PI*r*r+Math.PI*r*pelukis;
            document.getElementById('hasilPermukaanKerucut').innerHTML = hasil.toFixed(2);
        
	    var r = document.getElementById('jariKerucut').value;           
            var t = document.getElementById('tinggiKerucut').value;

            var hasil = (1/3)*Math.PI*(r*r)*t;
            document.getElementById('hasilVolumeKerucut').innerHTML = hasil.toFixed(2);
        }

</script>
	Masukkan jari-jari kerucut(dalam meter) <input type="text" id="jariKerucut"><br>
	Masukkan garis pelukis kerucut(dalam meter) <input type="text" id="pelukisKerucut"><br>
  	Masukkan tinggi kerucut(dalam meter) <input type="text" id="tinggiKerucut"><br><br>
  	<input type="button" onclick="hasilKerucut()" value="Hitung!">

</script>
<h4>Hasil perhitungan</h4>
<p>Luas permukaan: <span id="hasilPermukaanKerucut"></span> m<sup>2</sup></p>
<p>Volume: <span id="hasilVolumeKerucut"></span> m<sup>3</sup><p/>

	<p> - Bola</p>
	<h3>Bola</h3>
<script>
        function hasilBola() 
        {
            var r = document.getElementById('jariBola').value;

            var hasil = 4*Math.PI*r*r;
            document.getElementById('hasilPermukaanBola').innerHTML = hasil.toFixed(2);
        
            var r = document.getElementById('jariBola').value;

            var hasil = 4/3*Math.PI*r*r*r;
            document.getElementById('hasilVolumeBola').innerHTML = hasil.toFixed(2);
        }


</script>
	Masukkan jari-jari bola(dalam meter) <input type="text" id="jariBola"><br><br>
  	<input type="button" onclick="hasilBola()" value="Hitung!">
<h4>Hasil perhitungan</h4>
<p>Luas permukaan: <span id="hasilPermukaanBola"></span> m<sup>2</sup></p>
<p>Volume: <span id="hasilVolumeBola"></span> m<sup>3</sup><p/>
</form>
</body>
</html>
