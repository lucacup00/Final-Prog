<script>
function showComuni(valore) {
	console.log(valore);
	if (valore == '') {
		alert('Scegli la Provincia');
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
				document.getElementById('comuniDropdown').innerHTML = this.responseText;
			}
		};
		xmlhttp.open('GET', 'http://localhost/sitoKite/email/getComuni.php?c=' + str, true);
		xmlhttp.send();
	}
}

</script>
<?php

include './connessione2.php';
$q = intval($_GET['q']);



echo "<label class='form-label font2'>Inserisci la tua Provincia</label>
<select class='form-select'  onchange='showComuni(this.value)' name='province' aria-label'Default select example'>";
$sql="SELECT * FROM province WHERE id_regione='$q'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
    $idProvince = $row['id'];
    $Province = $row['nome'];
    $idregione=$row['id_regione'];
    echo '
    <option value="' . $idProvince . '">' . $Province . '</option>';
}

mysqli_close($conn);
?>

