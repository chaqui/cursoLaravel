@extends('layouts.base')
@section('content')
<h1>Edit Report {{$report->id }}</h1>
  <a class="btn btn-secondary" href="/expense_reports/">back</a>
  <div class="row">
    <div class="col">
      <form action="/expense_reports/{{$report->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" id="title" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection
