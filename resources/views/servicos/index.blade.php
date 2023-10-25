@extends('layouts.app')

@section('conteudo')

<h1>Serviços</h1>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $servico)

    <p>
        {!!$servico->PecasSubstituidas!!}<br>
        {{$servico->valor}}<br>
        {{$servico->DataEntrega}}
    </p>

    @endforeach
</section>


@endsection
