@extends('layouts.layout')
@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#3d9aeb">
                    <div class="text" style="color: white; text-align:center">
                        <h2>Tabungan</h2>
                    </div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/tabungan') }}">
                        {{ csrf_field() }}

                        <div class="text" style="text-align:center">
                            <h3>Masukan Saldo Anda :</h3>
                        </div>

                        <div class="form-group" style="margin-left:170px">
                            <div class="col-md-8">
                                <input id="saldo" type="text" class="form-control" name="saldo" required=""> 
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Simpan</button>

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