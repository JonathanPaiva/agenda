@extends('layouts.app')

@section('title', "Contatos - Criar")

@section('content')
    
    <div class="container mt-5">
    
    <h4>Informe os dados do Contato</h4>
    
    <form action="/contacts" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="birthDate" class="form-label">Data Nascimento:</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="observations" class="form-label">Observação:</label>
            <textarea class="form-control" id="observations" name="observations" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem:</label>
            <input type="file" class="form-control" id="imagem" name="imagem">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a type="button" class="btn btn-danger" href="/contacts">Cancelar</a>
        </div>
    </form>
    
    </div>

@endsection