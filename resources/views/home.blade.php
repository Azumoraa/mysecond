@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-2">
    <a href="{{url('/information')}}">Information entry</a>

</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
