@extends('layouts.main')
@section('content')
    <h1 class="table__title text-center">Table equipments</h1>
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
        @foreach($equipments as $equipment)
            <tr>
                <th scope="row"><a href="{{ route('equipment.show', $equipment->equipment_id) }}">{{ $equipment->equipment_id }}</a></th>
                <td>{{ $equipment->maker }}</td>
                <td>{{  $equipment->model }}</td>
                <td>{{  $equipment->type_model }}</td>
                <td>
                    <form action="{{ route('equipment.destroy', $equipment->equipment_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn-sm btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a class="btn-success btn-lg text-decoration-none" href="{{ route('equipment.create') }}">Add equipment</a>
    </div>
@endsection
