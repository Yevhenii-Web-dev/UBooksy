@extends('layouts.main')
@section('content')
    <h1 class="table__title text-center mb-xl-5">Create equipment</h1>
    <form action="{{ route('equipment.update', $equipment->equipment_id ) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="input-group input-group-lg mb-lg-5">
            <span class="input-group-text">Maker</span>
            <input id="input__maker" type="text" value="{{ $equipment->maker }}" name="maker" class="form-control">
        </div>

        <div class="input-group input-group-lg mb-lg-5">
            <span class="input-group-text">Model number</span>
            <input id="input__model" type="text" value="{{ $equipment->model }}" name="model" class="form-control">
        </div>




        <div class="input-group input-group-lg mb-lg-5">
            <span class="input-group-text">Model type</span>
            <input id="input__type_model" type="text" value="{{ $equipment->type_model }}" name="type_model" class="form-control">

        </div>

        <div class="text-center">
            <button class="btn-primary btn-lg" type="submit">Update equipment info</button>
        </div>

    </form>

@endsection
