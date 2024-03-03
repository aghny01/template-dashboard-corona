<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Restaurant | Login</title>

    {{-- css eksternal --}}
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css' . '?v=1.0') }}">
    {{-- end css eksternal --}}
    
    {{-- start css bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    {{-- end css bootstrap --}}
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link href="{{ asset('assets/css/sign-in.css' . '?v=1.0') }}" rel="stylesheet">
  </head>
  <body>
    <div class="row justify-content-center">
      <div class="col-md-4">
      <main class="form-signin w-100 m-auto">
        <h1 class="mt-5 h3 mb-3 fw-normal text-center">Login</h1>
        <form class="mt-5" method="POST" action="{{ route('login.login-proses') }}">
          @csrf
            <div class="form-floating mb-2">
              <input type="name" class="form-control" id="name" placeholder="name" name="name">
              <label for="name">name</label>
            </div>
            @error('name')
               <small>{{ $message }}</small>
            @enderror
            <div class="form-floating">
              <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
              <label for="Password">Password</label>
            </div>
            @error('password')
               <small>{{ $message }}</small>
            @enderror
            <button class="btn btn-primary w-100 py-2 mb-2" type="submit">Login</button>
            <small class="d-block text-center">Belum punya akun?<a class="ms-3" href="{{ route('login.register') }}">Register</a></small> 
          </form>
        </main>
      </div>
    </div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message =Session::get('failed'))
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ $message }}',
})
    </script>
@endif
@if ($message =Session::get('success'))
    <script>
      Swal.fire('{{ $message }}')
    </script>
@endif
    </body>
</html>
