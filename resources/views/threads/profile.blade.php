@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h2>Baldur Færseth <small>Meðlimur í 3 vikur</small></h2>
        <hr>
            <div class="panel panel-default">
                <div class="panel-heading">
                @foreach ($links as $link)
                    @foreach ($users as $user)
                        <h4>{{ $user->name }} published <a href="{{ $link['anchor'] }}">Laravel Controller</a></h4>
                    @endforeach
                @endforeach
                </div>
                <div class="panel-body">
                    Hvernig býr maður til controller í Laravel?
                </div>
            </div>
        </div>
    </div>
</div>
@endsection







