<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ExpenseReportService;

class ExpenseReportController extends Controller
{
    private  $expenseReportService;
    
    public function __construct(ExpenseReportService $reportService)
    {
        $this->expenseReportService = $reportService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index',['ExpenseReports'=>$this->expenseReportService->index()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|min:3 '
        ]);
        $this->expenseReportService->store($request);
        return redirect('/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('expenseReport.edit',[
            'report'=>$this->expenseReportService->show($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->expenseReportService->update($request,$id);
        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->expenseReportService->destroy($id);
        return redirect('/expense_reports');
    }

    public function confirmDelete($id){
        return view('expenseReport.confirmDelete',['report'=>$this->expenseReportService->show($id)]);
    }
}
