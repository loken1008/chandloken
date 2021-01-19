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
            
            
        </tr>
        @endforeach
    </table>
  
   
      
@endsection