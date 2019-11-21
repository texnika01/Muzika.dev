@extends('backend.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Genres Management <small class="text-muted"> Genres</small>
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
                                <th>{!! trans('pages.backend.tables.table_user_id') !!}</th>
                                <th>{!! trans('pages.backend.tables.table_actions') !!}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($genres as $genreses)
                                <tr>
                                    <td>{{$genreses->id}}</td>
                                    <td>{{$genreses->name}}</td>
                                    <td>{{$genreses->description}}</td>
                                    <td>{{$genreses->users->name}}</td>
                                    <td>
                                        <a href="{{route('admin.genres.edit',$genreses->id)}}" type="button" class="btn btn-warning btn-xs">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-xs">
                                            <i class="fa  fa-power-off"></i>
                                        </button>
                                        <a href="{{route('admin.genres.destroy',$genreses->id)}}" type="button" class="btn btn-danger btn-xs">
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
                                <th>{!! trans('pages.backend.tables.table_user_id') !!}</th>
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
                        <h5><span class="badge badge-pill badge-secondary">total genres : {{$genres->count()}}</span></h5>
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection