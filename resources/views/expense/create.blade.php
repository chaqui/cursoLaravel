@extends('layouts.base')
@section('content')
  <h1>New Expense</h1>
  <a class="btn btn-secondary" href="/expense_reports/{{$expenseReport->id}}">back</a>
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
        <form action="/expense_reports/{{$expenseReport->id}}/expenses" method="POST">
        @csrf
        <div class="form-group">
          <label for="Description">Description:</label>
        <input type="text" name="Description" id="Description" class="form-control" value="{{old("Description")}}">

        </div>
        <div class="form-group">
            <label for="Amount">Amount:</label>
          <input type="text" name="Amount" id="Amount" class="form-control" value="{{old("Amount")}}">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection
