@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
            <h3>Modifica aceasta galerie
                <a href="{{ url('admin/gallery') }}" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/gallery/'.$gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
                @method('PUT')
                <div class="mb3">
                    <label>Solutie</label>
                        <select name="solution_id" class="form-control">
                            @foreach($solutions as $solution)
                                <option value="{{ $solution->id }}" {{ $solution->id == $gallery->solution_id  ? 'selected' : ''}}>
                                {{ $solution->name }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="{{ $gallery->name }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="4">{{ $gallery->description }}</textarea>
                </div>
                <div class="mb-3">
                        <label>Incarca Imagini</label>  
                        <input type="file" name="image[]" multiple class="form-control"/> 
                </div>
                <div>
                    @if($gallery->galleryImages)
                        <div class="row">
                            @foreach($gallery->galleryImages as $image)
                            <div class="col-md-2">
                                <img src="{{ asset($image->image) }}" style="width: 80px;height: 80px"
                                    class="me-4 border" alt="Img">
                                <a href="{{ url('admin/gallery-image/'.$image->id.'/delete') }}" class="d-block">Sterge </a>
                            </div>
                            @endforeach
                        </div>
                    @else
                        <h5>Nu exista imagini incarcate!</h5>
                    @endif
                </div>
            {{-- </form> --}}
                 <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary float-end">Actualizeaza</button>
                 </div>
            </form>
        </div>
    </div>
</div>

@endsection