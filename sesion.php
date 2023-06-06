<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión</title>
    <link rel="stylesheet" href="stylesesion.css">
    <script src="rel_sesionperfilus.js"></script>
</head>
<body>
      
    
    <div id="sidemenu" class="menu-collapsed">
        <div id="header">
            <div id="title"><span>SIRIM</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <div id="profile">
            <div id="photo"><img src="images/profilephoto.png" alt=""></div>
            <div id="name"><span>Daniela Ardila</span></div>
        </div>

        <div id="menu-items">

            <div class="item">
                <a href="perfil_usuario.php">
                    <div class="icon"><img src="images/id-card.png" alt=""></div>
                    <div class="title"><span>Información de usuario</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="images/convocatoria.png" id="iconconv" alt=""></div>
                    <div class="title"><span>Convocatorias</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="images/inscripcion.png" alt=""></div>
                    <div class="title"><span>Inscripciones</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="images/inventario.png" alt=""></div>
                    <div class="title"><span>Inventario</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="images/entrega.png" alt=""></div>
                    <div class="title"><span>Entrega de mercados</span></div>
                </a>
            </div>
            
            <div class="separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="images/listacompras.png" alt=""></div>
                    <div class="title"><span>Lista de compras</span></div>
                </a>
                    
            </div>
            
            <div class="separator"></div>
        </div>
        <input class="btn" type="button" value="Cerrar sesión"/><br><br>
    </div>
    <div id="main-container">
        <h1>¡Bienvenido!</h1>
    </div>

    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        }); 
    </script>
</body>
</html>