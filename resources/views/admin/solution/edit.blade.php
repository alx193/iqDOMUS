@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
            <h3>Actualizeaza solutia 
                <a href="{{ url('admin/solution') }}" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">

            <form action="{{ url('admin/solution/'.$solution->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" value="{{ $solution->name }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="3" >{{ $solution->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Imagine</label>
                    <input type="file" name="image" class="form-control" />
                    <img src="{{ asset('/uploads/solution/'.$solution->image) }}" width="60px" height="60px"/>
                 </div>
                <div class="mb-3">
                    <label>Beneficiu 1</label>
                    <input type="text" name="b1" value="{{ $solution->b1 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 2</label>
                    <input type="text" name="b2" value="{{ $solution->b2 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 3</label>
                    <input type="text" name="b3" value="{{ $solution->b3 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 4</label>
                    <input type="text" name="b4" value="{{ $solution->b4 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 5</label>
                    <input type="text" name="b5" value="{{ $solution->b5 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 6</label>
                    <input type="text" name="b6" value="{{ $solution->b6 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 7</label>
                    <input type="text" name="b7" value="{{ $solution->b7 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 8</label>
                    <input type="text" name="b8" value="{{ $solution->b8 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 9</label>
                    <input type="text" name="b9" value="{{ $solution->b9 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 10</label>
                    <input type="text" name="b10" value="{{ $solution->b10 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 11</label>
                    <input type="text" name="b11" value="{{ $solution->b11 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 12</label>
                    <input type="text" name="b12" value="{{ $solution->b12 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 13</label>
                    <input type="text" name="b13" value="{{ $solution->b13 }}" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Status</label><br />
                    <input type="checkbox" name="status" value="{{ $solution->status == '1' ? 'checked':'null' }}" />
                </div>
                 <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary float-end">Actualizeaza!</button>
                </div>
            </form>
        </div>
</div>

@endsection