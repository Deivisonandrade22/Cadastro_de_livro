<?php 
    $titulo = $_POST['titulo'];
    $descrição = $_POST['descrição'];
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    

    if($titulo != ""  && descrição != "" && $nome != "" && $categoria != "" ){
        
        $conexaoBD = mysqli_connect("localhost", "root", "");
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