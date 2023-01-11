@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
            <h3>Adauga 
                <a href="{{ url('admin/gallery') }}" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">

            <form action="{{ url('admin/gallery') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb3">
                    <label>Solutie</label>
                        <select name="solution_id" class="form-control">
                            @foreach($solutions as $solution)
                                <option value="{{ $solution->id }}">{{ $solution->name }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label>Incarca fotografii</label>
                    <input type="file" name="image[]" multiple class="form-control" />
                 </div>
                 <div class="mb-3">
                    <label>Status</label><br />
                    <input type="checkbox" name="status"  style="width: 40px; height: 40px;"/>
                </div>
                 <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary float-end">Creaza!</button>
                </div>

            </form>

            {{-- <form action="{{ url('admin/gallery') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb3">
                    <label>Solutie</label>
                        <select name="solution_id" class="form-control">
                            @foreach($solutions as $solution)
                                <option value="{{ $solution->id }}">{{ $solution->name }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="mb-3">
                    <label>Incarca fotografii</label>
                    <input type="file" name="image[]" multiple class="form-control" />
                 </div>
                 <div class="mb-3">
                    <label>Status</label><br />
                    <input type="checkbox" name="status"  style="width: 40px; height: 40px;"/>
                </div>
                 <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary float-end">Creaza!</button>
                </div>
            </form> --}}
        </div>
    </div>
</div>

@endsection