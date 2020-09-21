<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aedha-Coleta</title>
        
        <link rel="stylesheet" href="css/tabela.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="js/plugins/alertify/css/alertify.css" />
        <link rel="stylesheet" href="js/plugins/alertify/css/themes/semantic.css" />    
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/tabela.js"></script>
        <script type="text/javascript" src="js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="js/plugins/localization/messages_pt_BR.js"></script>
        <script type="text/javascript" src="js/plugins/additional-methods.js"></script>
        <script src="js/plugins/alertify/alertify.js"></script>
        <script src="js/plugins/jquery.tablesorter.min.js"></script>
        <script src="js/plugins/jquery.tablesorter.widgets.js"></script>
        <script src="js/plugins/jquery.tablesorter.widgets-filter-formatter.js"></script>
    
    
    </head>

    <header>
        <div class="header">
            <figure><a href="icons/logo_aedha 1.png" target="_blank"><img src="icons/logo_aedha 1.png"></a></figure>
            <h1>Guardinha</h1>
            
        </div>
        </header>

    <body>
        
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: rgb(124, 124, 124);">Lista de ocorrencias</h1>
                </div>
        
                <div class="row src-table form_theme">
                    <div class="col-md-6">
                        <input type="text" class="form-control search selectable " type="search" data-column="2" placeholder="Pesquisar por data"></input>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control search" type="search" data-column="4" placeholder="Pesquisar por bairro"></input>
                    </div>
            
                </div>
            </div>
    
    </br>
            <div class="container-table form_theme">
            <table class="table table tabela" id="table">
                
                <thead class="thead">
                    <tr>
                        
                        <th> ID </th>
                        <th> RELATOR</th>
                        <th> DATA </th>
                        <th> ENDEREÇO </th>
                        <th> BAIRRO </th>
                        <th> IMG LOCAL </th>
                        <th> IMG MAPA </th>
                        <th> DESCRIÇÃO </th>
                    </tr>
                </thead>
                
                <tbody id="tabela">
    
                    <?php include('tabela.php'); tabela();?>
                </tbody>
            </table>
            </div>
        </div>
                
            
       
        
    </body>

    </html>