@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif



                    Tu esi ielogojies kā <strong>ADMIN</strong>
                <a href="/albums/create" class="btn btn-primary">Izveido albumu</a>
                  


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
