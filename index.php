<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aedha-Coleta</title>
        
        <link rel="stylesheet" href="css/estilo-mobile.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="js/plugins/alertify/css/alertify.css" />
        <link rel="stylesheet" href="js/plugins/alertify/css/themes/semantic.css" />    
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/script.js"></script>
        
        <script type="text/javascript" src="js/plugins/jquery.validate.js"></script>
        <script type="text/javascript" src="js/plugins/localization/messages_pt_BR.js"></script>
        <script type="text/javascript" src="js/plugins/additional-methods.js"></script>
        <script src="js/plugins/alertify/alertify.js"></script>
    
    
    </head>
<body>
    
<header>
<div class="header">
    <figure><a href="icons/logo_aedha 1.png" target="_blank"><img src="icons/logo_aedha 1.png"></a></figure>
    <h1>Guardinha</h1>
    
</div>
</header>

<div class="container">
   <h1>
       Faça sua colaboração <span style="color: #52CEC7;">:)</span>
   </h1>
</div>

     <div class="container">  
  <form class="form" name="form" method="post" id="form" tabindex="1"> 
        <div class="content-input">
            <label>Nome*</label>
            <input type="text" class="form-input" name="nome" required />  
        </div>

        <div class="content-input">
            <label>Data*</label>
                <input type="date" class="form-input" name="data"required />  
        </div>
        
        <div class="content-input">
            <label>Bairro*</label>
                <input type="text" class="form-input" name="bairro" required />
        </div>
        
        <div class="content-input">
            <label>Rua*</label>
                <input type="text" class="form-input" name="rua" required />
        </div>
        
        <div class="content-input">
            <label>Numero</label>
                <input type="text" class="form-input" name="numero" />
        </div>
        
        <div class="content-input">
            <label>Foto do local* <br> <span class="sub-label"> por favor, tire uma foto do local</span> </label>
                <div class="cont-file">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                <input type="file" id="imagem_local" name="imagem_local"required/>
            </div>  
        </div>

        <div class="content-input">
            <label>Local no mapa <br> <span class="sub-label">por favor, tire um "print" da tela do seu celular, na localização da ocorrencia no Google Maps</span></label>
            <div class="cont-file">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                <input type="file" id="imagem_mapa" class="form-file" name="imagem_mapa"/>
            </div>
        </div>

        <div class="content-input">
        <label>Descrição</label>
            <textarea class="form-textarea" name="descricao"></textarea>  
        </div>
     <button type="submit" class="form-button-submit">Enviar</button>  
  </form>  
  <hr>
    

</div> 



<div class="container">
<footer>
    <a href="ocorrencias.php">
        Acessar ocorrencias
    </a>
    <br>
    <p>
        Disponibilizado por: Associação de educação do homem de amanhã - AEDHA
    <p>
</footer>
</div>

</body>

</html>