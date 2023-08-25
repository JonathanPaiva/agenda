@extends('layouts.app')

@section('title', "Contatos - Novo")

@section('content')
    
    <div class="container mt-4">
    
        <h4>Informe os dados do Contato</h4>

        <form action="/contacts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do Contato" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite o telefone do Contato" required>
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Data Nascimento:</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email do Contato">
            </div>
            <div class="mb-3">
                <label for="observations" class="form-label">Observação:</label>
                <input class="form-control" id="observations" name="observations"
                        placeholder="Digite as observações do contato">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagem:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">
                    <ion-icon name="save-outline"></ion-icon>
                    Salvar
                </button>
                <a type="button" class="btn btn-secondary" href="/contacts">
                    <ion-icon name="backspace-outline"></ion-icon>
                    Cancelar
                </a>
            </div>
        </form>
    
    </div>

@endsection