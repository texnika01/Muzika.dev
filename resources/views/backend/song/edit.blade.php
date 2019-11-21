@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="card-title mb-0">
                        Song Edit <small class="text-muted"> {{ $song->title }}</small>
                    </h4>
                </div><!--col-->

            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        {!! Form::model($song,['route' => ['admin.song.update',$song->id], 'method' => 'put','files'=>'true', 'enctype'=>"multipart/form-data"]) !!}
                        {!! Form::hidden('user_id',Auth::user()->id) !!}

                        <!-- Artist Form Input -->
                            <div class="form-group {{ $errors->has('song_artist') ? ' has-error': ''}}">
                                {{ Form::label('song_artist',trans('pages.frontend.artist')) }}
                                {{ Form::text('song_artist', null ,['class'=> 'form-control']) }}
                                @if($errors->has('song_artist'))
                                    <span class="help-block">{{$errors->first('song_artist')}}</span>
                                @endif
                            </div>
                            <!-- Song_name Form Input -->
                            <div class="form-group {{ $errors->has('song_name') ? ' has-error': ''}}">
                                {{ Form::label('song_name',trans('pages.frontend.songs.song_name')) }}
                                {{ Form::text('song_name', null ,['class'=> 'form-control']) }}
                                @if($errors->has('song_name'))
                                    <span class="help-block">{{$errors->first('song_name')}}</span>
                                @endif
                            </div>
                            <!-- Slug Form Input -->
                            <div class="form-group {{ $errors->has('slug') ? ' has-error': ''}}">
                                {{ Form::label('slug',trans('pages.frontend.slug')) }}
                                {{ Form::text('slug', null ,['class'=> 'form-control']) }}
                                @if($errors->has('slug'))
                                    <span class="help-block">{{$errors->first('slug')}}</span>
                                @endif
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <!-- Tag_list Form Input -->
                            <div class="form-group {{ $errors->has('genres_list') ? ' has-error': ''}}">
                                {{ Form::label('genres_list',trans('pages.frontend.songs.tag')) }}
                                {{ Form::select('genres_list[]',$tags ,null , ['id' => 'select', 'class'=> 'form-control m-t' , 'data-required' => 'true', 'multiple']) }}
                                @if($errors->has('genres_list'))
                                    <span class="help-block">{{$errors->first('genres_list')}}</span>
                                @endif
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>
                            <!-- Pic_album Form Input -->
                            <div class="form-group {{ $errors->has('image_path') ? ' has-error': ''}}">
                                {{ Form::label('image_path',trans('pages.frontend.songs.pic_song')) }}
                                {{ Form::file('image_path', null ,['class'=> 'filestyle','data-icon'=>'false','data-classButton' => 'btn btn-default','data-classInput' => 'form-control inline v-middle input-s']) }}
                                @if($errors->has('image_path'))
                                    <span class="help-block">{{$errors->first('image_path')}}</span>
                                @endif
                            </div>
                            <!-- Song_path Form Input -->
                            <div class="form-group {{ $errors->has('song_path') ? ' has-error': ''}}">
                                {{ Form::label('song_path',trans('pages.frontend.songs.song_path')) }}
                                {{ Form::file('song_path', null ,['class'=> 'filestyle','data-icon'=>'false','data-classButton' => 'btn btn-default','data-classInput' => 'form-control inline v-middle input-s']) }}
                                @if($errors->has('song_path'))
                                    <span class="help-block">{{$errors->first('song_path')}}</span>
                                @endif
                            </div>
                            <div class="line line-dashed b-b line-lg pull-in"></div>


                            <!-- button groupe -->
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button type="submit" class="btn btn-default" href="{{route('frontend.songs')}}">{!! trans('buttons.general.cancel') !!}</button>
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