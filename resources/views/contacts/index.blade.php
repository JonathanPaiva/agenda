@extends('layouts.app')

@section('title', "Contatos")

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content mb-2">
        <a type="button" class="btn btn-primary mt-2" href="/contacts/create">Adicionar</a>
    </div>

    @foreach ($contacts as $contact)

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="col-3">
                {{ $contact->name }}
            </div>
            <div class="col-3">
                {{ $contact->phone }}
            </div>
            <div class="col-3">
                {{ $contact->birthDate }}
            </div>
            <div class="col-3">
                <div class="d-flex">
                    <div class="me-1">
                        <a href="/contacts/edit/{{ $contact->id }}" class="btn btn-primary " type="button">
                            <ion-icon name="create-outline"></ion-icon>
                            Editar
                        </a>
                    </div>
                    <div class="">
                        <form action="/contacts/{{ $contact->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">
                                <ion-icon name="trash-outline"></ion-icon>
                                Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    @endforeach
</div>

@endsection