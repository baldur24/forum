@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $thread->title }}</div>
                <div class="panel-body">
                    {{ $thread->body }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <form method="POST" action="/threads/{{ $thread->id }}/comment">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea type="text" name="body" class="form-control" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Comment</button>
                    </div>
                </form>
                </div>             
            </div>
        </div>
    </div>
</div>

@endsection