<div class="row">
        <div class="col-md-12">

            @if(session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Solutii
                         <a href="{{ url('admin/solution/create')}}" class='btn btn-primary btn-sm float-end'>Adauga Solutie</a> 
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Nume</td>
                                <td>Descriere</td>
                                <td>Imagine</td>
                                <td>Status</td>
                                <td>Actiune</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solutions as $solution)
                                <tr>
                                    <td>{{ $solution->id }}</td>
                                    <td>{{ $solution->name }}</td>
                                    <td>{{ $solution->description }}</td>
                                    <td>{{ $solution->image }}</td>
                                    <td>{{ $solution->status == '1' ? 'Ascuns':'Vizibil' }}</td>
                                    <td>
                                        <a href="{{ url('admin/solution/'.$solution->id.'/edit' )}}" class="btn btn-sm btn-success">Vizualizare / Actualizare</a> 
                                        <a href="{{ url('admin/solution/'.$solution->id.'/delete') }}" onclick="return confirm('Esti sigur ca doresti sa stergi acesta solutie?')" class="btn btn-sm  btn-danger">
                                        Sterge!
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> <br/>
                    {{ $solutions->links()}}
                </div>
