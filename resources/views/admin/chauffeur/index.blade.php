@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des chauffeurs</h3> <a class="btn btn-primary" href="{{route('chauffeurs.create')}}">Ajouter un chauffeur</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Contact</th>
                    <th>Option(s)
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($chauffeurs as $key=> $chauffeur)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$chauffeur->id}}</td>
                      <td>{{$chauffeur->nomChauffeur}}</td>
                      <td>{{$chauffeur->contactChauffeur}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('chauffeurs.edit',$chauffeur->id)}}">
                          <i class="fas fa-edit"></i> Edit

                        </a><a href="{{ route('chauffeurs.show',$chauffeur->id)}}" class="btn btn-primary">
                          <i class="fas fa-eye"></i> Voir

                        </a>

                    <a href="{{ route('chauffeurs.destroy',$chauffeur->id)}}" class="btn btn-danger">
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

@endsection
