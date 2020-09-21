<?php
include("conexao.php");

function tabela(){
    
    $sql="SELECT * FROM ocorrencias order by nome";
    $query=mysqli_query(conexao(),$sql);
    while($vetor=mysqli_fetch_array($query)){
        
        $data = date('d/m/Y',  strtotime($vetor['data']));
    echo" 
            <tr>
                <td> $vetor[id]</td>
                <td> $vetor[nome]</td>
                <td> $data</td>
                <td> Rua: $vetor[rua],$vetor[numero]</td>
                <td> $vetor[bairro]</td>
                <td> <a href='imagens/locais/$vetor[imagem_local]' target='_blank' > Abrir Imagem </td>
                <td> <a href='imagens/mapas/$vetor[imagem_mapa]' target='_blank' > Abrir Imagem </td>
                <td> $vetor[descricao] </td>
            </tr>
         ";

}
}

?>