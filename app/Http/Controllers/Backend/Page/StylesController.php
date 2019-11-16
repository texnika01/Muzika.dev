<?php

namespace App\Http\Controllers\Backend\Page;

use App\Models\Comments\CommentsEvents;
use App\Models\Pages\Genres;
use App\Models\Pages\Instrument;
use App\Models\Pages\Styles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class StylesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$style = Styles::get();
		return view('backend.style.index')->with('style',$style);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$style = Styles::where('id', '=', $id)->firstOrFail();
		$comment_event = CommentsEvents::get();
		return view('backend.style.show',compact('style','comment_event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$style = Styles::findOrFail($id);
		$genres = Genres::pluck('name', 'id');
		$instruments = Instrument::pluck('name', 'id');
		return view('backend.style.edit',compact('style','genres','instruments'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$event = Event::find($id);
		$event->delete();
		return redirect()->back()->withFlashSuccess(trans('pages.frontend.genres.success_delete'));
	}
}
