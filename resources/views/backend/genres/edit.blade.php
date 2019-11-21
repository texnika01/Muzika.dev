@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">
                        Genres Edit <small class="text-muted"> {{ $genres->name }}</small>
                    </h4>
                </div><!--col-->

            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        {!! Form::model($genres,['route' => ['frontend.genres.update', $genres->id ],'method' => 'PUT'] ) !!}

                        {!! Form::hidden('created_by',Auth::user()->id) !!}
                        <div class="line line-dashed b-b line-lg pull-in"></div>

                        <!-- Name Form Input -->
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : ''}}">
                            {{ Form::label('name',trans('pages.frontend.name')) }}
                            {{ Form::text('name', null ,['class'=> 'form-control']) }}
                            @if($errors->has('name'))
                                <span class="help-block">
                            {{$errors->first('name')}}
                        </span>
                            @endif
                        </div>
                        <!-- Description Form Input -->
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : ''}}">
                            {{ Form::label('description',trans('pages.frontend.description')) }}
                            {{ Form::text('description', null ,['class'=> 'form-control']) }}
                            @if($errors->has('description'))
                                <span class="help-block">
                            {{$errors->first('description')}}
                        </span>
                            @endif
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>


                        <!-- button groupe -->
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button type="submit" class="btn btn-default" href="#">Cancel</button>
                                {{ Form::submit('Запази', ['class'=> 'btn btn-primary']) }}
                            </div>
                        </div>
                        <!-- end button groupe -->
                        {!! Form::close() !!}
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection