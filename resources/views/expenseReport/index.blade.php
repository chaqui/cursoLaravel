@extends('layouts.base')
@section('content')
<div class="row">
        <div class="col">
            <h1>Reports</h1>
            <a href="/expense_reports/create" class="btn btn-primary">Create a new report</a>
            <table class="table">
                 @foreach ($ExpenseReports as $expenseReport )
                 <tr>
                    <td>{{$expenseReport->title}}</td>
                    <td><a href="/expense_reports/{{$expenseReport->id}}/edit">Edit</a></td>
                    <td><a href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</a></td>
                 </tr>    
                 @endforeach
             </table>
        </div>
    </div>
@endsection
               
