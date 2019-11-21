@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Styles Management <small class="text-muted"> Style</small>
                    </h4>
                </div><!--col-->
                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <a href="#" class="btn btn-success ml-1" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i></a>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>{!! trans('pages.backend.tables.table_id') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_name') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_description') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_slug') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_style_for') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_genres') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_path') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_user_id') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_activ') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_actions') !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($style as $styles)
                                <tr>
                                    <td>{{$styles->id}}</td>
                                    <td>{{$styles->name}}</td>
                                    <td>{{$styles->description}}</td>
                                    <td>{{$styles->slug}}</td>
                                    <td>
                                        @foreach($styles->instruments as $instrument)
                                            \{{ $instrument->name}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($styles->ganres as $tags)
                                            {{$tags->name}}
                                        @endforeach
                                    </td>
                                    <td>
                                        {{$styles->styles_path}}
                                    </td>
                                    <td>{{$styles->user->name}}</td>
                                    <td>
                                        @if($styles->active == 1)
                                            <button type="button" class="btn btn-success btn-xs">
                                                {!! trans('strings.backend.general.status.active') !!}
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-danger btn-xs">
                                                {!! trans('strings.backend.general.status.deactive') !!}
                                            </button>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin.style.edit',$styles->id)}}" type="button" class="btn btn-warning btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-xs">
                                            <i class="fa  fa-power-off"></i>
                                        </button>
                                        <a href="{{route('admin.style.destroy',$styles->id)}}" type="button" class="btn btn-danger btn-xs">
                                            <i class="fa  fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>{!! trans('strings.frontend.db.empty_table') !!}</td>
                                </tr>

                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>{!! trans('pages.backend.tables.table_id') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_name') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_description') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_slug') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_style_for') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_genres') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_path') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_user_id') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_activ') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_actions') !!}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        <h5><span class="badge badge-pill badge-secondary">total styles : {{$style->count()}}</span></h5>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection