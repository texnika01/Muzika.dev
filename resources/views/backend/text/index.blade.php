@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Text Management <small class="text-muted"> Text</small>
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
                                <th>{!! trans('pages.backend.tables.table_path') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_text') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_genres') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_user_id') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_activ') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_actions') !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($text as $texts)
                                <tr>
                                    <td>{{$texts->id}}</td>
                                    <td>{{$texts->name}}</td>
                                    <td>{{$texts->description}}</td>
                                    <td>{{$texts->slug}}</td>
                                    <td>{{$texts->text_path}}</td>
                                    <td>{{$texts->text}}</td>
                                    <td>
                                        @foreach($texts->ganres as $tag )
                                            {{$tag->name}},
                                        @endforeach
                                    </td>
                                    <td>{{$texts->user->name}}</td>
                                    <td>
                                        @if($texts->active == 1)
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
                                        <a type="submit" href="{{route('admin.text.edit',$texts->id)}}" class="btn btn-warning btn-xs">
                                            <i class="fa fa fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-xs">
                                            <i class="fa  fa-power-off"></i>
                                        </button>
                                        <a href="{{route('admin.text.destroy',$texts->id)}}" type="button" class="btn btn-danger btn-xs">
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
                                <th>{!! trans('pages.backend.tables.table_path') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_text') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_genres') !!}</th>
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
                        <h5><span class="badge badge-pill badge-secondary">total styles : {{$text->count()}}</span></h5>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection