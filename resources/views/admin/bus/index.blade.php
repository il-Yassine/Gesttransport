@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des chauffeurs</h3> <a class="btn btn-primary" href="{{route('buses.create')}}">Ajouter un bus</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Nom du bus</th>
                    <th>Matricule du Bus</th>
                    <th>numero de Place</th>
                    <th>Option(s)
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($buses as $key=> $bus)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$bus->id}}</td>
                      <td>{{$bus->nomBus}}</td>
                      <td>{{$bus->matriculeBus}}</td>
                      <td>{{$bus->numeroPlace}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ route('buses.edit',$bus->id)}}">
                          <i class="fas fa-edit"></i> Edit

                        </a><a href="{{ route('buses.show',$bus->id)}}" class="btn btn-primary">
                          <i class="fas fa-eye"></i> Voir

                        </a>

                    <a href="{{ route('buses.destroy',$bus->id)}}" class="btn btn-danger">
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
