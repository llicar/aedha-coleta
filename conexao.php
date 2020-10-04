<?php

function conexao()
{
    $conectar=mysqli_connect("localhost", "root", "","aedha-coleta" );
    //$conectar=mysqli_connect("us-cdbr-east-02.cleardb.com", "b6c6c13523715d", "6c48525f", "heroku_e21fafde59eab25");
    mysqli_query($conectar,"SET NAMES 'utf8'");
    mysqli_query($conectar,'SET character_set_connection=utf8');
    mysqli_query($conectar,'SET character_set_client=utf8');
    mysqli_query($conectar,'SET character_set_results=utf8');

    return $conectar;
     }

     ?>