<!-- resources/views/submission/result.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overflows - {{ $token }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 800px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .result { color: #5bc0de; }
        .btn { display: inline-block; padding: 10px 20px; margin-top: 20px; background: #007bff; color: #fff; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="result">Resultado da Submissão</h1>
        <p>Status: {{ $result['status']['description'] }}</p>
        <p>Saída: {{ $result['stdout'] }}</p>
        <p>Tempo: {{ $result['time'] }} segundos</p>
        <p>Memória: {{ $result['memory'] }} bytes</p>
        <p>Mensagem de Erro: {{ $result['stderr'] }}</p>
        <p>Token: {{ $token }}</p>
        <a href="{{ url('/testapi') }}" class="btn">Mais Questões</a>
    </div>
</body>
</html>
