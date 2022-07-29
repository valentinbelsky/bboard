@extends('layouts.base')
@section('title','Добавление объявления :: Мои объявления')
@section('main')
    <form action="{{route('bb.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <lable for="txtTitle">Товар</lable>
            <input name="title" id="txtTitle" class="form-control">
        </div>
        <div class="form-group">
            <lable for="txtContent">Описание</lable>
            <textarea name="contentt" id="txtContent" class="form-control" row="3"></textarea>
        </div>
        <div class="form-group">
            <lable for="txtPrice">Цена</lable>
            <input name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить">
    </form>
@endsection()
