<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Montserrat:wght@300;700&family=Oswald:wght@300&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>  

</head>

<body>
    
    <div class="container">
         
        <?php 
            include('components/redeSociais.php');  
        ?>

        <div class="central">
            <div class="left-side">
                <div class="sobre-mim">
                    <a href="./sobreMim.php"><h1>Sobre Mim</h1></a>
                    
                </div>
                <div class="habilidades">
                    <a href="Habilidades"><h1>Habilidades</h1></a>
                    
                </div>
                <div class="curriculo">
                <a href="Curriculo"><h1>Curriculo</h1></a>
                   
                </div>
            </div>
                <div class="img">
                    <img src="assets/imgs/Perfil.jpeg" alt="" class="ImagemPerfil">
                </div>
            <div class="right-side">
                <div class="projetos">
                    <a href="Projetos"><h1>Projetos</h1></a>
                    
                </div>
                <div class="contato">
                    <a href="Contato"><h1>Contato</h1></a>
                </div>
                <div class="Nome">
                    <h1>Eu Sou Pedro Castro</h1>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    function lines(){
    let sizeW = Math.random() * 12;
    let duration = Math.random() * 3;
    let e = document.createElement('div');
    e.setAttribute('class','circle');
    document.body.appendChild(e);
    e.style.width = 2+sizeW+'px';
    e.style.left = Math.random() * + innerWidth + 'px';
    e.style.animationDuration = 2 + duration+'s';
    setTimeout(function(){
    document.body.removeChild(e)
    },5000);
    }
    setInterval(function(){
    lines();
    },200);

      
</script>
    
</html>
