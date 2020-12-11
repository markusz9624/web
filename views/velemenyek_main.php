

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <script type="text/javascript">
	function kuldes() {
		var eredm = document.getElementById('eredmeny');
		eredm.innerHTML =document.getElementById('nev').value + "<br>";
		var szoveg = document.getElementById('szoveg').value;
		
		eredm.innerHTML += (szoveg);
	}
  </script>
</head>

<body>
<fieldset>
<p id="eredmeny"></p>
    </fieldset>
<label>Név:</label><input type="text" id="nev"><br>
	<label>Vélemény:</label><input type="text" id="szoveg"  required><br>
	<br>
	<label></label><input type="submit" onclick="kuldes()" value="OK">
	
</body>
</html>