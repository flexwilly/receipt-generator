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
            <div class="row">
                <div class="col-md-6 mb-3">
                      <div class="form-group">
                          <a href="{{ route('downloadpdf') }}" class="btn btn-success">Download PDF</a>
                      </div>
                </div>
                <div class="col-md-6 mb-3"></div>
                <div class="form-group">
                    <a href="{{ route('sendpdf') }}" class="btn btn-primary">Email PDF</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>