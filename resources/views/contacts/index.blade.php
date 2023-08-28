@extends('layouts.app')

@section('title', "Contatos")

@section('content')

<div class="container-fluid">

    <div class="d-flex mb-2">
        <a type="button" class="btn btn-primary mt-2" href="/contacts/create">
            <ion-icon name="add-circle-outline"></ion-icon>
            Adicionar
        </a>
    </div>

    <table class="table table-striped table-hover align-baseline">

        <thead>
            <tr>
              <th scope="col">Nome:</th>
              <th scope="col">Telefone:</th>
              <th scope="col">Data Nascimento:</th>
              <th scope="col">Email:</th>
              <th scope="col">Ações</th>
            </tr>
        </thead>

       <tbody>

        @foreach ($contacts as $contact)

        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->birthDate }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <div class="d-flex">
                    <a href="/contacts/edit/{{ $contact->id }}" class="btn btn-primary me-2" type="button">
                        <ion-icon name="create-outline"></ion-icon>
                    </a>

                    <!--
                    <form action="/contacts/{{ $contact->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    -->
                    <button class="btn btn-danger" type="button"
                    data-bs-toggle="modal" data-bs-target="#modalContactDelete-{{$contact->id}}">
                        <ion-icon name="trash-outline"></ion-icon>
                    </button>

                    @include("contacts.delete-modal")

                </div>
            </td>
        </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection