@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{$id->title}}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">
                        Text Edit <small class="text-muted"> {{ $id->name }}</small>
                    </h4>
                </div><!--col-->

            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        {!! Form::model($id,['route' => ['admin.text.update',$id->id], 'method' => 'put','files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                        {!! Form::hidden('user_id',Auth::user()->id) !!}
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
                            <!-- Slug Form Input -->
                            <div class="form-group {{ $errors->has('slug') ? ' has-error' : ''}}">
                                {{ Form::label('slug','Slug :') }}
                                {{ Form::text('slug', null ,['class'=> 'form-control']) }}
                                @if($errors->has('slug'))
                                    <span class="help-block">
                            {{$errors->first('slug')}}
                        </span>
                                @endif
                            </div>
                            <!-- Genres Form Input -->
                            <div class="form-group {{ $errors->has('genres_id') ? ' has-error' : ''}}">
                                {{ Form::label('genres_id',trans('navs.general.genres')) }}
                                {{ Form::select('genres_id[]',$tags ,null , ['id' => 'select', 'class'=> 'form-control m-t' , 'data-required' => 'true', 'multiple']) }}
                                @if($errors->has('genres_id'))
                                    <span class="help-block">
                            {{$errors->first('genres_id')}}
                        </span>
                                @endif
                            </div>
                            <!-- Upload Text Form Input -->
                            <div class="form-group {{ $errors->has('text_path') ? ' has-error' : ''}}">
                                {{ Form::label('text_path',trans('pages.frontend.texts.text_path')) }}
                                {{ Form::file('text_path',['class'=> 'form-control']) }}
                                @if($errors->has('text_path'))
                                    <span class="help-block">
                            {{$errors->first('text_path')}}
                        </span>
                                @endif
                            </div>
                            <!--  Text Form Input -->
                            <div class="form-group {{ $errors->has('text') ? ' has-error' : ''}}">
                                {{ Form::label('text',trans('pages.frontend.texts.text')) }}
                                {!!  Form::textarea('text', null ,['class' => 'form-control',
                                                    'style' => "overflow:hidden",
                                                    'id' => 'mytextarea',
                                                    'autofocus' => 'autofocus',
                                                    'placeholder' => 'Вашия текст тук .....']) !!}
                                @if($errors->has('text'))
                                    <span class="help-block">
                            {{$errors->first('text')}}
                        </span>
                                @endif
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>

                            <!-- button groupe -->
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submit" class="btn btn-default" href="{!! route('frontend.texts') !!}">{!!trans('buttons.general.cancel')!!}</button>
                                    <button type="submit" class="btn btn-primary">{!! trans('buttons.general.save') !!}</button>
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