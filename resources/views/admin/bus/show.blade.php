@extends('layouts.auth')
<link href="../../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../../admin/css/sb-admin-2.min.css" rel="stylesheet">
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail des Bus</h3> <a class="btn btn-primary" href="{{route('buses.edit',$buses->id)}}">Modifier le bus</a>
                <form class="m-5" action="{{ route('buses.destroy',$buses->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer bus</button>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                id : {{ $buses->id}}<br>
                nom : {{ $buses->nomBus}}<br>
                matricule : <span>{{ $buses->matriculeBus}}</span> <br>
                numero de Place : <span>{{ $buses->numeroPlace}}</span> <br>
                Creer le : {{ $buses->created_at}}<br>
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

@endsection
