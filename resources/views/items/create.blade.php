@extends("welcome")

@section('content')
    <div class="col-md-12">
            <h4>Input Data Barang</h4>
            <form class="mt-5" method="post"  action="{{ route('items.store') }}">
              <div class="form-group row">
                {{ csrf_field() }}
                <label for="code_item" class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                  <input name="code_item" type="text" class="form-control" id="code_item" value="{{ old('code_item') }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="descrip" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea rows="5" name="descrip" type="text" class="form-control" id="descrip" value="">{{ old('descrip') }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                  <input name="stock" type="text" class="form-control" id="stock" value="{{ old('stock') }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="pride" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                  <input name="price" type="text" class="form-control" id="pride" value="{{ old('price') }}">
                </div>
              </div>
              <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-10">
                  <input name="weight" type="text" class="form-control" id="weight" value="{{ old('weight') }}">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <input name="submit" type="submit" class="btn btn-success ml-3 float-right" value="Tambah">
                  <a class="btn text-white btn-danger float-right" href="{{route('items.index')}}">Cancel</a>
                </div>
              </div>
              
            </form>
        </div>
@endsection()
