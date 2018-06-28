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

                    <p>Skatīt saņemtās vēstules</p>
                <a  href="/messages" class="btn btn-primary">Messages</a>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
