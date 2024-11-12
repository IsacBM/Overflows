<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>CaisCode - Classificações</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="/src/imgs/favicon-caiscode.png" type="image/x-icon">
    <link rel="stylesheet" href="/src/css/menu.css">
    <link rel="stylesheet" href="/src/css/classificacao.css">
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

                        <a href="/classificacao" class="nav_link active">
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
                        <a href="/biblioteca" class="nav_link">
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
            
            <div class="menu-calssificacao">
                <div class="header-classificacao">
                    <div class="titulo">
                        <span><i class='bx bxs-crown'></i></span>
                        <span> Tabela de Classificação</span>
                    </div>
                    <div class="buscar-periodo">
                        <div class="input-group input-group-lg" style="width: 400px;">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option value="1">Equipe CaisCode - 2026</option>
                                <option value="2">CaisTech 2026 - Maratona</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i> Buscar</button>
                        </div>
                    </div>
                </div>
                <div class="tabela-classificados ">
                    <table class="table table-bordered">
                        <thead>
                          <tr style="text-align: center; background-color: rgb(247, 247, 247); color: #161530;">
                            <th scope="col" style="width: 100px;">Posição</th>
                            <th scope="col" style="width: 360px;">Equipe</th>
                            <th scope="col" style="width: 240px;">Integrantes</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Ínsignias</th>
                            <th scope="col">Pontuação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr style="text-align: center; background: linear-gradient(45deg, #bf7600, #d69122, #eba73c)">
                            <th scope="row " style="text-align: center;"><img src="/src/imgs/medalha-ouro.png" height="60px" alt=""></th>
                            <td class="equipe">Overflows</td>
                            <td class="redes-equipe"><a href="#">@isacbm_</a> <a href="#">@diogobruno</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td class="pontos">1000Pts</td>
                          </tr>
                          <tr style="text-align: center; background: linear-gradient(45deg, #455f63, #a4c0b5)">
                            <th scope="row"><img src="/src/imgs/medalha-prata.png" height="60px" alt=""></th>
                            <td>Fulano</td>
                            <td class="redes-equipe"><a href="#">@alguemai</a> <a href="#">@maisoutro</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td class="pontos">850Pts</td>
                          </tr>
                          <tr style="text-align: center; background: linear-gradient(45deg, #673208, #db6c2b);">
                            <th scope="row"><img src="/src/imgs/medalha-bronze.png" height="60px" alt=""></th>
                            <td>Sicrano</td>
                            <td class="redes-equipe"><a href="#">@alguemai</a> <a href="#">@maisoutro</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td class="pontos">700Pts</td>
                          </tr>
                          <tr style="text-align: center;">
                            <th scope="row">4</th>
                            <td>Sicrano</td>
                            <td><a href="#">@alguemai</a> <a href="#">@maisoutro</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td>650Pts</td>
                          </tr>
                          <tr style="text-align: center;">
                            <th scope="row">5</th>
                            <td>Equipe5</td>
                            <td><a href="#">@alguemai</a> <a href="#">@maisoutro</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td>500Pts</td>
                          </tr>
                          <tr style="text-align: center;">
                            <th scope="row">6</th>
                            <td>Equipe6</td>
                            <td><a href="#">@alguemai</a> <a href="#">@maisoutro</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td>0Pts</td>
                          </tr>
                          <tr style="text-align: center;">
                            <th scope="row">7</th>
                            <td>Equipe7</td>
                            <td><a href="#">@alguemai</a> <a href="#">@maisoutro</a></td>
                            <td>Cais-2026</td>
                            <td></td>
                            <td>0Pts</td>
                          </tr>
                          <thead>
                            <tr style="text-align: center; background-color: rgb(247, 247, 247); color: #161530;">
                              <th></th>
                              <th></th>
                              <th>CaisCode💜</th>
                              <th></th>
                              <th></th>
                              <th></th>
                
                            </tr>
                          </thead>
                          
                        </tbody>
                      </table>
                </div>
            </div>

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