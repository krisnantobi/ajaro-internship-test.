@extends('welcome')

@section('content')
<style type="text/css">
	button {
	    background-color: Transparent;
	    background-repeat:no-repeat;
	    border: none;
	    cursor:pointer;
	    overflow: hidden;
	    outline:none;
	}
	a{
		text-decoration: none;
	}
</style>
<div class="row">
	<div class="col-md-6">
		<h4>Data Barang</h4>
	</div>
	<div class="col-md-6">
		<a href="{{ route('items.create') }}" class="btn btn-success float-right">Tambah</a>
	</div>
</div>
<br>
<div class="col-md-12">
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">Kode</th>
	      <th scope="col">Nama</th>
	      <th scope="col">Harga</th>
	      <th scope="col" colspan="2" align="right">Aksi</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>
	    @foreach($items as $item)
		    <tr>
		      <th scope="row">{{$item->code_item}}</th>
		      <td>{{$item->name}}</td>
		      <td>{{number_format($item->price, 2)}}</td>
		      <td colspan="2">
		      	<a href="{{ route('items.edit',$item->id)}}" >Edit</a>
		      </td>
		      <td>
		      	<form action="{{ route('items.destroy', $item->id)}}" method="post">
                	{{ csrf_field() }}
                  	{!! method_field('DELETE') !!}
                  	<button type="submit">Delete</button>
                </form>
		      </td>
		    </tr>
	    @endforeach()
	  </tbody>
	</table>
</div>
@endsection()
