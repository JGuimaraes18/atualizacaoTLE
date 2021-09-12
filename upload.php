<?php
$file = $_FILES["arquivo"];
$path = "txt_original/";
$data = date("Ymd");
$tle = $file["name"];

$type = $file["type"];

if ($type != "text/plain")
{
    echo "<script>alert('Favor anexar um arquivo de formato .TXT'); location.href='index.php';</script>";
    exit ;
}

if (move_uploaded_file($file["tmp_name"], $path.$tle)) 
{
	$comando = "/bin/bash; /intranet/TLE/manipula.sh $tle $data > /dev/null 2>&1 &";
	exec($comando);	

	echo "<script>alert('Arquivo enviado com sucesso!'); location.href='index.php';</script>";
}
?>
