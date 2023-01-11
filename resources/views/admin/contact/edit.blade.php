@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Modifica Formularul de Contact
                <a href="{{ url('admin/contact') }}" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/contact/'.$contact->id) }}"  method="POST" enctype="multiplart/form-data">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="{{ $contact->name }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>E-mail</label>
                    <input type="text" name="email" value="{{ $contact->email }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Solutie</label>
                    <select name="solution" value="{{ $contact->solution }}" >
                <option value="Casa Basic">Casa Basic</option>
                <option value="Casa Premium">Casa Premium</option>
                <option value="Apartement Basic">Apartament Basic</option>
                <option value="Apartament Premium">Apartament Premium</option>
        </select>
                </div>
                <div class="mb-3">
                    <label>Mesaj</label>
                    <input type="text" name="message" value="{{ $contact->message }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Status</label><br/>
                    <input type="checkbox" name="status" value="{{ $contact->status == '1' ? 'Citit' : 'Necitit' }}"  />
                </div>
                 <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Actualizeaza</button>
                                </div>
            </form>
        </div>
    </div>
</div>

@endsection