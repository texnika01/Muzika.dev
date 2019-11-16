<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Frontend\Page\GenresRequests;
use App\Models\Comments\CommentsEvents;
use App\Models\Pages\Genres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class GenresController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$genres = Genres::get();
		return view('backend.genres.index')->with('genres' , $genres);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$genres = Genres::where('id', '=', $id)->firstOrFail();
		$comment_event = CommentsEvents::get();
		return view('backend.genres.show',compact('genres','comment_event'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$genres = Genres::findOrFail($id);
		return view('backend.genres.edit',compact('genres'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(GenresRequests $request, $id)
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
		$style = Genres::findOrFail($id);
		$style->delete();
		return redirect()->back()->withFlashSuccess(trans('pages.frontend.genres.success_delete'));
	}

	/**
	 * @param Genres $id
	 */
	public function ban(Genres $id)
	{

	}
}
