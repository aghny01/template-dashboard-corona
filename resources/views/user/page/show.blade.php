<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant | Aghny</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
             li{
            text-decoration: none;
        }
        .a{
            text-align: right;
        }
        .text{
            text-align: right;
            margin-right: 2%;
        }
    </style>
</head>
<body>
    @if (Session::has('success'))
        <div class="pt-3 me-5 ms-5 mt-2">
            <div class="alert alert-success">
                    {{ Session::get('success') }}
            </div>
        </div>
    @endif
<div class="container">
    <div class="mt-2"></div>
    <hr>
    <h3 class="text-center"><b>HARAP SCREENSHOT SEBAGAI BUKTI BAHWA ANDA TELAH MELAKUKAN RESERVASI</b></h3>
    <div class="row me-5 ms-5 justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center fw-bold">Bukti Reservasi</div>
                </div>
                <div class="table-responsive p-2">
                  <table class="table">
                    <thead>
                    </thead>
                    <tbody>
                        @foreach ($reservasi as $i)
                                                  <tr>
                        <td class="col-md-1">nama</td>
                        <td class="col-md-1 a">:</td>
                        <td class="col-md-4">{{ $i->name }}</td>
                      </tr>   
                    <tr>
                        <td>email</td>
                        <td class="a">:</td>
                        <td>{{ $i->email }}</td>  
                    </tr>                      
                    <tr>
                        <td>phone</td>
                        <td class="a">:</td>
                        <td>{{ $i->phone }}</td>  
                    </tr>                      
                    <tr>
                        <td>meja</td>
                        <td class="a">:</td>
                        <td>{{ $i->no_meja }}</td>  
                    </tr>                      
                    <tr>
                        <td>tanggal</td>
                        <td class="a">:</td>
                        <td>{{ $i->date }}</td>  
                    </tr>                      
                    <tr>
                        <td>orang</td>
                        <td class="a">:</td>
                        <td>{{ $i->orang }}</td>  
                    </tr>   
                    @endforeach                                       
                      </tbody>
                  </table>
                </div>
                <p class="text"> 
                    Restaurant, 
                </p>
                <p class="text"> 
                    <b>Ttd</b> 
                </p>
                <p class="text"> 
                    admin
                </p>
                    </div>
                </div>
            </div>
            <div class="buttons mt-5">
                <a href="{{ route('home') }}" class="text-decoration-none rounded-pill btn btn-primary">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>