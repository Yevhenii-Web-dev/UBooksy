@extends('layouts.main')
@section('content')
    <h1 class="table__title text-center mb-xl-5">Create equipment</h1>
    <form action="{{ route('equipment.store') }}" method="POST">
        @csrf
        <div class="input-group input-group-lg mb-lg-5">
            <span class="input-group-text">Maker</span>
            <input id="input__maker" type="text" name="maker" class="form-control">
        </div>

        <div class="input-group input-group-lg mb-lg-5">
            <span class="input-group-text">Model number</span>
            <input id="input__model" type="text" name="model" class="form-control">
        </div>




        <div class="input-group input-group-lg mb-lg-5">
            <span class="input-group-text">Model type</span>
            <input id="input__type_model" type="text" name="type_model" class="form-control">

        </div>

        <div class="text-center">
            <button class="btn-success btn-lg" type="submit">Create equipment</button>
            <a class="btn-primary btn-lg text-decoration-none" href="{{ route('equipment.index') }}">Back</a>
        </div>

    </form>

@endsection
