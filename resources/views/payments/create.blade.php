@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">payments</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment No</label>
       
        <select name="enrollment_id" id="enrollment_id" class="form-control">
         @foreach($enrollments as $id => $enrollno)
        <option value="{{$id}}">{{$enrollno}}</option>
        @endforeach
      </select>

        <label>Paid Date </label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

        

        <label>Amount</label>
        <input type="text" name="amount" id="amount" class="form-control">
        <input type="submit" value="Save" class="btn btn-success">
    </form>
  
  </div>
</div>
 
@stop 

