@extends('layouts.admin')
<link href="../../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../../admin/css/sb-admin-2.min.css" rel="stylesheet">
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->




            <div class="card">
            <div class="row">
              <div class="card-header">
                <h3 class="card-title">Detail des chauffeurs</h3> <a class="btn btn-primary" href="{{route('chauffeurs.edit',$chauffeurs->id)}}">Modifier le chauffeur</a>
                <form class="m-5" action="{{ route('chauffeurs.destroy',$chauffeurs->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer chauffeur</button>
                </form>


              </div>

              <!-- /.card-header -->
              <div class="card-body">
                id : {{ $chauffeurs->id}}<br>
                nom : {{ $chauffeurs->nomChauffeur}}<br>
                contact : <span>{{ $chauffeurs->contactChauffeur}}</span> <br>
                Creer le : {{ $chauffeurs->created_at}}<br>
              </div>
              <!-- /.card-body -->

            </div>
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

@endsection
