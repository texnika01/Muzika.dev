@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            edit Genres  {{$genres->name}}
        </div>
    </section>
@endsection