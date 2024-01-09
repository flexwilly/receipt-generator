<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
    //go to view the ticket
    public function index(){
        return view('first_ticket');
    }
    //function to show ticket
    public function showTicket(){
        $orders = Order::get();

        $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate('string'));
        $data = [
            'qrcode'=>$qrcode,
            'orders'=>$orders,
        ];
        $pdf = Pdf::loadView('first_ticket',$data);
        return $pdf->stream();
}


    //function to generate ticket and send it via email
    public function sendTicket(){
        $orders = Order::get();
        //qr code
        $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate('string'));


         $data = [
             'email'=>'itnomads@gmail.com',
             'title'=>"All Tickets",
         'body'=>"This is a Demo",
         'qrcode'=>$qrcode,
         'orders'=>$orders,
         ];
         $pdf = Pdf::loadView('first_ticket',$data);
         //return $pdf->download('ticket.pdf');
         Mail::send('first_ticket', $data, function ($message) use($data,$pdf){
             $message->to($data['email'])->subject($data['title'])->attachData($pdf->output(),'ticket.pdf');
         });

         //dd('Mail sent successfully');
         return redirect()->route('dashboard')->with(['message'=>'Email Sent successfully',
          'status'=>'success'
       ]);
     }

      //function to stream ticket
    public function streamTicket(){
        $pdf = Pdf::loadView('ticket');
        return $pdf->stream();
    }

}
