@extends('layouts.app')

@section('conteudo')

<h1>Aparelhos</h1>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $aparelho)

    <p>
        {{$aparelho->Tipo}}
    </p>

    @endforeach
</section>


@endsection
