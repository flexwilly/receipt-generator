<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <section class="mt-4 mb-4">
        <div class="container">
            <div class="row mb-3">
                    @if($message = Session::get('message'))
                    <div class="col-md-6 mx-auto">
                        <div class="alert alert-{{ Session::get('status') }} " role="alert">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
            </div>
            <div class="row mt-3">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                                <h1 class="text-center">PDF</h1>
                        </div>
                        <div class="card-body">
                            <div class="row p-2">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <a href="{{ route('email_ticket') }}" class="btn btn-primary">Email PDF</a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <a href="{{ route('stream_pdf') }}" class="btn btn-success">Stream PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
