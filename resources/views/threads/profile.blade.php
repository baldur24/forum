@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
        <h2>Baldur Færseth <small>Meðlimur í 3 vikur</small></h2>
        <hr>
            <div class="panel panel-default col-md-9">
                <div class="panel-heading">
                @foreach ($controllerlinks as $controllerlink)
                    @foreach ($users as $user)
                        <h4>{{ $user->name }} published <a href="{{ $controllerlink['anchor'] }}">Laravel Controller</a></h4>
                    @endforeach
                @endforeach
                </div>
                <div class="panel-body">
                    Hvernig býr maður til controller í Laravel?
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4>Nafn</h4>
                    @foreach ($users as $user)
                        <h5>{{ $user->name }}</h5>
                    @endforeach
                    <h4>Netfang</h4>
                    @foreach ($users as $user)
                        <h5>{{ $user->email }}</h5>
                    @endforeach
                    <h4>Fjöldi þráða:14</h4>
                    </div>
                </div>
            </div>
            <div class="panel panel-default col-md-9">
                <div class="panel-heading">
                @foreach ($laravellinks as $laravellink)
                    @foreach ($users as $user)
                        <h4>{{ $user->name }} published <a href="{{ $laravellink['anchor'] }}">Laravel 5,5</a></h4>
                    @endforeach
                @endforeach
                </div>
                <div class="panel-body">
                    Hver er munurinn á Laravel útgáfu 5,4 og 5,5?
                </div>
            </div>
        </div>
    </div>
</div>
@endsection











