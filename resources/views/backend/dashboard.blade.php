@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
          <div class="card-group mb-4">
            <!-- Count Events upload -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-globe"></i>
                    </div>
                    <div class="h4 mb-0">{{$events}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">{{ trans('strings.backend.general.see_all.event_uploaded')}}</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('admin.events')}}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End count events upload -->
            <!-- Count Songs upload -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-music-tone "></i>
                    </div>
                    <div class="h4 mb-0">{{$styles}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">{{ trans('strings.backend.general.see_all.stules_uploaded')}}</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('admin.style')}}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End Count Songs upload -->
            <!-- Count Songs upload -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-playlist "></i>
                    </div>
                    <div class="h4 mb-0">{{$songs}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">{{ trans('strings.backend.general.see_all.songs_uploaded')}}</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('admin.song')}}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End Count Songs upload -->
            <!-- Count text Upload -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-book-open "></i>
                    </div>
                    <div class="h4 mb-0">{{$text}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">{{ trans('strings.backend.general.see_all.text_uploaded')}}</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('admin.style')}}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End Count text Upload -->
            <!-- Count genres Upload -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-music-tone-alt "></i>
                    </div>
                    <div class="h4 mb-0">{{$genres}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">{{ trans('strings.backend.general.see_all.genres_uploaded')}}</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{route('admin.genres')}}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End Count genres Upload -->
            <!-- Count User register -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-people"></i>
                    </div>
                    <div class="h4 mb-0">{{$user}}</div>
                    <small class="text-muted text-uppercase font-weight-bold">{{ trans('strings.backend.general.see_all.user_register')}}</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="#">{!! trans('strings.backend.general.see_all.more_info') !!}  <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End Count User register -->
            <!-- Site Errors -->
            <div class="card">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="icon-info "></i>
                    </div>
                    <div class="h4 mb-0">12</div>
                    <small class="text-muted text-uppercase font-weight-bold">Sites Error</small>
                    <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                    </div>
                </div>
                <div class="card-footer px-3 py-2">
                    <a class="font-weight-bold font-xs btn-block text-muted" href="{{ route('log-viewer::logs.list') }}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
                </div>
            </div>
            <!-- End site Errors -->
        </div>
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-body">
                    {!! __('strings.backend.welcome') !!}
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
