# Documentação em Código: OverFlow
> Status do Projeto: Em Andamento...

[Licença (DEFINIR) do Projeto](./LICENSE) (alterar depois)


## Acesso Rápido:

- [APIs Utilizadas](#apis-utilizadas) <br>
- [Configuração do Judge0 CE](#configuração-do-judge0-ce-v1131-2024-04-18-passo-a-passo---api-de-verificação) <br>
- [Colaboradores](#contribuidores)


### Alterar depois:
O Projeto **`CaisCode`** foi idealizado para a maratona de programação realizada durante o evento do CaisTech, promovido pelo IFPI - Campus Floriano. O objetivo principal do CaisCode é proporcionar um ambiente desafiador e colaborativo para estudantes de programação, incentivando o desenvolvimento de habilidades técnicas e a criatividade na resolução de problemas.

### Links Importantes:

| Aplicações       | Descrição                                                                                      | Link |
|:----------------:|-----------------------------------------------------------------------------------------------|:----:|
| ![Figma](https://img.shields.io/badge/Figma-F24E1E?style=for-the-badge&logo=figma&logoColor=white)             | Plataforma de design colaborativo utilizada para o desenvolvimento das interfaces e protótipos do projeto. | [Acessar Figma](https://www.figma.com/design/7KvFe5zj3b4og8Tm8tvXRI/Overflows--Plataforma?node-id=864-3896&t=8j7bmH85RYkQUSlo-1) |
| ![Trello](https://img.shields.io/badge/Trello-0052CC?style=for-the-badge&logo=trello&logoColor=white)         | Painel de gerenciamento de tarefas e etapas do projeto, utilizado para planejar e acompanhar o progresso. | [Acessar Trello](https://trello.com/invite/b/673e0929c5a08c4c2020f7d3/ATTI25eef743694811373f6d4af1c42fc05f5A5EC004/overflows-plataforma) |
| ![Documentação](https://img.shields.io/badge/Google%20Docs-4285F4.svg?style=for-the-badge&logo=Google-Docs&logoColor=white) | Documento com os requisitos funcionais e não funcionais, além das regras de negócio da aplicação. | [Em breve](https://) |


## APIs Utilizadas:

| Aplicações | Descrição | Em Uso | Site |
| --- | :---: | :---: | :---: |
| `CodeMirror` | Editor de Código Open-Source | Sim | https://codemirror.net/ |
| `Judge0` | Sistema de execução de código Open-Source | Ainda Não | https://judge0.com/ |
| `Open-Meteo` | API de previsão do tempo | Ainda Não | https://open-meteo.com/ |
| `Heatmap` | Calendário Mapa de Calor(Estilo Github) Open-Source | Sim | https://github.com/tbaeg/calendar-heatmap-mini |

---

### Configuração do Judge0 CE v1.13.1 (2024-04-18): Passo a Passo - (API de Verificação)

**Ambiente**: `PowerShell`

1. **Instalar o Docker**:

    Certifique-se de que o Docker está instalado no seu sistema. Se ainda não estiver, siga os passos abaixo:
    - Visite o [site oficial do Docker](https://www.docker.com/get-started) e baixe a versão correspondente ao seu sistema operacional.
    - Siga as instruções de instalação fornecidas pelo site.
    - Após a instalação, verifique se o Docker está funcionando corretamente executando o comando:
   <br>
   
    ```powershell
    docker --version
    ```

2. **Baixar o Arquivo do Judge0**:

    ```powershell
    Invoke-WebRequest -Uri "https://github.com/judge0/judge0/releases/download/v1.13.1/judge0-v1.13.1.zip" -OutFile ".\judge0-v1.13.1.zip"
    ```

3. **Descompactar o Arquivo**:

    ```powershell
    Expand-Archive -Path .\judge0-v1.13.1.zip -DestinationPath .\judge0-v1.13.1
    ```

4. **Gerar Senha para Redis**:

    Visite [este site](https://www.random.org/passwords/?num=1&len=32&format=plain&rnd=new) para gerar uma senha aleatória.

5. **Configurar Senha do Redis**:

    Use a senha gerada para atualizar a variável `REDIS_PASSWORD` no arquivo `judge0.conf`.

6. **Gerar Senha para PostgreSQL**:

    Visite novamente [este site](https://www.random.org/passwords/?num=1&len=32&format=plain&rnd=new) para gerar outra senha aleatória.

7. **Configurar Senha do PostgreSQL**:

    Use a nova senha gerada para atualizar a variável `POSTGRES_PASSWORD` no arquivo `judge0.conf`.

8. **Iniciar os Serviços**:

    Execute os comandos abaixo para iniciar os serviços e aguarde alguns segundos para garantir que tudo esteja pronto:

    ```powershell
    cd judge0-v1.13.1
    docker-compose up -d db redis
    Start-Sleep -Seconds 10
    docker-compose up -d
    Start-Sleep -Seconds 5
    ```

9. **Acessar a Instância do Judge0 CE**:

    Sua instância do Judge0 CE v1.13.1 está em funcionamento. Para acessar a documentação e testar a API, visite: [http://localhost:2358/docs](http://localhost:2358/docs).

---

## Laravel:

1. **Iniciar os Serviços**:

    Execute os comandos abaixo para iniciar o servidor local e aguarde alguns segundos para garantir que tudo esteja pronto:

    ```powershell
    php artisan serve
    ```


## Componentes de Interface:

### • Página de Login:

<div align="center">
 <img src="https://github.com/IsacBM/CaisCode/blob/main/readme-imgs/Tela-de-Login.PNG?raw=true" alt="Imagem-de-login">
 <p>Página de Login - By @IsacBM</p>
</div>

### • Página Inícial:

<div align="center">
 <img src="https://github.com/IsacBM/CaisCode/blob/main/readme-imgs/Tela-Inicial.PNG?raw=true" alt="Imagem-de-inicio">
 <p>Página Inicial - By @IsacBM</p>
</div>

### Realizar antes da Implementação:

| Ações | Configurações | Classe | ID | Finalizado |
| --- | :---: | :---: | :---: | :---: |
| `API - Previsão do Tempo` | Configurar a leitura do JSON e adicionar a página | class="clima" | id="temperatura-dia" | Não |
| `Heatmap` | Configurar o heatmap para a leitura de questões respondidas | class="" | id="" | Não |

### • Página de Classificações/Rank:

<div align="center">
 <img src="https://github.com/IsacBM/CaisCode/blob/main/readme-imgs/Tela-de-classificacao.png?raw=true" alt="Imagem-Classificacao">
 <p>Página de Classificações - By @IsacBM</p>
</div>

### • Página de Questões:

<div align="center">
 <img src="https://github.com/IsacBM/CaisCode/blob/main/readme-imgs/tela-de-quest%C3%B5es.PNG?raw=true" alt="Imagem-Inicio">
 <p>Página de Questões - By @IsacBM</p>
</div>

### • Página de Resolução de Questões:

<div align="center">
 <img src="https://github.com/IsacBM/Overflows/blob/main/readme-imgs/resolucaoQuestao.PNG?raw=true" alt="Imagem-Inicio">
 <p>Página de Questões - By @IsacBM</p>
</div>

### • Página de Resposta Correta:

<div align="center">
 <img src="https://github.com/IsacBM/Overflows/blob/main/readme-imgs/TelaQuestaoCorreta.PNG?raw=true" alt="Imagem-Inicio">
 <p>Página de Questões - By @IsacBM</p>
</div>

### • Página do Editor:

<div align="center">
 <img src="https://github.com/IsacBM/CaisCode/blob/main/readme-imgs/Tela-do-editor.PNG?raw=true" alt="Imagem-Inicio">
 <p>Página do Editor de Código - By @IsacBM</p>
</div>

### • Página das Bibliotecas:

<div align="center">
 <img src="" alt="Imagem-Inicio">
 <p>Página de Bibliotecas - By @IsacBM</p>
 <h3>Documentações das Linguagens</h3>

| Site | Endereço |
| --- | --- |
| devdocs.io | https://devdocs.io/python~3.12/reference/index |
| w3schools.com | https://www.w3schools.com/python/python_lists_methods.asp |
</div>

## Contribuidores:
<div align="center">
 
|  [<img src="https://avatars.githubusercontent.com/u/91500212?v=4" width=115><br><sub>Isac B. Matos</sub>](https://github.com/IsacBM) | [<img src="https://avatars.githubusercontent.com/u/179156654?v=4" width=115><br><sub>Kassandra Maria</sub>](https://github.com/KassandraMRabelo) | [<img src="https://avatars.githubusercontent.com/u/157860235?v=4" width=115><br><sub>Diogo Bruno</sub>](https://github.com/DiogoBramorim) | [<img src="https://avatars.githubusercontent.com/u/168697328?v=4" width=115><br><sub>Priscila Freitas</sub>](https://github.com/FreitasPriscila) | [<img src="https://avatars.githubusercontent.com/u/49922915?v=4" width=115><br><sub>João Pedro</sub>](https://github.com/iaejotape) |
| :---: | :---: | :---: | :---: |  :---: |

</div>

<h4 align="center"><strong>#Overflow</strong>💜 <br></h4>
