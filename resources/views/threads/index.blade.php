@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>
                        <div class="panel-body">
                        @foreach ($threads as $thread)
                            <h3>
                            <a href="/threads/{{ $thread->id }}">{{ $thread->title }}</a>
                            </h3>
                        <div class='body'>
                            {{ $thread->body }}
                        <hr>
                        @endforeach
                        </div>
                        </div>                            
                </div>                        
            </div>         
        </div>
    </div>
</div>
@endsection