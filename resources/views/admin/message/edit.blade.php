@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Modifica aceast mesaj
                <a href="{{ url('admin/message') }}" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/message/'.$message->id) }}"  method="POST" enctype="multiplart/form-data">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="{{ $message->name }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <input type="text" name="description" value="{{ $message->description }}" class="form-control" />
                </div>
                 <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Actualizeaza</button>
                                </div>
            </form>
        </div>
    </div>
</div>

@endsection