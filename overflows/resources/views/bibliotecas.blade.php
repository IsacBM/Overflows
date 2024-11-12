<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>CaisCode - Bibliotecas</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/src/imgs/favicon-caiscode.png" type="image/x-icon">
    <link rel="stylesheet" href="/src/css/menu.css">
    <link rel="stylesheet" href="/src/css/bibliotecas.css">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>

<body className='snippet-body'>

    <body id="body-pd">

        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="logo-caistech">
                <img src="/src/imgs/brand.png" width="72px" alt="">
            </div>
            <div class="toggle">
                <input type="checkbox" />
                <label></label>
            </div>
              
        </header>

        <div class="l-navbar" id="nav-bar">

            <nav class="nav">
                <div> 
                  <a href="#" class="nav_logo"> <i class='bx bx-equalizer nav_logo-icon'></i> <span class="nav_logo-name">CaisCode</span> </a>
                    <div class="nav_list">
                    <a href="/inicio" class="nav_link">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Inicio</span>
                        </a>

                        <a href="/classificacao" class="nav_link">
                            <i class='bx bx-trophy nav_icon'></i>
                            <span class="nav_name">Classificações</span>
                        </a>

                        <a href="/questoes" class="nav_link">
                            <i class='bx bxs-balloon nav_icon'></i>
                            <span class="nav_name">Questões</span>
                        </a>
                        <a href="/editor" class="nav_link">
                            <i class='bx bx-terminal nav_icon'></i>
                            <span class="nav_name">Editor</span>
                        </a>
                        <a href="/error" class="nav_link">
                            <i class='bx bx-joystick nav_icon'></i>
                            <span class="nav_name">Eventos</span>
                        </a>
                        <a href="/biblioteca" class="nav_link active">
                            <i class='bx bx-coffee nav_icon'></i>
                            <span class="nav_name">Bibliotecas</span>
                        </a>
                    </div>
                </div>
                <a href="login.html" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Sair</span>
                </a>
            </nav>

        </div>

        <!--Container Main start-->
        <div class="principal">
            <div class="row conteudo">
                <div class="col apoio-externo">
                    Salve
                </div>
                <div class="col apoio-proprio">
                    <h4>Salve</h4>
                </div>
            </div>


            <footer>
                <div class="credits">
                    <div class="logo-ifpi">
                        <img src="" alt="">
                    </div>
                </div>
            </footer>

        </div>
        <!--Container Main end-->
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript'>
            document.addEventListener("DOMContentLoaded", function(event) {

                const showNavbar = (toggleId, navId, bodyId, headerId) => {
                    const toggle = document.getElementById(toggleId),
                        nav = document.getElementById(navId),
                        bodypd = document.getElementById(bodyId),
                        headerpd = document.getElementById(headerId)

                    // Validate that all variables exist
                    if (toggle && nav && bodypd && headerpd) {
                        toggle.addEventListener('click', () => {
                            // show navbar
                            nav.classList.toggle('show')
                            // change icon
                            toggle.classList.toggle('bx-x')
                            // add padding to body
                            bodypd.classList.toggle('body-pd')
                            // add padding to header
                            headerpd.classList.toggle('body-pd')
                        })
                    }
                }

                showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')

                function colorLink() {
                    if (linkColor) {
                        linkColor.forEach(l => l.classList.remove('active'))
                        this.classList.add('active')
                    }
                }
                linkColor.forEach(l => l.addEventListener('click', colorLink))

                // Your code to run since DOM is loaded and ready
            });
        </script>
        <script type='text/javascript'>
            var myLink = document.querySelector('a[href="#"]');
            myLink.addEventListener('click', function(e) {
                e.preventDefault();
            });
        </script>

    </body>

</html>