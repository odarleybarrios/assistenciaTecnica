@extends('layouts.app')

@section('conteudo')

<h1>Clientes</h1>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $cliente)

    <p>
        {{$cliente->Nome}}
    </p>

    @endforeach
</section>


@endsection
