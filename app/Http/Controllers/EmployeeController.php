<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class EmployeeController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }


    //Generate pdf
    public function sendPDF(){
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

      $pdf = Pdf::loadView('sendEmail',$data);
      ;

      Mail::send('sendEmail', $data, function ($message) use($data,$pdf){
          $message->to($data['email'],$data['email'])->subject($data['title'])->attachData($pdf->output(),'employees.pdf');
      });

      //dd('Mail sent successfully');
      return redirect()->route('dashboard')->with(['message'=>'PDF Sent successfully',
       'status'=>'success'
    ]);

    }

    //code to download a pdf document
    public function downloadPDF(){
        $data = Employee::get();
        $pdf = Pdf::loadView('download',compact('data'));
        return $pdf->download('employees.pdf');
    }

    public function generateTicket(){
       //qr code
       $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate('string'));


        $data = [
            'email'=>'gbkoks196@gmail.com',
            'title'=>"All Tickets",
        'body'=>"This is a Demo",
        'qrcode'=>$qrcode,
        ];
        $pdf = Pdf::loadView('generate',$data);
        //return $pdf->download('ticket.pdf');
        Mail::send('generate', $data, function ($message) use($data,$pdf){
            $message->to($data['email'],$data['email'])->subject($data['title'])->attachData($pdf->output(),'ticket.pdf');
        });

        //dd('Mail sent successfully');
        return redirect()->route('dashboard')->with(['message'=>'Email Sent successfully',
         'status'=>'success'
      ]);
    }

    public function showTicket(){
            $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate('string'));
            $pdf = Pdf::loadView('generate',compact('qrcode'));
            return $pdf->stream();

    }

}
