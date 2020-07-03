@extends('Tugas14.master')

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <td scope="col">Answer</td>
            <td scope="col">Created Date</td>
            <td scope="col">Updated Date</td>
            <td scope="col">For Question</td>
        </tr>
    </thead>
    <tbody>
       @foreach($jawaban as $key => $value)
       <tr>
            <th scope=col>{{$key+1}}</th>
            <td scope=col>{{$value->isi}}</td>
            <td scope=col>{{$value->created_at}}</td>
            <td scope=col>{{$value->updated_at}}</td>
            @foreach($pertanyaan as $k => $v)
            <td scope=col>{{$v->isi}}</td>
            @endforeach
        </tr>        
       @endforeach
    </tbody>
    </table>
    <form role="form" method="POST" class="mt-5" action="/jawaban/{{$pertanyaan_id}}">
    @csrf
        <input type="text" class="form-control ml-2" name="isi" placeholder="New Answer">
        <button type="submit" class="btn btn-primary btn-info mt-2 ml-2" >Submit</button> 
    </form>
@endsection