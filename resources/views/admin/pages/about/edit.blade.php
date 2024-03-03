<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.sidebar')
      <div class="container">
        @include('admin.nav')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> About | judul </h3>
            </div>
            @if ($errors->any())
            <div class="pt-3">
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{ $item }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
                
            @endif
            {{-- form isi --}}
            <form action="{{ url('about/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="my-3 p-3 bg-dark rounded">
                  <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label fw-bold fw-bold">Judul</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="judul" id="judul" value="{{ $data->judul }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label fw-bold">Deskripsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="deskripsi" id="deskripsi" value="{{ $data->deskripsi }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="video" class="col-sm-2 col-form-label fw-bold">Video</label>
                    <div class="col-sm-10">
                      <video controls="controls"  style="width:100%;" >
                        <source src="{{ asset("about-videos/$data->video") }}" type="video/mp4" class="card-img img-fluid object-fit-cover"/>
                        your browser does not support the HTML5 video element.
                    </video>
                      <input type="file" class="form-control " name="video" id="video">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="img" class="col-sm-2 col-form-label fw-bold">Img</label>
                    <div class="col-sm-10">
                      <img src="{{ asset("about-images/$data->img") }}" class="card-img img-fluid object-fit-cover" style="width:600px;" alt="image">
                      <input type="file" class="form-control " name="img" id="img">
                    </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="img" class="col-sm-2 col-form-label fw-bold">Submit</label>
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    </div>
                  </div>
                </div>
                <a href="{{ url('about') }}" class="btn btn-light"><< Kembali</a>
              </form>
              {{-- end form --}}
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-dark-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>