@extends('Tugas14.master')

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <td scope="col">Question</td>
            <td scope="col">Created Date</td>
            <td scope="col">Updated Date</td>
            <td scope="col">Answer</td>
        </tr>
    </thead>
    <tbody>            
       @foreach($jawaban as $k => $v)
        <tr>
        @foreach($pertanyaan as $key => $value)
                <th scope=col>{{$k+1}}</th>
                <td scope=col>{{$value->isi}}</td>
                <td scope=col>{{$value->created_at}}</td>
                <td scope=col>{{$value->updated_at}}</td>
                <td scope=col>{{$v->isi}}</td>
            </tr>        
        @endforeach
       @endforeach
    </tbody>
    </table>
@endsection