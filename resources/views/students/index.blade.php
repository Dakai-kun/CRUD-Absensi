@extends('students.layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="background-color:orange;color:white;;border-radius:3px;margin-bottom:5px;padding-left:5px;padding-right:5px;padding-bottom:-1px">
                <h2>CRUD Absensi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" style="background-color:purple;" href="{{ route('students.create') }}"> Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table style="border:gray;" class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Rayon</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->rombel }}</td>
            <td>{{ $student->rayon }}</td>
            <td>{{ $student->ket}}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $students->links() !!}
        
@endsection