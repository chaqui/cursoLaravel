@extends('layouts.base')
@section('content')
<h1>Confirm Send Report {{$report->id}}</h1>
  <a class="btn btn-secondary" href="/expense_reports/">back</a>
  <div class="row">
    <div class="col">
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
      <form action="/expense_reports/{{$report->id}}/sendMail" method="POST">
        @csrf
        <div class="form-group">
            <label for="Email">Email:</label>
          <input type="text" name="Email" id="Email" class="form-control" value="{{old("Email")}}">
  
          </div>
        
        <button type="submit" class="btn btn-primary">Send Email</button>

      </form>
    </div>
  </div>
@endsection
