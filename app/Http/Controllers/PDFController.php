<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\MailExample;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PDFController extends Controller
{
    //
    public function index(){
        $subject = 'Purchased ticket';
        $body = 'Ticket purchased successfully';

        $orders = Order::get();
        $order_number = "#000893456";
        //qr code
        $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate($order_number));
        $data = [
            'email'=>'itnomads.ke@gmail.com',
            'qrcode'=>$qrcode,
            'orders'=>$orders,
            'order_number'=>$order_number,
        ];
        //$pdf = Pdf::loadView('first_ticket',$data);
        $pdf = Pdf::loadView('ticket',$data);

        //return $pdf->stream();
        Mail::to($data["email"])->send(new MailExample($subject,$body,$pdf));
        return redirect()->route('dashboard')->with(['message'=>'Email Sent successfully',
         'status'=>'success'
        ]);

    }


}
