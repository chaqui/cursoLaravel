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
    public function show($id)
    {
      return $this->get($id);
    }

    public function get($id)
    {
      return ExpenseReport::findOrFail($id);
    }

    public function update(Request $request, $id )
    {
      $report = $this->get($id);
      $report->title= $request->get('title');
      $report->save();
    }

    public function destroy($id)
    {
      $report = $this->get($id);
      $report->delete();
    }
}