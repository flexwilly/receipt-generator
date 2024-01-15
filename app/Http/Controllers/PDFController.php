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

        $orders = Order::where('order_num','#3738920089')->get();
        //qr code
       // $qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate($order_number));
        $data = [
            'email'=>'itnomads.ke@gmail.com',
            'orders'=>$orders,
        ];
        //$pdf = Pdf::loadView('first_ticket',$data);
        $pdf = Pdf::loadView('ticket',$data);

        //return $pdf->stream();
        Mail::to($data["email"])->send(new MailExample($subject,$body,$pdf));
        return redirect()->route('dashboard')->with(['message'=>'Email Sent successfully',
         'status'=>'success'
        ]);
    }

        public function streamPDF(){
            $orders = Order::where('order_num','#3738920089')->get();
            //qr code
            //$qrcode = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate('#3738920089'));
            $data = [
                'orders'=>$orders,
            ];
            //$pdf = Pdf::loadView('first_ticket',$data);

            $pdf = Pdf::loadView('ticket',$data);

            return $pdf->stream();
        }

    }



