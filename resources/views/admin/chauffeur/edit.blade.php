@extends('layouts.auth')
<link href="../../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../../admin/css/sb-admin-2.min.css" rel="stylesheet">
@section('content')
<div class="content-wrapper">




    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">

                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Créér un chauffeur</h1>
                                </div>
                                <form class="user" action="{{ route('chauffeurs.update',$chauffeurs->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                             value="{{ $chauffeurs->nomChauffeur}}" placeholder="nomChauffeur" name="nomChauffeur">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" value="{{ $chauffeurs->contactChauffeur}}" placeholder="contactChauffeur" name="contactChauffeur">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Enregistrer
                                    </button>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>









  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="../../admin/vendor/jquery/jquery.min.js"></script>
  <script src="/../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/../admin/js/sb-admin-2.min.js"></script>
 @endsection
