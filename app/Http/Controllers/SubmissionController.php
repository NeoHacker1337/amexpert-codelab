<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\Submission;
use App\Models\Train;
use DB;
use App\Imports\SubmissionImport;
use App\Imports\TrainImport;

class SubmissionController extends Controller
{

    public function importForm()
    {
    return view('import-form');
    }


    public function import(Request $request)
    {
    Excel::import(new SubmissionImport,$request->file);
    return back()->with('status', 'Record are imported Successfully!');
    //  return "Record are imported Successfully";
    }

    public function showsubmission()
    {
    $data = DB::table('submission')->get();

    return view('showsubmission',compact('data'));
    }

    public function singlecustomer($id)
    {
     $record = Submission::findOrFail($id);
     $r = $record->customer_id;
     $client =  DB::table('train')->where('customer_id','LIKE','%'.$r.'%')->get();

$result = ($client[0]->net_yearly_income - $client[0]->yearly_debt_payments) / ($client[0]->age * $client[0]->no_of_days_employed);
dd($result);

    return view('single-customer',compact('id','r'));
    }

    public function clientdata()
    {
      $data = DB::table('train')->paginate(100);
      return view('clientdata',compact('data'));
    }

    public function clientdatasave(Request $request)
    {

    Excel::import(new TrainImport,$request->file);
    return back()->with('status', 'Record are imported Successfully!');
    //  return "Record are imported Successfully";
    }


}
