<div>
    <div class="row">
        <div class="col-md-12">

            @if(session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Mesajul de intampinare
                        <a href="{{ url('admin/message/create')}}" class='btn btn-primary btn-sm float-end'>Adauga Mesaj de intampinare</a>
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
                            <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->description }}</td> 
                                        <td>
                                                <a href="{{ url('admin/message/'.$message->id.'/edit' )}}" class="btn btn-sm btn-success">Vizualizare</a> 
                                                <a href="{{ url('admin/message/'.$message->id.'/delete') }}" onclick="return confirm('Esti sigur ca doresti sa stergi acest mesaj?')" class="btn btn-sm  btn-danger">
                                                   Sterge!
                                                </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    <br/>
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>


</div>