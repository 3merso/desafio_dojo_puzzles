<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class NumeroPrimoController extends Controller
{
    public function calcular(Request $request)
    {
        $divisores = 0;
        $soma = 0;
        $palavra = $request->input;
        $mensagem = '';
        $caracteres = [
            1,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','w','z',
            'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','W','Z'
        ];

        try {
            // soma o caracter conforme a posição no array
            for ($i = 0; $i < strlen($palavra); $i++) {
                $soma += array_search($palavra[$i], $caracteres);
            }

            // laço para encontrar divisores
            for ($count=2; $count < $soma; $count++)

            if($soma % $count == 0) {
                $divisores++;
            }
            
            // verifica se o número é primo
            if($divisores) {
                $mensagem = "O número $soma, equivalente à palavra $palavra não é primo";
            } else {
                $mensagem = "O número $soma, equivalente à palavra $palavra é primo";
            }

            return view('resultado', ['mensagem' => $mensagem])->render();
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }        
    }
}
