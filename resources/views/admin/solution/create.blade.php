@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
    
    <div class="card">
        <div class="card-header">
            <h3>Adauga 
                <a href="{{ url('admin/solution') }}" class='btn btn-danger btn-sm text-white float-end'>Inapoi</a>
            </h3>
        </div>
        <div class="card-body">

            <form action="{{ url('admin/solution') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label>Nume</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Descriere</label>
                    <textarea name="description" class="form-control" rows="3" ></textarea>
                </div>
                <div class="mb-3">
                    <label>Imagine</label>
                    <input type="file" name="image" class="form-control" />
                 </div>
                <div class="mb-3">
                    <label>Beneficiu 1</label>
                    <input type="text" name="b1" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 2</label>
                    <input type="text" name="b2" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 3</label>
                    <input type="text" name="b3" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 4</label>
                    <input type="text" name="b4" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 5</label>
                    <input type="text" name="b5" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 6</label>
                    <input type="text" name="b6" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 7</label>
                    <input type="text" name="b7" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 8</label>
                    <input type="text" name="b8" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 9</label>
                    <input type="text" name="b9" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 10</label>
                    <input type="text" name="b10" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 11</label>
                    <input type="text" name="b11" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 12</label>
                    <input type="text" name="b12" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Beneficiu 13</label>
                    <input type="text" name="b13" class="form-control" />
                </div>
                <div class="mb-3">
                    <label>Status</label><br />
                    <input type="checkbox" name="status" />
                </div>
                 <div class="col-md-12 mb-3">
                <button type="submit" class="btn btn-primary float-end">Salveaza</button>
                </div>
            </form>
        </div>
</div>

@endsection