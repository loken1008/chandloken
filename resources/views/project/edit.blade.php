
  @extends('project.layout')
 @section('title','hallbook')
@section('content')
<form class="form-horizontal" method="post" action="{{route('project.update',$hallbook->id)}}" id="myform">
  <div class="pull-center">
    <a class="btn btn-primary" href="{{ route('project.index') }}"> Back</a>
    </div>
    @csrf
    @method('PUT')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <h1>Hall Book System</h1>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Branch</label>
    <div class="col-sm-6">
      <select class="form-control" name="branchname" >
        <option value="{{$hallbook->branchname}}">{{$hallbook->branchname}}</option>
  </select>
    </div>
  </div>

  <div class="form-group ">
    <label for="inputPassword3" class="col-sm-2 control-label">Hall</label>
    <div class="col-sm-6" id="div">
      <select class="form-control " name="hallname" >
        <option  value="{{$hallbook->hallname}}">{{$hallbook->hallname}}</option>
   
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-6">
      <input type="date" class="form-control" id="inputEmail3" placeholder="" name="date" value="{{$hallbook->date}}">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">From</label>
    <div class="col-sm-6">
      <input type="time" class="form-control" id="inputEmail3" placeholder="" name="start_time" value="{{$hallbook->start_time}}">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">To</label>
    <div class="col-sm-6">
      <input type="time" class="form-control" id="inputEmail3" placeholder="" name="end_time" value="{{$hallbook->end_time}}">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Reason</label>
    <div class="col-sm-6">
      <textarea class="form-control" id="inputEmail3" name="reason" value="{{$hallbook->reason}}">{{$hallbook->reason}}</textarea>
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Booked By</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="booked_by" value="{{$hallbook->booked_by}}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="status" value="{{$hallbook->status}}">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Update</button>
    </div>
  </div>
</form>
@endsection