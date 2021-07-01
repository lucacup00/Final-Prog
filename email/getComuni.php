
<?php
include './connessione2.php';
$q = intval($_GET['c']);



echo "<label class='form-label font2'>Inserisci il comune</label>
<select class='form-select'  name='province' aria-label'Default select example'>";
$sql="SELECT * FROM comuni WHERE id_provincia='$q'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)) {
    $idComune = $row['id'];
    $comune = $row['nome'];
    
    echo '
    <option value="' . $idComune . '">' . $comune . '</option>';
}

mysqli_close($conn);
?>