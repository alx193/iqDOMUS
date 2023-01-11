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
                                    <th>Nume</th>
                                    <th>Descriere</th>
                                    <th>Actiune</th>
                                </tr>
                            
                        </thead>
                    </table>
                    <br/>
                    {{-- {{ $galleries->links() }} --}}
                </div>
            </div>
        </div>
    </div>


</div>