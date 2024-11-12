<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Overflows - Dê um Olá para a Plataforma!!</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="/src/imgs/favicon-caiscode.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/src/css/menu.css') }}">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="{{ asset('/src/codemirror-5.65.17/lib/codemirror.css')}}">
    <script src="{{ asset('/src/codemirror-5.65.17/lib/codemirror.js')}}"></script>
    <script src="{{ asset('/src/codemirror-5.65.17/mode/python/python.js')}}"></script>
    <script src="{{ asset('/src/codemirror-5.65.17/mode/clike/clike.js')}}"></script>
    <script src="{{ asset('/src/codemirror-5.65.17/mode/')}}"></script>
    <script src="{{ asset('/src/codemirror-5.65.17/mode/php/')}}"></script>
    <link rel="stylesheet" href="{{ asset('/src/codemirror-5.65.17/theme/material-darker.css')}}">
    <link rel="stylesheet" href="{{ asset('/src/assets/themes/mocha.css')}}">
    <script src="{{ asset('src/codemirror-5.65.17/addon/edit/closebrackets.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/lint/lint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/lint/python-lint.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/lint/lint.min.css">
    <link rel="stylesheet" href="{{ asset('/src/css/problema.css') }}">
  </head>

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

                        <a href="/questoes" class="nav_link active">
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
                <a href="#" class="nav_link">
                    <i class='bx bx-log-out nav_icon'></i>
                    <span class="nav_name">Sair</span>
                </a>
            </nav>

        </div>

        <!--Container Main start-->
        <div class="principal">
            <div class="panel" id="panel1">
                <div class="info-questao">
                    <div class="titulo"><span>Dê um Oii para a Plataforma!!</span></div>
                    <div class="autor-info"><i class='bx bxs-user'></i><span id="nome-autor">Isac B.M</span>,<span> </span> <br><img src="/src/imgs/brasil.png" alt="" width="24px"> <span id="local">Brasil</span> </div>
                </div>
                <div class="desafio">
                    <p>Bem-vindo(a) à nossa plataforma de desafios de programação! Neste primeiro desafio, queremos que você crie um programa simples que imprima uma mensagem de saudação. O objetivo é garantir que você esteja familiarizado com o processo de submissão de código e execução dos testes.</p>
                    <p>Você deve escrever um programa que, quando executado, exiba a mensagem de saudação: "Olá Overflows!!".</p>
                    <p>Este é apenas o começo! Use este desafio para se familiarizar com a plataforma e prepare-se para desafios mais complexos.</p>
                    <p><b>Entrada:</b> Não há entradas para este desafio. O programa deve apenas imprimir a mensagem solicitada.</p>
                    <p></p><b>Saida:</b> Seu programa deve produzir exatamente a seguinte saída: Oii Overflows!!</p>
                </div>
                <div class=" row entrada-e-saida">
                    <table class="table table-dark table-bordered table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">Exemplos de Entrada</th>
                            <th scope="col">Exemplos de Saida   </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"></th>
                            <td>Oii Overflows!!</td>
                          </tr>
                        </tbody>
                      </table>
                      <p><b>OBS:</b> Certifique-se de que a saída do seu programa corresponda exatamente à saída esperada, incluindo letras maiúsculas e minúsculas, bem como os caracteres de pontuação.</p>
                </div>
            </div>
            <div class="gutter" id="gutter"></div>
            <div class="panel" id="panel2">
                <form action="{{ url('/submit') }}" method="POST">
                    @csrf
                    <div class="entrada">
                        <div class="executar">
                            <button type="button" title="Debug **Inativo**" class="btn btn-danger"><i class="bi bi-bug"></i></button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-play-fill"></i> Executar</button>
                        </div>

                        <textarea type="text" id="editor" name="source_code" class="form-control" aria-label="Editor de Código">{{ old('source_code', session('source_code')) }}</textarea>

                        <div class="ferramentas d-flex justify-content-between mt-2">
                            <div class="input-group col-12 w-25">
                                <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-globe2"></i></label>
                                <select class="form-select" id="language_id" name="language_id">
                                    <option value="0" selected>Selecione sua linguagem...</option>
                                    <option value="50">C</option> <!-- Exemplo de ID da linguagem -->
                                    <option value="54">C++</option>
                                    <option value="62">Java</option>
                                    <option value="71">Python</option>
                                </select>
                            </div>

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" title="Download do Código" id="downloadButton" class="btn btn-primary"><i class="bi bi-cloud-download"></i></button>
                                <button type="button" title="Copiar o Código" id="copyButton" class="btn btn-secondary"><i class="bi bi-copy"></i></button>
                                <button type="button" title="Limpar o Editor" id="clearButton" class="btn btn-warning"><i class="bi bi-recycle"></i></button>
                            </div>
                        </div>
                        <input type="hidden" name="expected_output" value="{{ $expected_output }}">
                    </div>
                </form>
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

            });
        </script>
        <script type='text/javascript'>
            var myLink = document.querySelector('a[href="#"]');
            myLink.addEventListener('click', function(e) {
                e.preventDefault();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script>
        // Mapeamento das linguagens para o CodeMirror
        const languagesMode = {
            50: "text/x-csrc",        // C
            54: "text/x-c++src",      // C++
            62: "text/x-java",        // Java
            71: "python",             // Python
        };

        // Exemplos de código para cada linguagem
        const languagesHelloWorld = {
            50: '// CaisTech♥ - 2K26 - C v17\n#include <stdio.h>\nint main() {\n    printf("É o melhor e maior evento de tecnologia do sul do Piauí!");\n    return 0;\n}\n',
            54: '// CaisTech♥ - 2K26 - C++ v20\n#include <iostream>\nint main() {\n    std::cout << "É o melhor e maior evento de tecnologia do sul do Piauí!" << std::endl;\n    return 0;\n}\n',
            62: '// CaisTech♥ - 2K26 - Java 8\nclass Main {\n    public static void main(String[] args) {\n        System.out.println("É o melhor e maior evento de tecnologia do sul do Piauí!");\n    }\n}\n',
            71: '# CaisTech♥ - 2K26 - Python 3.12.4\ndef caisTech():\n    print("É o melhor e maior evento de tecnologia do sul do Piauí!")\ncaisTech()\n',
            0: '',
        };

        // Configurações de indentação para cada linguagem
        const languagesConfig = {
            50: { indentUnit: 4 }, // C
            54: { indentUnit: 4 }, // C++
            62: { indentUnit: 4 }, // Java
            71: { indentUnit: 4 }, // Python
        };

        // Inicializa o editor CodeMirror sem um modo definido
        var editor = CodeMirror.fromTextArea(document.getElementById("editor"), {
            lineNumbers: true,
            readOnly: true,
            theme: "ctp-mocha",
            scrollbarStyle: "null",
            autoCloseBrackets: true,
            gutters: ["CodeMirror-lint-markers"],
            lint: true
        });

        const fileNames = {
            71: "programa.py",    // Python
            62: "Main.java",      // Java
            50: "main.c",         // C
            54: "main.cpp",       // C++
        };

        function adjustEditorSize() {
            var width = window.innerWidth;
            editor.setSize('auto', '450'); 
        }

        adjustEditorSize();
        window.onresize = adjustEditorSize;

        // Função para configurar a linguagem no editor
        function setupLanguage(languageId, force = false) {
            if (languageId !== "0") {
                editor.setOption("mode", languagesMode[languageId]);
                editor.setOption("readOnly", false);
                editor.setOption("indentUnit", languagesConfig[languageId]?.indentUnit || 4);
                if (editor.getValue().length === 0 || force) {
                    editor.setValue(languagesHelloWorld[languageId]);
                }
                console.log(`Changed Language to: ${languageId}:${editor.getOption("mode")} Indentation: ${editor.getOption("indentUnit")}`);
            } else {
                editor.setOption("readOnly", true);
            }
        }

        // Configura o seletor de linguagem
        const languageSelector = document.getElementById("language_id");
        if (languageSelector) {
            languageSelector.addEventListener("change", (event) => {
                const languageId = event.target.value;
                setupLanguage(languageId, true);
            });
        }

        // Função para limpar o conteúdo do editor
        function clearEditorContent() {
            editor.setValue('');
        }

        // Adicionar evento de clique ao botão para limpar o editor
        document.getElementById("clearButton").addEventListener("click", clearEditorContent);

        // Função para copiar o conteúdo do editor para a área de transferência
        function copyEditorContent() {
            // Obter o conteúdo do editor
            var content = editor.getValue();

            // Usar a API de área de transferência do navegador
            navigator.clipboard.writeText(content).then(function() {
                alert("O código foi copiado com sucesso! :)");
            }).catch(function(err) {
                alert("Erro ao copiar: ", err);
            });
        }

        // Adicionar evento de clique ao botão para copiar o conteúdo do editor
        document.getElementById("copyButton").addEventListener("click", copyEditorContent);

        // Função para baixar o conteúdo do editor
        document.getElementById("downloadButton").addEventListener("click", function() {
            const selectedLanguageId = languageSelector.value;
            const fileName = fileNames[selectedLanguageId] || "programa.txt";
            const fileContent = editor.getValue();
            const element = document.createElement("a");
            element.setAttribute("href", "data:text/plain;charset=utf-8," + encodeURIComponent(fileContent));
            element.setAttribute("download", fileName);
            element.style.display = "none";
            document.body.appendChild(element);
            element.click();
            document.body.removeChild(element);
        });
    </script>

        <script src="{{ asset('/src/js/divisor.js')}}"></script>
        
    </body>

</html>