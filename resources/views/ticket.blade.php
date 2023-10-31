<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF Example</title>

    <link rel="stylesheet" href="{{  URL::asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
<section class="mt-5 mb-5">
  <div class="container">
     <div class="row">
        <div class="col-md-10 m-auto">
            @foreach($data as $d)
            <div class="ticket page-break mb-4">
                <div class="left">
                    <div class="image">
                        <img src="{{ URL::asset('img/img1.jpg')  }}" alt="" width="250" height="250" class="d-block">
                        <p class="admit-one">
                            <span>ADMIT {{ $d->id }}</span>
                            <span>ADMIT {{ $d->id }}</span>
                            <span>ADMIT {{ $d->id }}</span>
                        </p>
                        <div class="ticket-number">
                            <p>
                                {{ $d->id }}
                            </p>
                        </div>
                    </div>
                    <div class="ticket-info">
                        <p class="date">
                            <span>TUESDAY</span>
                            <span class="june-29">JUNE 29TH</span>
                            <span>2021</span>
                        </p>
                        <div class="show-name">
                            <h1>SOUR Prom</h1>
                            <h2>{{ $d->name }}</h2>
                        </div>
                        <div class="time">
                            <p>8:00 PM <span>TO</span> 11:00 PM</p>
                            <p>DOORS <span>@</span> 7:00 PM</p>
                        </div>
                        <p class="location"><span>East High School</span>
                            <span class="separator"><i class="far fa-smile"></i></span><span>Salt Lake City, Utah</span>
                        </p>
                    </div>
                </div>
                <div class="right">
                    <p class="admit-one">
                        <span>ADMIT {{ $d->id }}</span>
                        <span>ADMIT {{ $d->id }}</span>
                        <span>ADMIT {{ $d->id }}</span>
                    </p>
                    <div class="right-info-container">

                        <div class="time">
                            <p>8:00 PM <span>TO</span> 11:00 PM</p>
                            <p>DOORS <span>@</span> 7:00 PM</p>
                        </div>
                        <div class="barcode">
                            <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
                        </div>
                        <p class="ticket-number">
                            {{ $d->id }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
     </div>
  </div>
</section>
</body>

</html>
