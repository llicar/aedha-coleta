<?php 

function upload($pasta,$file)
{
    $name = md5($file["name"]);
    $tipo = strrchr($file["name"],".");
    // Move o arquivo da pasta temporaria de upload para a pasta de destino 
    move_uploaded_file($file["tmp_name"], "$pasta/".$name.$tipo);
    
      

}

function nome_arquivo($file)
{
    $name = md5($file["name"]);
    $tipo = strrchr($file["name"],".");

    return $name.$tipo;
}



?>