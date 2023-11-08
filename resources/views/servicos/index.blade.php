@extends('layouts.app')

@section('conteudo')

<h1>Serviços</h1>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $servico)

    <p>
     Peças substituidas &nbsp;{!!$servico->PecasSubstituidas!!}<br>
     Valor &nbsp;{{$servico->valor}}<br>
     Data de entrega &nbsp;{{$servico->DataEntrega}}
    </p>

    @endforeach
</section>


@endsection
