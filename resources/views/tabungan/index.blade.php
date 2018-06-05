@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12"> 
		  <div class="form-group-inline">
		        <a href="" class="btn btn-primary">Tambah Saldo <i class="fa fa-plus"></i></a>
		  		<a href="/tabungan "class="btn btn-danger" href="">Kembali</a>
		  </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Saldo</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          	@foreach($tabungan as $b);
            <tr>
            	<td><?=$no++?></td>
            	<td><?=$b->nama?></td>
              <td><?=$b->saldo?></td>
              	<td>
	                <a href="" class="btn btn-info btn-sm" style="float:left;">Update</a>
	                <form action="" method="post">
	                  {{ csrf_field() }}
	                  <input type="hidden" name="_method" value="DELETE">
	                  <button type="submit" class="btn btn-info btn-sm" style="margin-left:3px;">Delete</button>
	                </form>
	            </td>
             </tr>
        	 @endforeach;
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection