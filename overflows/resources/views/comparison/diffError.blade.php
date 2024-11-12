<!DOCTYPE html>
<html>
<head>
    <title>Comparação de Saída</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/diff2html/3.4.6/diff2html.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-danger">Erro de Comparação (Wrong Answer)</h1>

        <h3>Seu código:</h3>
        <pre><code>{{ $source_code }}</code></pre>

        <h3>Saída esperada:</h3>
        <pre><code>{{ $expected_output }}</code></pre>

        <h3>Saída obtida:</h3>
        <pre><code>{{ $user_output }}</code></pre>

        <h3>Diferenças:</h3>
        <div id="diffView"></div>

        <a href="{{ url('/questions') }}" class="btn btn-primary mt-3">Voltar às Questões</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/diff2html/3.4.6/diff2html.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Criação da string de diff
            const diffString = `diff --git a/expected_output b/user_output\n` +
                               `--- a/expected_output\n` +
                               `+++ b/user_output\n` +
                               `@@ -1 +1 @@\n` +
                               `-${{ $expected_output }}\n` +
                               `+${{ $user_output }}\n`;

            // Geração do HTML do diff
            const diffHtml = Diff2Html.html(diffString, { drawFileList: false, matching: 'lines' });
            document.getElementById('diffView').innerHTML = diffHtml;
        });
    </script>
</body>
</html>
