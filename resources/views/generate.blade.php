<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!---<link rel="stylesheet" href=" asset('css/styles.css') }}">-->

    <title>Simple Ticket</title>
    <style>
        .box {
    margin: 0px auto;
    margin-top: 80px;
    background: #fff9ee;
    color: #333;
    text-transform: uppercase;
    padding: 8px;
    width: 300px;
    font-weight: bold;
    text-shadow: 0px 1px 0px #fff;
    font-family: "arvo";
    font-size: 11px;
    border-left: 1px dashed rgba(51, 51, 51, 0.5);
    -webkit-filter: drop-shadow(0 5px 18px #000);
}

.inner {
    border: 2px dashed rgba(51, 51, 51, 0.5);
    min-height: 100px;
    padding: 8px;
}
.inner h1 {
    padding: 5px 0px;
    margin: 0px;
    font-size: 18px;
    border-bottom: 1px solid rgba(51, 51, 51, 0.3);
    text-align: center;
}
.info {
    width: 100%;
    margin-top: 5px;
}
.info .wp {
    float: left;
    padding: 5px;
    width: 83px;
    text-align: center;
}
.info .wp h2 {
    margin: 8px;
}
.total {
    border-top: 1px solid rgba(51, 51, 51, 0.3);
}

.clearfix:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
.total h2 {
    padding-left: 115px;
    margin: 10px 0px;
    font-size: 15px;
}
.total p {
    float: right;
    margin: 0px;
    margin-right: 15px;
}

a.buy {
    color: #fff;
    text-align: center;
    font-size: 25px;
    text-decoration: none;
    display: block;
    width: 200px;
    margin: 0px auto;
    margin-top: 50px;
    padding: 5px;
    background: rgba(0, 0, 0, 0.5);
}
.page-break {
    page-break-after: always;
}

    </style>
</head>
<body>

       <!--Ticket1--->
    <div class="box page-break">
        <div class='inner'>
            <h1>David Guetta tour 2012</h1>
            <div class='info clearfix'>
                <div class='wp'>Tickets<h2>1</h2></div>
                <div class='wp'>Type<h2>VIP</h2></div>
                <div class='wp'>
                    <img src="data:image/png;base64,{{ $qrcode }}">
                </div>                
            </div>
            <div class='total clearfix'>
                <div class='wp'>Disc<h2>5%</h2></div>
            <h2>Total : <p>$ 4.000</p></h2>
            </div>
        </div>
    </div>
    <!--Ticket2--->
    <div class="box page-break">
        <div class='inner'>
            <h1>David Guetta tour 2012</h1>
            <div class='info clearfix'>
                <div class='wp'>Tickets<h2>2</h2></div>
                <div class='wp'>Type<h2>VIP</h2></div>
                <div class='wp'>
                    <img src="data:image/png;base64,{{ $qrcode }}">
                </div>                
            </div>
            <div class='total clearfix'>
                <div class='wp'>Disc<h2>5%</h2></div>
            <h2>Total : <p>$ 4.000</p></h2>
            </div>
        </div>
    </div>
     <!--Ticket2--->
     <div class="box page-break">
        <div class='inner'>
            <h1>David Guetta tour 2012</h1>
            <div class='info clearfix'>
                <div class='wp'>Tickets<h2>3</h2></div>
                <div class='wp'>Type<h2>VIP</h2></div>
                <div class='wp'>
                    <img src="data:image/png;base64,{{ $qrcode }}">
                </div>                
            </div>
            <div class='total clearfix'>
                <div class='wp'>Disc<h2>5%</h2></div>
            <h2>Total : <p>$ 4.000</p></h2>
            </div>
        </div>
    </div>
</body>
</html>
