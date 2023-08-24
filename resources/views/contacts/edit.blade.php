@extends('layouts.app')

@section('title', "Contatos - Editar")

@section('content')

    <div class="container mt-4">

        <h4>Dados do Contato</h4>
    
        <form action="/contacts/update/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name"
                        placeholder="Digite o nome do Contato" value="{{ $contact->name }}"
                        required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="phone" name="phone"
                        placeholder="Digite o telefone do Contato" value="{{ $contact->phone }}"
                        required>
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Data Nascimento:</label>
                <input type="date" class="form-control" id="birthDate"
                        name="birthDate" value="{{ $contact->birthDate }}"
                        required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email"
                        placeholder="Digite o email do Contato" value="{{ $contact->email }}">
            </div>
            <div class="mb-3">
                <label for="observations" class="form-label">Observação:</label>
                <input class="form-control" id="observations" name="observations"
                            placeholder="Digite as observações do contato" value="{{ $contact->observations }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagem:</label>
                <input type="file" class="form-control" id="image"
                        name="image" value="{{ $contact->image }}">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a type="button" class="btn btn-danger" href="/contacts">Cancelar</a>
            </div>
        </form>

    </div>

@endsection