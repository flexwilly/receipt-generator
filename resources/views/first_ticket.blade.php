<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
   ,<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Ticket</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
       .page-break {page-break-after: always;}

      .TicketLogo { width: 120px; height: auto; }
       #barcode img { height: 130px; width: 130px; max-width:130px; max-height: 130px; }
    </style>
    </head>
    <body>
      <section class="mb-4 mt-4">
        <div class="container">
          <div class="row">

            <div class="col-md-11 mx-auto">
                @foreach($orders as $order)
                <div class="TTicket mx-auto page-break" style="margin: 0px; height: 192px; width: 665px;">
                    <table width="100%" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;" class="border border-danger">
                      <tr>
                      <td width="140" valign="top" style="margin-left: 5px;">
                        <div id="barcode" style="text-align: center; padding: 27px 0 10px 25px;"><img src="data:image/png;base64,{{ $qrcode }}">
                        </div>
                        <div style="padding: 0 0 0 25px;">OrderID #{{ $order->event_num }}</div>
                        <div style="padding: 5px 0 0 25px; font-size: 14px; font-weight: bold;">{{ $order->order_by }}</div>
                      </td>
                      <td valign="top" style="padding: 25px 15px 0 25px;">
                        <div style="padding: 0px 0 0 0; font-size: 16px; font-weight: bold;">Tanzania</div>
                        <div style="padding: 5px 0 0 0; font-size: 16px;">18/9/2024</div>
                        <div style="padding: 15px 0 0 0; font-size: 14px;">Simba Day</div>
                        <div style="padding: 5px 0 0 0; font-size: 12px;">Dar es Salaam</div>
                        <div style="padding: 15px 0 0 0; font-size: 14px; font-weight: bold;">Sports Evemt</div>
                        <div style="padding: 10px 0 0 0; font-size: 10px;">No Refunds or Exchanges</div>
                      </td>
                      <td width="120" valign="top">
                        <div style="padding: 10px 0 0 10px;"><img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/img/simba1.png'))) }}" class="TicketLogo">
                        </div>
                        <div style="padding: 5px 0 0 10px; text-align: right;">#{{ $order->event_num }}</div>
                        <div style="padding: 5px 0 15px 10px; font-size: 14px; font-weight: bold; text-align: right;">{{ $order->order_by }}</div>
                        <div style="padding: 5px 0 0 10px; font-size: 24px; font-weight: bold; text-align: right;">$ {{ $order->event_cost }}</div>
                      </td>
                      </tr>
                    </table>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </section>
    </body>
</html>

