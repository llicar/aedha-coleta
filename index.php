<!DOCTYPE html>

<htm>
    <meta charset="utf-8">
    <title>Aedha-Coleta</title>
    <link rel="stylesheet" href="css/estilo-mobile.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body>
    
<header>
<div class="header">
    <figure><img src="imagens/logo_aedha 1.png"></figure>
    <h1>Aedha</h1>
</div>
</header>

<div class="container">
   <h1>
       Faça sua colaboração <span style="color: #52CEC7;">:)</span>
   </h1>
</div>

     <div class="container">  
  <form action="#" class="form-contact" method="post" tabindex="1"> 
        <label>Nome</label>
            <input type="text" class="form-contact-input" name="nome" required />  
        
        <label>Data</label>
            <input type="date" class="form-contact-input" name="data"required />  
        
        <label>Localização</label>
            <input type="local" class="form-contact-input" name="local" />  
            <button type="button" class="form-contact-button">Buscar</button>  
        
        <label> Imagem</label>
            <div class="cont-file">
                <input type="file" class="form-contact-file" name="imagem"required/>
            </div>  
        
        <label>Descrição</label>
            <textarea class="form-contact-textarea" name="conteudo"required></textarea>  
     
     <button type="submit" class="form-contact-button-submit">Enviar</button>  
  </form>  
</div> 

</body>

</html>