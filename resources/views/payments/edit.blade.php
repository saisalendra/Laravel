@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
        <label>Enrollment No</label>
       
      <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($payments as $id => $enrollno)
             <option value="{{$id}}">{{$enrollno}}</option>
           @endforeach
      </select>

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="syllabus" value="{{$payments->paid_date}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="text" name="amount" id="duration" value="{{$payments->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop