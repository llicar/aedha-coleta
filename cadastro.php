<?php

include('conexao.php');
include('upload_arquivos.php');

$cnn = conexao();

//envia imagens para o diretório
upload("imagens/locais",$_FILES["imagem_local"]);
upload("imagens/mapas",$_FILES["imagem_mapa"]);

//atribui o nome das imagens em md5 junto com sua extenção
$imagem_local=nome_arquivo($_FILES["imagem_local"]);
$imagem_mapa=nome_arquivo($_FILES["imagem_mapa"]);


foreach ( $_POST as $chave => $valor ) { $$chave = $valor; }

$sql_cadastro="INSERT INTO ocorrencias (id,nome,data,bairro,rua,numero,imagem_local,imagem_mapa,descricao) 
		
		VALUES (default,'$nome','$data','$bairro','$rua','$numero','$imagem_local','$imagem_mapa','$descricao')";

	if(mysqli_query($cnn,$sql_cadastro)) 
		echo "Ocorrencia registrada com suscesso :)";
		
	else 
    echo mysqli_error( $cnn ); 

?>