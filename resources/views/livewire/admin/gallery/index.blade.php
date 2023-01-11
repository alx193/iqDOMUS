<div>
    <div class="row">
        <div class="col-md-12">

            @if(session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Galerie Foto
                        <a href="{{ url('admin/gallery/create')}}" class='btn btn-primary btn-sm float-end'>Adauga Fotografii in Galerie</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table table-striped">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Solutie</th>
                                    <th>Nume</th>
                                    <th>Descriere</th>
                                    <th>Actiune</th>
                                </tr>
                            
                        </thead>
                        <tbody>
                            @forelse ($galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>
                                    @if($gallery->solution)
                                        {{ $gallery->solution->name }}
                                    @else
                                    Fara Solutie
                                    @endif
                                </td>
                                <td>{{ $gallery->name }}</td>
                                <td>{{ $gallery->description }}</td>
                                <td>
                                    <a href="{{ url('admin/gallery/'.$gallery->id.'/edit' )}}" class="btn btn-sm btn-success">Vizualizare / Actualizare</a> 
                                    <a href="{{ url('admin/gallery/'.$gallery->id.'/delete') }}" onclick="return confirm('Esti sigur ca doresti sa stergi acesta galerie?')" class="btn btn-sm  btn-danger">
                                    Sterge!
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">Nu exista galerie</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <br/>
                     {{ $galleries->links() }} 
                </div>
            </div>
        </div>
    </div>


</div>