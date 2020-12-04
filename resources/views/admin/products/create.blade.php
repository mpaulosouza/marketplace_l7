@extends('layouts.app')


@section('content')
<h3>Criar Produto</h3>
<form action="{{route('admin.products.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label>Nome do Produto</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control">
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label>Preço</label>
        <input type="text" name="price" class="form-control">
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>

    <div class="form-group">
        <label>Lojas</label>
        <select name="store" class="form-control">
            @foreach ($stores as $store)
                <option value="{{$store->id}}">{{$store->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <br>
        <button type="submit" class="btn btn-success">Criar Produto</button>
    </div>
</form>


@endsection
