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
              <h3 class="page-title"> Chef new </h3>
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
            <form action="{{ url('chef/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="my-3 p-3 bg-dark rounded">
                  <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label fw-bold fw-bold">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="name" id="name" value="{{ $data->name }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="posisi" class="col-sm-2 col-form-label fw-bold">Posisi</label>
                    <div class="col-sm-10">
                      <select id="posisiChef" name="posisi" class="form-select">
                        <option value="executiveChef" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'executiveChef') ? 'selected' : '' }}>Executive Chef</option>
                        <option value="sousChef" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'sousChef') ? 'selected' : '' }}>Sous Chef</option>
                        <option value="chefDeCuisine" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'chefDeCuisine') ? 'selected' : '' }}>Chef de Cuisine</option>
                        <option value="chefDePartie" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'chefDePartie') ? 'selected' : '' }}>Chef de Partie</option>
                        <option value="commisChef" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'commisChef') ? 'selected' : '' }}>Commis Chef</option>
                        <option value="pastryChef" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'pastryChef') ? 'selected' : '' }}>Pastry Chef</option>
                        <option value="gardeManger" {{ (old('posisi', isset($data) ? $data->posisi : '') == 'gardeManger') ? 'selected' : '' }}>Chef Garde Manger</option>
                        </select>
                    </div>
                </div>
                  <div class="mb-3 row">
                    <label for="instagram" class="col-sm-2 col-form-label fw-bold">Instagram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control " name="instagram" id="instagram" value="{{ $data->instagram }}">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="img" class="col-sm-2 col-form-label fw-bold">Img</label>
                    <div class="col-sm-10">
                      <img src="{{ asset("chef-images/$data->img") }}" class="card-img img-fluid object-fit-cover" style="width:7rem; height:7rem;" alt="image">
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
                <a href="{{ url('chef') }}" class="btn btn-light"><< Kembali</a>
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