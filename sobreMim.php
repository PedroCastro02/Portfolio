<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>

<style>

.control-SobreMim {
    border:2px solid red;
    display:flex;
    justify-self: center;
    align-items: center;
    width: 60%;
    margin-bottom: 10%;
}


</style>

<body>

    <?php 
        include('components/iconVoltar.php');  
    ?>
    <?php 
        include('components/redeSociais.php');  
    ?>
    
    <div class="container">
        <div class="control-SobreMim">
            <div class="leftImagem">
                <img src="" alt="" class="imagem-Sobre">
            </div>
            <div class="Right-SobreInfo">
                <fieldset>
                    <legend style="text-align: center;">Sobre Mim</legend>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo molestias recusandae consectetur harum temporibus corrupti, vitae aperiam. Id, ducimus suscipit. Rem necessitatibus, dolorum suscipit voluptatem quasi ipsa? Perferendis, delectus earum?</p>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>