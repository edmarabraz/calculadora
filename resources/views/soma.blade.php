<h1>Resultado Operação:</h1>

{{-- Comentário no blade que será desconsiderado pelo intrepretador --}}
{{--<h3> Soma: {{$x}} + {{$y}} = {{$soma}}</h3>--}}

<p><a href="/"> clique aqui</a> para voltar para a calculadora. <br>

@php

    //tag do php no blade
    $num = $x + $y;
    echo "Soma: $x + $y = $num";

@endphp

{{-- @dd($operacao)  A função @dd imprime a variável do tipo array --}}

@if($num > 10)
    <h3> A soma deu maior que 10 </h3>
@elseif($num == 5)
    <h3> A soma deu igual a 5</h3>
@else
    <h3> A soma deu menor que 10</h3>
@endif

<br>

@if( ($num % 2) == 0 )
    O numero é par
@endif

@unless(($num % 2) == 0) <!-- Se o retorno da condição for false -->
    O numero é impar
@endunless