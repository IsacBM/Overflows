<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submeter Código</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="submission-container">
        <h1>Submeter Código</h1>
        <form action="{{ url('/submit') }}" method="POST">
            @csrf
            <div>
                <label for="source_code">Código Fonte:</label>
                <textarea id="source_code" name="source_code">{{ old('source_code', session('source_code')) }}</textarea>
            </div>
            <div>
                <label for="language_id">ID da Linguagem:</label>
                <input type="text" id="language_id" name="language_id" value="{{ old('language_id', session('language_id')) }}">
            </div>
            <div>
                <label for="stdin">Entrada:</label>
                <textarea id="stdin" name="stdin">{{ old('stdin', session('stdin')) }}</textarea>
            </div>
            <div>
                <label for="expected_output">Saída Esperada:</label>
                <textarea id="expected_output" name="expected_output">{{ old('expected_output', session('expected_output')) }}</textarea>
            </div>
            <button type="submit">Submeter</button>
        </form>
    </div>
</body>
</html>
