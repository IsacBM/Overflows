<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>CaisCode - {token}</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/src/imgs/favicon-caiscode.png" type="image/x-icon">
    <link rel="stylesheet" href="/src/css/menu.css">
    <link rel="stylesheet" href="/src/css/acerto.css">
    <!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.0/theme/material.min.css">

    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                        <a href="inicio.html" class="nav_link active">
                            <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Inicio</span>
                        </a>

                        <a href="classificacao.html" class="nav_link">
                            <i class='bx bx-trophy nav_icon'></i>
                            <span class="nav_name">Classificações</span>
                        </a>

                        <a href="questoes.html" class="nav_link">
                            <i class='bx bxs-balloon nav_icon'></i>
                            <span class="nav_name">Questões</span>
                        </a>
                        <a href="editor.html" class="nav_link">
                            <i class='bx bx-terminal nav_icon'></i>
                            <span class="nav_name">Editor</span>
                        </a>
                        <a href="error.html" class="nav_link">
                            <i class='bx bx-joystick nav_icon'></i>
                            <span class="nav_name">Eventos</span>
                        </a>
                        <a href="bibliotecas.html" class="nav_link">
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
                    <h5>Sobre a Execução</h5>
                    <div class="container-infos-code">
                        <div class="status">
                            <p id="info-name">Status</p>
                            <span class="icon"><i class="bi bi-check-lg"></i></span>
                            <p><span id="aceito">Accepted</span></p>
                        </div>
                        <div class="time">
                            <p id="info-name">Tempo</p>
                            <span class="icon"><i class="bi bi-hourglass-split"></i></span>
                            <p id="time-color">0.071s</p>
                        </div>
                        
                        <div class="memory">
                            <p id="info-name">Memória</p>
                            <span class="icon"><i class="bi bi-memory"></i></span>
                            <p id="memory-color">3676 bytes</p>
                        </div>
                    </div>
                </div>
                <div class="col apoio-proprio" style="width: 100%; overflow: auto;">
                    <div class="container-info">
                        <h1>Seja bem-vindo(a) a plataforma Overflows!!</h1>
                        <img src="/src/imgs/Birthday-Cake-Party-With-Balloon-Cartoon-Graphics-39525791-1-1-580x387-removebg-preview.png" alt="" width="520px">
                        <h2>Questão concluida! Continue assim!! :)</h2>
                        <p>Você conseguiu 5 de Pts!</p>
                        <a href="http://127.0.0.1:8000/testapi" class="btn">Mais Questões</a>
                    </div>
                    <hr>
                    <div class="codigo-user">
                        <div class="titulo">
                            <h2>Seu Código</h2>
                        </div>
                        <div class="codigo">
                            <textarea id="user-code" name="code">{{ $code }}</textarea>
                        </div>
</div>
                    </div>
                </div>
            </div>

        </div>
        <!--Container Main end-->
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <!-- CodeMirror JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.0/codemirror.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.0/mode/javascript/javascript.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.0/mode/clike/clike.min.js"></script>

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

                // Inicialize o CodeMirror
                var editor = CodeMirror.fromTextArea(document.getElementById("user-code"), {
                    lineNumbers: true,
                    mode: "javascript", // ou outro modo, dependendo da linguagem do código
                    theme: "material", // ou outro tema que você escolher
                    readOnly: true // torna o editor somente leitura
                });
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