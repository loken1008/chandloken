
  @extends('project.layout')
 @section('title','hallbook')
@section('content')

<form class="form-horizontal" method="post" action="{{route('project.store')}}" id="myform">
    @csrf
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
      <select class="form-control" name="branchname" id="country">
        <option value="0" disabled="" selected="true">Select Branch</option>
        @foreach($branch as $blist)
    <option value="{{$blist->branch_name}}">{{$blist->branch_name}}</option>
   @endforeach
  </select>
    </div>
  </div>

  <div class="form-group ">
    <label for="inputPassword3" class="col-sm-2 control-label">Hall</label>
    <div class="col-sm-6" id="div">
      <select class="form-control " name="hallname" id="state">
        <option value="0" disabled="" selected="true">Select Hall</option>
    @foreach($data as $hlist)
    <option value="{{$hlist->hall_name}}">{{$hlist->hall_name}}</option>
   @endforeach
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-6">
      <input type="date" class="form-control" id="inputEmail3" placeholder="" name="date">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">From</label>
    <div class="col-sm-6">
      <input type="time" class="form-control" id="inputEmail3" placeholder="" name="start_time">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">To</label>
    <div class="col-sm-6">
      <input type="time" class="form-control" id="inputEmail3" placeholder="" name="end_time">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Reason</label>
    <div class="col-sm-6">
      <textarea class="form-control" id="inputEmail3" name="reason"></textarea>
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Booked By</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="booked_by">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Book</button>
    </div>
    <div class="pull-center">
    <a class="btn btn-primary" href="{{ route('project.index') }}"> Back</a>
    </div>
  </div>
</form>
@endsection
  

