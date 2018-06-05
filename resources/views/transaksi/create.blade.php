@extends('layouts.layout')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3d9aeb">
                    <div class="text" style="color: white; text-align:center">
                        <h2>Transaksi</h2>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label  class="col-md-4 control-label">nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" required="" placeholder"">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Nomor Rekenig</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Tujuan Rekening</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Jumlah</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required=""> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Tanggal Transaksi</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required=""> 
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>

                                <a href="/register"class="btn btn-danger" href="">Batalkan</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection