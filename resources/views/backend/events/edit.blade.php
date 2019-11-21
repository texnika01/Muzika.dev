@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{$event->title}}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">
                        Events Edit <small class="text-muted"> {{ $event->title }}</small>
                    </h4>
                </div><!--col-->

            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                    {{Form::model($event,['route' => ['admin.event.update', $event->id ],'method' => 'PUT'] )}}
                    <!-- Temporary -->
                        {!! Form::hidden('user_id',Auth::user()->id) !!}
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <!-- Title Form Input -->
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : ''}}">
                            {{ Form::label('title',trans('navs.general.events')) }}
                            {{ Form::text('title', null ,['class'=> 'form-control']) }}
                            @if($errors->has('title'))
                                <span class="help-block">
                        {{$errors->first('title')}}
                    </span>
                            @endif
                        </div>
                        <!-- Slug Form Input -->
                        <div class="form-group {{ $errors->has('slug') ? ' has-error' : ''}}">
                            {{ Form::label('slug',trans('pages.frontend.slug')) }}
                            {{ Form::text('slug', null ,['class'=> 'form-control']) }}
                            @if($errors->has('slug'))
                                <span class="help-block">
                        {{$errors->first('slug')}}
                    </span>
                            @endif
                        </div>
                        <!-- Date Form Input -->
                        <div class="form-group">
                            {{ Form::label('date','Date Event:') }}
                            {{ Form::input('date', 'date_event',date('Y-m-d') ,['class'=> 'form-control']) }}
                        </div>
                        <!-- Pic_event Form Input -->
                        <div class="form-group {{ $errors->has('pic_event') ? ' has-error' : ''}}">
                            {{ Form::label('pic_event',trans('pages.frontend.events.pic_event')) }}
                            {{ Form::file('pic_event',['class'=> 'form-control']) }}
                            @if($errors->has('pic_event'))
                                <span class="help-block">
                        {{$errors->first('pic_event')}}
                    </span>
                            @endif
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <!-- Body Form Input -->
                        <div class="form-group {{ $errors->has('body') ? ' has-error': ''}}">
                            {{ Form::label('description',trans('pages.frontend.description')) }}
                            {{ Form::textarea('body', null ,['class' => 'form-control',
                                            'style' => "overflow:hidden",
                                            'id' => 'mytextarea',
                                            'autofocus' => 'autofocus',
                                            'placeholder' => 'Вашия текст тук .....']) }}
                            @if($errors->has('body'))
                                <span class="help-block">{{$errors->first('body')}}</span>
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