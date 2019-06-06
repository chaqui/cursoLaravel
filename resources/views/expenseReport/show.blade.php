@extends('layouts.base')
@section('content')
<div class="row">
        <div class="col">
        <h1>Report: {{$report->title}}</h1>
            
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/expense_reports" class="btn btn-secondary">back</a>
        </div>
    </div>
    <div class="row">
            <div class="col">
            <a href="/expense_reports/{{$report->id}}/confirmsendmail" class="btn btn-primary">Send Email</a>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <h3>Details</h3>
            <table class="table">
                @foreach ($report->expenses as $expense)
                    <tr>
                        <td>{{$expense->description}}</td>
                        <td>{{$expense->amount}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <a href="/expense_reports/{{$report->id}}/expenses/create" class="btn btn-primary">New Expense</a>
    </div>
    
@endsection
               
