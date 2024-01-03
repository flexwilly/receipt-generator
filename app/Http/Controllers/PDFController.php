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
        $orders = Order::get();
        //qr code
        $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate('string'));
        $data = [
            'email'=>'itnomads.ke@gmail.com',
            'title'=>"All Tickets",
            'body'=>"This is a Demo",
            'qrcode'=>$qrcode,
            'orders'=>$orders,
        ];
        $pdf = Pdf::loadView('first_ticket',$data);
        $data["pdf"] = $pdf;
        Mail::to($data["email"])->send(new MailExample($data));
        //dd('Mail sent successfully');
        return redirect()->route('dashboard')->with(['message'=>'Email Sent successfully',
          'status'=>'success'
       ]);

    }

}
