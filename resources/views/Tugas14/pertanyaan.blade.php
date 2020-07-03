@extends('Tugas14.master')

@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <td scope="col">Question</td>
        <td scope="col">Created Date</td>
        <td scope="col">Updated Date</td>
        <td scope="col">Lakukan</td>

        </tr>
    </thead>
    <tbody>
        @foreach($pertanyaan as $key => $items)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td scope="col">{{$items->isi}}</td>
        <td scope="col">{{$items->created_at}}</td>
        <td scope="col">{{$items->updated_at}}</td>
        <td scope="col">
            <a href="/pertanyaan/{{$items->id}}" class="btn btn-sm btn-info">Show</a>
            <a href="/pertanyaan/{{$items->id}}/edit" class="btn btn-sm btn-light border border-secondary">Edit</a>
            <form action="/pertanyaan/{{$items->id}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger " >Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection