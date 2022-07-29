@extends('layouts.base')
@section('title','Правка объявления :: Мои объявления')
@section('main')
    <form action="{{route('bb.update',['bb'=>$bb->id])}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <lable for="txtTitle">Товар</lable>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title',$bb->title) }}">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <lable for="txtContent">Описание</lable>
            <textarea name="contentt" id="txtContent" class="form-control @error('contentt') is-invalid @enderror" row="3">{{ old('contentt', $bb->content) }}</textarea>
            @error('contentt')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <lable for="txtPrice">Цена</lable>
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{ old('price',$bb->price) }}">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>
@endsection()
