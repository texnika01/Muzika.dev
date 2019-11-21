@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{$style->name}}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">
                        Style Edit <small class="text-muted"> {{ $style->name }}</small>
                    </h4>
                </div><!--col-->

            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        {{Form::model($style,['route' => ['admin.style.update', $style->id ],'method' => 'PUT'] )}}
                        <!-- Temporary -->
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
                                {{ Form::label('genres_id',trans('navs.general.style')) }}
                                {{ Form::select('genres_id[]',$genres ,null , ['id' => 'select', 'class'=> 'form-control m-t' , 'data-required' => 'true', 'multiple']) }}
                                @if($errors->has('genres_id'))
                                    <span class="help-block">
                            {{$errors->first('genres_id')}}
                        </span>
                                @endif
                            </div>
                            <!-- Instrument Form Input -->
                            <div class="form-group {{ $errors->has('instruments_id') ? ' has-error' : ''}}">
                                {{ Form::label('instruments_id',trans('pages.frontend.styles.style_from')) }}
                                {{ Form::select('instruments_id[]',$instruments,null , ['id' => 'select', 'class'=> 'form-control m-t' , 'data-required' => 'true', 'multiple']) }}
                                @if($errors->has('instruments_id'))
                                    <span class="help-block">
                            {{$errors->first('instruments_id')}}
                        </span>
                                @endif
                            </div>
                            <!-- Styles Form Input -->
                            <div class="form-group {{ $errors->has('styles_path') ? ' has-error' : ''}}">
                                {{ Form::label('styles_path',trans('pages.frontend.styles.style_folder')) }}
                                {{ Form::file('styles_path',['class'=> 'form-control']) }}
                                @if($errors->has('styles_path'))
                                    <span class="help-block">
                            {{$errors->first('styles_path')}}
                        </span>
                                @endif
                            </div>

                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <!-- button groupe -->
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submit" class="btn btn-default" href="{!! route('frontend.genres.create') !!}">{!! trans('buttons.general.cancel') !!}</button>
                                    <button type="submit" class="btn btn-primary">{!! trans('buttons.general.save') !!}</button>
                                </div>
                            </div>
                            <!-- end button groupe -->
                            {{Form::close()}}
                        </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection