<?php

namespace App\Http\Services;
use Illuminate\Http\Request;
use App\ExpenseReport;


class ExpenseReportService {
  public function index()
  {
      return ExpenseReport::all();
  }

  public function store(Request $request)
    {
        $report = new ExpenseReport();
        $report->title = $request->get('title');
        $report->save();
    }
}