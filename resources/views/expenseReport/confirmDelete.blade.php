@extends('layouts.base')
@section('content')
<h1>Confirm Delete Report {{$report->id}}</h1>
  <a class="btn btn-secondary" href="/expense_reports/">back</a>
  <div class="row">
    <div class="col">
      <form action="/expense_reports/{{$report->id}}" method="POST">
        @csrf
        @method('delete')
        
        <button type="submit" class="btn btn-primary">Delete</button>

      </form>
    </div>
  </div>
@endsection
