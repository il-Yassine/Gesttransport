<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{config("app.name")}}</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->


        </div>

    </div>


    @if(count($errors)>0)
  <div class="container-fluid">
      <div class="row">
          <div class="col-10 mx-auto p-3 my-2 alert alert-danger" role="alert" data-dismmiss="alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
              </ul>
              @foreach ($errors->all() as $error)
              <li><strong>{{ $error }}</strong></li>
              @endforeach
              </ul>
          </div>
      </div>
  </div>
  @endif
  @if (Session::has('success'))
<div class="container my-2">
    <div class="row">
        <div class="col-10 mx-auto p-3 my-2 alert alert-success {{ Session::get('action')? 'float-right' : 'text-center' }}"
            role="alert" data-dismmiss="alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times</button>
            <strong>{{ Session::get('success')}}</strong>
            @if(Session::get('action'))
            <hr>
            <a href="{{ route(Session::get('action')) }}" class="btn btn-xs btn-success float-right">Continuer</a>
            @endif
        </div>
    </div>
</div>
@endif


  @yield('content')


    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>
