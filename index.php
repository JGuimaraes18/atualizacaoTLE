<?php 
include('template.php');
?>

<body>
<div id="apDiv3">
  <div class="container" style="margin-top:0px; height:auto">
	<table class="table table-striped table-bordered">
       		<th colspan="3" style="background-color: #E6E6FA">
        		<h3 align="center">TLE</h3>
     		</th>

    		 <tr align="center">
			<th>Original</th>
			<th>Novo</th>
			<th>Download</th>
		</tr>
<?php
		$diretorio = 'txt_novo/';
		$arquivos = glob("$diretorio{*.txt}",GLOB_BRACE);
     		rsort($arquivos);
     		foreach($arquivos as $tle){
     		$nomeOriginal=substr("$tle",23);
     		$nome=substr("$tle", 9);
?>
		<tr align="center">
	        	<td><?php echo $nomeOriginal;?></td>
        		<td><?php echo $nome;?></td>
       			<td><a href="<?php echo $tle;?>" download>Download</a></td>
     		</tr>
		<?php } ?>
	</table>
	<br>
 	<form action="upload.php" method="post" enctype="multipart/form-data" style="margin: 10px;">
 		Selecione o arquivo:
 		 <input type="file" name="arquivo" />
		 <input type="submit" class="btn btn-success" value="Enviar"/>
	</form>
  </div>
</div>
</body>
