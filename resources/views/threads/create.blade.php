@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel panel-default">
                  <div class="panel-heading">Create a New Thread</div>
                  <div class="panel-body">
                        Title:
                    <div class="input">
                      <span class="input" id="basic-addon1"></span>
                      <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
                    </div>
                        <br></br>
                        Body:
                        <br></br>
                        <textarea rows="10" cols="95">
                        </textarea>
                        <button class="btn btn-primary" type="button">
                          Publish
                        </button>
                        @foreach ($countries as $country)
                              @if ($country === 'Ísland')
                                  <h1>{{ $country }}</h1>
                              @else
                                  <h3>{{ $country }}</h3>
                              @endif
                        @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection