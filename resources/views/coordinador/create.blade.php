
<!doctype html>
<!-- PLANTILLA BASE DE 127.0.0.1:8000/generacion-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- iconos redes sociales -->
   
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="main.css">

     <!-- Styles -->
        <style>
            
        </style>

        <style>
            .container{
            width: 85%;
            max-width: 850px;
            margin: 0 auto;
            margin-top: 100px;
            
            }
            .fondo{
                background: #ecececb4;
                background-image: url('../../img/fondo.jpg');
                font-family: Georgia, 'Times New Roman', Times, serif;
                color: #333;
                margin: 0;
                font-size: 2;
                line-height: 1.4rem;
            }
            
            .main{
                padding-top: 130px;
            }
            p{
                margin-bottom: 1rem; <!-- Margen en cada linea de parrafo -->
            }
            .header {
                background: #133894;
                color: #fff;
                box-shadow: 0 0 20px #000;
                padding: 25px 0; 
                position: fixed;
                font-size: 35px;
                left: 0;
                top: 0;
                width: 100%;
                right: 0;
            }
            .header a{
                color: rgb(255, 255, 255);
                text-decoration: none;
                margin-left: 25px;
                
            }
            .aheader{
                font-size: 20px;
            }
            .logo-nav-container{
                display:flex;
                justify-content: space-between;
                align-items: center;
            }

            .logo{
                letter-spacing: 1px;
                font-size: 35px;
            }
            .navigation ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .navigation ul li{
                display: inline-block;
            }

            .navigation ul li a{
                display: block;
                padding: 0.5 rem 1rem;
                margin: 4px;
                margin-right: 20px;
                transition: all 0.2s linear;
                border-radius: 5px;
                -moz-transition: all .9s ease;

            }

            .navigation ul li a:hover{
                background: rgba(224, 221, 221, 0.404);
                
            }

            .formulario{
                padding-top: 50px;
            }
            .bienvenido{
                text-align: center;
                padding-top: 130px;
                
                
            }
            .social-bar{
                position: fixed;
                right: 0;
                top: 35%;
                font-size: 1.5rem;
                display: flex;
                flex-direction:column;
                align-items: flex-end;
                z-index: 100;
            }

            .icon{
                color: #fff;
                text-decoration: none; 
                padding: 20px;
                margin: 1px;
                display: flex;
                transition: all .5s;

            }
            .icon-facebook{
                background: #133894;
            }
            .icon-instagram{
                background: #3f729b;
            }
            .icon-google{
                background: #3cba54;
            }
            .icon-mail{
                background: #db3236;

            }
            .icon:first-child{
                border-radius: 1rem 0 0 0;
            }
            .icon:last-child{
                border-radius: 0 0 1rem;
            }
            .icon:hover{
                padding-right: 3rem;
                border-radius: 1rem 0 0 1rem;
                box-shadow: 0 0 .5rem rgb(0, 0, 0, 0.42);
            }
            .logotec{
                
                padding-top: 600px;
                box-shadow: 0 0 10px #000;
            }

            
            
        </style>
    </head>
    <body class="fondo antialiased">
        <header class="header">
            <div class="logo-nav-container">
                <a class="generacion-font" href="#" class="logo">Coordinador</a>
                <nav class="navigation">
                    <ul>
                        <li><a class="aheader" action="" href="{{ url('/loges') }}">Iniciar Sesión</a></li>
                        <li><a class="aheader" action="" href="#">Contacto</a></li>
                        <li><a class="aheader" action="" href="#">PaginaOficial</a></li>
                    </ul>   
                </nav>
            </div>
        </header>

        <div class="social-bar">
            
                <a href="http://www.facebook.com" target="_blank" class="icon icon-facebook"></a>
                <a href="http://www.twitter.com" target="_blank" class="icon icon-instagram"></a>
                <a href="http://www.googleplus.com" target="_blank" class="icon icon-google"></a>
                <a href="mailto:contacto@falconmasters.com" class="icon icon-mail"></a>
            
        </div>
        <div class="container">
            <h2>CREAR REGISTROS</h2>

            <form action="/index" method="POST">
            @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Programa Educativo</label>
                        <input id="Programa" name="Programa" type="text" class="form-control" tabindex="2">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nivel</label>
                        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Rubricas</label>
                        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Entregables</label>
                        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Porcetajes</label>
                        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Periodos</label>
                        <input id="coordinador" name="coordinador" type="text" class="form-control" tabindex="3">
                    </div>
            
                    <a href="/pes" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            </form>
            
            
        </div>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
    </body>
</html>


