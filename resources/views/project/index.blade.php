@extends('project.layout')
 @section('title','hallbook')
@section('content')
    <div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>List Of Booking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('project.create')}}">Booking Form</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="width: 1200px">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Branch </th>
             <th scope="col">Hall </th>
              <th scope="col">Book Date</th>
               <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                 <th scope="col">Booked Purpose</th>
                  <th scope="col">Booked By</th>
                  <th scope="col">Action</th>
        </tr>

        @foreach ($hallbook as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $book->branchname }}</td>
            <td>{{ $book->hallname }}</td>
            <td>{{ $book->date }}</td>
            <td>{{$book->start_time}}</td>
            <td>{{$book->end_time}}</td>
            <td>{{ $book->reason}}</td>
            <td>{{ $book->booked_by }}</td>
            <td>
                
                <form action="{{ route('project.destroy', $book->id) }}" method="post">
                    <a href="{{route('project.edit',$book->id)}}" title="">Edit</a>
                    @method('DELETE')
                 @csrf
                 <button type="submit" title="delete" style="border: none; background-color:transparent;color:red">
                           Delete

                        </button>
              </form>
            </td>
        </tr>
        @endforeach
    </table>
  
   
      
@endsection