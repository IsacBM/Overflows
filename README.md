# Documentação: OverFlows
> Status do Projeto: Em Andamento...

[Licença MIT do Projeto](./LICENSE) (alterar depois)

## Acesso Rápido:

[APIs Utilizadas](#apis-utilizadas) <br>
[Ir para Configuração do Judge0 CE](##configuração-do-judge0-ce)


### Alterar depois:
O Projeto **`CaisCode`** foi idealizado para a maratona de programação realizada durante o evento do CaisTech, promovido pelo IFPI - Campus Floriano. O objetivo principal do CaisCode é proporcionar um ambiente desafiador e colaborativo para estudantes de programação, incentivando o desenvolvimento de habilidades técnicas e a criatividade na resolução de problemas.

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
 
|  [<img src="https://instagram.fflb1-1.fna.fbcdn.net/v/t51.2885-19/434376116_2045465589186701_4437657398305925367_n.jpg?_nc_ht=instagram.fflb1-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=AwBffWa9BpEQ7kNvgFK5XRz&edm=APHcPcMBAAAA&ccb=7-5&oh=00_AYDLD2rYrk_6-sKiKiFmrcGl0OiIi5kOEhbKcCSrrLLh-A&oe=66CD44AD&_nc_sid=bef7bc" width=115><br><sub>Isac B. Matos</sub>](https://github.com/IsacBM) | [<img src="https://instagram.fflb1-1.fna.fbcdn.net/v/t51.2885-19/351439225_632948862052139_3662921942005037604_n.jpg?_nc_ht=instagram.fflb1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=2aYpLBYQLK4Q7kNvgEKKX4n&edm=AEhyXUkBAAAA&ccb=7-5&oh=00_AYB2RUxLNHmJDxXgB1fae8Vu96JUqFZWxmvoW9ofs-zTfA&oe=66CD39BD&_nc_sid=8f1549" width=115><br><sub>Kassandra Maria</sub>](https://github.com/KassandraMRabelo) | [<img src="https://avatars.githubusercontent.com/u/157860235?v=4" width=115><br><sub>Diogo Bruno</sub>](https://github.com/DiogoBramorim) | [<img src="https://avatars.githubusercontent.com/u/168697328?v=4" width=115><br><sub>Priscila Freitas</sub>](https://github.com/FreitasPriscila) |
| :---: | :---: | :---: | :---: |


</div>

<h4 align="center">
<strong>#CaisTech</strong>💙 <br>
</h4>
