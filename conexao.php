<?php

function conexao()
{
    $conectar=mysqli_connect("localhost", "root", "", "aedha-coleta");
    mysqli_query($conectar,"SET NAMES 'utf8'");
    mysqli_query($conectar,'SET character_set_connection=utf8');
    mysqli_query($conectar,'SET character_set_client=utf8');
    mysqli_query($conectar,'SET character_set_results=utf8');

    return $conectar;
     }

     ?>