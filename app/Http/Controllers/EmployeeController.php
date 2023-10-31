<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
class EmployeeController extends Controller
{
    //
    public function index(){
        $employees = Employee::all();
        return view('index',compact('employees'));
    }
    //Generate pdf
    public function generatePDF(){
        // retreive all records from db
      $employees = Employee::get();
      $data = [
        //'email'=>'gbkoks196@gmail.com',
        'email'=>'itnomads.ke@gmail.com',
        'title'=>"All Employees",
        'body'=>"This is a Demo",
        'date'=>date('m/d/Y'),
        'employees'=> $employees
      ];

      $pdf = Pdf::loadView('index',$data);
      ;

      Mail::send('index', $data, function ($message) use($data,$pdf){
          $message->to($data['email'],$data['email'])->subject($data['title'])->attachData($pdf->output(),'ticket.pdf');
      });

      dd('Mail sent successfully');

    }

    public function downloadPDF(){
        $data = Employee::get();
        $pdf = Pdf::loadview('download',compact('data'));
        return $pdf->download('employee-list.pdf');
    }

    public function generateTicket(){
        $data = Employee::get();
        $pdf = Pdf::loadview('ticket',compact('data'));
        return $pdf->download('event-ticket.pdf');
        //return view('ticket',compact('data'));
    }


}
