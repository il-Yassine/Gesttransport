@extends('layouts.admin')
<link href="../../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../../admin/css/sb-admin-2.min.css" rel="stylesheet">
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail des trajets</h3> <a class="btn btn-primary" href="{{route('trajets.edit',$trajets->id)}}">Modifier le trajet</a>
                <form class="m-5" action="{{ route('trajets.destroy',$trajets->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer le trajet</button>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                id : {{ $trajets->id}}<br>
                ville De Depart : {{ $trajets->villeDeDepart}}<br>
                ville De arrive : <span>{{ $trajets->villeDarrive}}</span> <br>
                tarifs Voyage : <span>{{ $trajets->tarifsVoyage}}</span> <br>
                tarifs Coli : <span>{{ $trajets->tarifsColi}}</span> <br>
                Creer le : {{ $trajets->created_at}}<br>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <!-- Bootstrap core JavaScript-->
    <script src="../../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../admin/js/sb-admin-2.min.js"></script>
@endsection
