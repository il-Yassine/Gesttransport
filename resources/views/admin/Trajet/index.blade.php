@extends('layouts.auth')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des trajets</h3> <a class="btn btn-primary" href="{{route('trajets.create')}}">Ajouter un trajet</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>ville De Depart</th>
                    <th>ville De arrive</th>
                    <th>tarifs Voyage</th>
                    <th>tarifs Coli</th>
                    <th>Option(s)
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($trajets as $key=> $trajet)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$trajet->id}}</td>
                      <td>{{$trajet->villeDeDepart}}</td>
                      <td>{{$trajet->villeDarrive}}</td>
                      <td>{{$trajet->tarifsVoyage}}f</td>
                      <td>{{$trajet->tarifsColi}}f</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('trajets.edit',$trajet->id)}}">
                          <i class="fas fa-edit"></i> Edit

                        </a><a href="{{ route('trajets.show',$trajet->id)}}" class="btn btn-primary">
                          <i class="fas fa-eye"></i> Voir

                        </a>

                    <a href="{{ route('trajets.destroy',$trajet->id)}}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i> Supprimer

                      </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
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
