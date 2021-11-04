<?php 
    $titulo = $_POST['titulo'];
    $editora = $_POST['descrição'];
    $autor = $_POST['nome'];
    $categoria = $_POST['categoria'];
    

    if($titulo != "" && $editora != "" && $autor != "" && $anoEd != "" && $categoria != "" && $numDePaginas != ""){
        
        $conexaoBD = mysqli_connect("localhost", "root", "","coti01");
        $dadosParaBD = "insert into livros values (null, '".$titulo."', '".$descrição"', '".$nome."', '".$categoria."', '")";
        
       
        
        if(mysql_query($conexaoBD, $dadosParaBD)){
            $msg = "Dados gravados com sucesso!";
        }else{
            $msg = "Erro ao gravar!";
        }
        
        mysqli_close($conexaoBD);
    }

?>

<script>
    alert("<?php echo $msg; ?>");
    </script>