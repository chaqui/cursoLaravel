@extends('layouts.base')
@section('content')
  <h1>New Report</h1>
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
      <form action="/expense_reports" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old("title")}}">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection
