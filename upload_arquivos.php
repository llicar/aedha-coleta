<?php 
require 'vendor/autoload.php';
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;

function upload($file,$local)
{
    
    $name = md5($file["name"]);
    $tipo = strrchr($file["name"],".");
    $tmp_file_name = "{$name}{$tipo}";
    // Move o arquivo da pasta temporaria de upload para a pasta de destino 

    $clientS3 = S3Client::factory(array(
        'key'    => "AKIAI4C2TTWPOGZKQSUQ",
        'secret' => "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"
    ));
    
    try{

        $clientS3 ->putObject([
            'Bucket' => "aedha-projeto/$local",
            'Key'    => $tmp_file_name,
            'SourceFile' =>$file['tmp_name'],
            'ACL'    => 'public-read',
            'ContentType' => "image"
        ]);

    } catch(S3Exeption $e) {
        die("Não foi possivel enviar o arquivo");
    }
    
      

}

function nome_arquivo($file)
{
    $name = md5($file["name"]);
    $tipo = strrchr($file["name"],".");

    return $name.$tipo;
}



?>