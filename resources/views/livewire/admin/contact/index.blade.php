<div>

     


    <div class="row">
        <div class="col-md-12">

            @if(session('message'))
                <div class="alert alert-success">{{ session('message')}}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3>Formulare de Contact
                        {{-- <a href="{{ url('admin/contact/create')}}" class='btn btn-primary btn-sm float-end'>Adauga Formular de Contact</a> --}}
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table table-striped">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nume</th>
                                    <th>E-mail</th>
                                    <th>Telefon</th>
                                    <th>Solutie Dorita</th>
                                    {{-- <th>Mesaj</th> --}}
                                    <th>Status</th>
                                    <th>Data</th>
                                    <th>Actiune</th>
                                </tr>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->solution }}</td>
                                        {{-- <td>{{ $contact->message }}</td> --}}
                                        <td>{{ $contact->status == '1' ? 'Citit' : '' }}</td>
                                        <td>{{ $contact->created_at }}</td>
                                        <td>
                                                <a href="{{ url('admin/contact/'.$contact->id.'/edit' )}}" class="btn btn-sm btn-success">Vizualizare</a> 
                                                <a href="{{ url('admin/contact/'.$contact->id.'/delete') }}" onclick="return confirm('Esti sigur ca doresti sa stergi acest Formular de Contact?')" class="btn btn-sm  btn-danger">
                                                   Sterge!
                                                </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                    <br/>
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>


</div>
