<?php 
$target_dir="uploads/"; //nome da pasta onde o ficheiro será gravado
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //caminho onde estará o ficheiro e o nome com a extensão do ficheiro
$uploadOK=1; // variável para verificar se o upload foi o não feito
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //pega a extensão do ficheiro em um caminho

//VERIFICAR SE É A IMAGEM ATUAL OU É FAKE       
if(isset($_POST["submit"])){
    $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check!==false){
        echo "Ficheiro é uma imagem - " . $check["mime"] . ".<br>";
        $uploadOK=1;
    }else{
        echo " Ficheiro não é uma imagem<br>";
        $uploadOK=0;
    }
}

// VERIFICAR SE O FICHEIRO JÁ EXISTE
if(file_exists($target_file)){
    echo "Descula, ficheiro já existe.<br>";
    $uploadOK=0;
}

//verificar o tamanho do ficheiro
if($_FILES["fileToUpload"]["size"] >500000){
    echo "Desculpe, ficheiro muito grande<br>";
    $uploadOK=0;
}

//Permitir certos formatos do ficheiros
if($imageFileType!="jpg" && $imageFileType != "png" && $imageFileType!="jpeg" && $imageFileType!="gif"){
    echo "Desculpa, só arquivos JPG, PNP, & JPEG permitidos.<br>";
    $uploadOK=0;
} 

//VERIFICAR SE $uploadOK é setado para 0 por algum erro
if($uploadOK==0){
    echo "Desculpe, o teu ficheiro náo foi carregado<br>";
    //SE TUDO ESTIVER OK TENTA CARREGAR
}else{
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "O ficheiro ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " foi carregado";
    }else{
        echo "Desculpe, houve um erro ao carregar a sua imagem<br>";
    }
}

?>