@extends('layouts.main')
@section('content')
    <h1 class="table__title text-center mb-xl-5">Show single equipment</h1>

    <table class="table mb-xl-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Maker</th>
            <th scope="col">Model number</th>
            <th scope="col">Model type</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"> {{ $equipment->equipment_id }}</th>
            <td>{{ $equipment->maker }}</td>
            <td>{{  $equipment->model }}</td>
            <td>{{  $equipment->type_model }}</td>
            <td>
                <a href="{{ route('equipment.edit',  $equipment->equipment_id) }}" class="btn-primary btn-sm text-decoration-none" type="submit">Edit equipment </a>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="text-center">
        <a class="btn-primary btn-lg text-decoration-none" href="{{ route('equipment.index') }}">Back</a>
    </div>
@endsection
