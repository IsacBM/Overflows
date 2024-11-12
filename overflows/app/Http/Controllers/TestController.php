<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    private function generateTabuada($number)
    {
        $tabuada = '';
        for ($i = 1; $i <= 10; $i++) {
            $tabuada .= "$number * $i = " . ($number * $i) . "\n"; // Adiciona cada linha da tabuada à string
        }
        return $tabuada;
    }

    public function show($testNumber)
    {
        // Saídas esperadas fixas para cada teste
        $expectedOutputs = [
            1 => $this->generateTabuada(1),
            2 => 'Oii Overflows!!',
            3 => '367.76208 -> NUCK
            270.72675 -> NUCK
            379.83781 -> DUCK',
            4 => 'Saída esperada para o teste 4',
        ];

        // Passa o valor para a view do Blade
        return view('problemaTabuada', ['testNumber' => $testNumber, 'expected_output' => $expectedOutputs[$testNumber] ?? '']);
    }
    
    public function view2($testNumber)
    {
        // Saídas esperadas fixas para cada teste print("367.76208 -> NUCK\n270.72675 -> NUCK\n379.83781 -> DUCK")
        $expectedOutputs = [
            1 => $this->generateTabuada(1),
            2 => 'Oii Overflows!!',
            3 => <<<EOD
367.76208 -> NUCK
270.72675 -> NUCK
379.83781 -> DUCK
EOD,
            4 => 'Saída esperada para o teste 4',
        ];

        // Passa o valor para a view do Blade
        return view('questaoAngryDucks', ['testNumber' => $testNumber, 'expected_output' => $expectedOutputs[$testNumber] ?? '']);
    }

    public function olaOverflows($testNumber)
    {
        // Saídas esperadas fixas para cada teste print("367.76208 -> NUCK\n270.72675 -> NUCK\n379.83781 -> DUCK")
        $expectedOutputs = [
            1 => 'Oii Overflows!!'
        ];

        // Passa o valor para a view do Blade
        return view('problema', ['testNumber' => $testNumber, 'expected_output' => $expectedOutputs[$testNumber] ?? '']);
    }

    public function telefone($testNumber)
    {
        // Saídas esperadas fixas para cada teste print("367.76208 -> NUCK\n270.72675 -> NUCK\n379.83781 -> DUCK")
        $expectedOutputs = [
            1 => <<<EOD
            2.00 
            1.67
            2.71
            EOD
        ];

        // Passa o valor para a view do Blade
        return view('questaotelefone', ['testNumber' => $testNumber, 'expected_output' => $expectedOutputs[$testNumber] ?? '']);
    }
    
}


