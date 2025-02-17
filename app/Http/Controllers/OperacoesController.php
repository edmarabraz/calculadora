<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacoesController extends Controller
{
    Public function soma (int $p1, int $p2) {
        //echo "Soma = $p1 + $p2 = ".($p1 + $p2)."<br>";
        //echo '<a href="'.route('site.index').'"> clique aqui</a> para voltar para a calculadora.';
        $soma = $p1 + $p2;
        $op = ['Soma', 'Subtração'];
        return view('soma', ['x' => $p1, 'y' => $p2, 'operacao' => $op]); //array associativo
    }

    Public function subtracao (int $p1, int $p2) {
        //echo "Subtração = $p1 - $p2 = ".($p1 - $p2)."<br>";
        //echo '<a href="'.route('site.index').'"> Clique aqui </a> para voltar para a calculadora.';
        $sub = $p1 - $p2;
        return view('subtracao', compact('p1', 'p2', 'sub')); //Compact
    }

    Public function multi (int $p1, int $p2) {
        //echo "Multiplicação = $p1 * $p2 = ".($p1*$p2)."<br>";
        //echo '<a href="'.route('site.index').'"> Clique aqui </a> para voltar para a calculadora';
        $mult = $p1*$p2;
        return view('multi')->with('x', $p1)->with('y', $p2)->with('mult', $mult);
    }

    Public function divisao (int $p1, int $p2) {
        //echo "Multiplicação = $p1/$p2 = ".($p1/$p2)."<br>";
        //echo '<a href="'.route('site.index').'"> Clique aqui </a> para voltar para a calculadora';
        $divi = $p1/$p2;
        return view('divisao', ['x' => $p1, 'y' => $p2, 'divi' => $divi]); //array associativo
    }
}
