<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Frontend\Page\SongsRequests;
use App\Models\Comments\CommentsEvents;
use App\Models\Pages\Genres;
use App\Models\Pages\Songs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SongsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$song = Songs::get();
		return view('backend.song.index')->with('song',$song);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$song = Songs::where('id', '=', $id)->firstOrFail();
		$comment_event = CommentsEvents::get();
		return view('backend.song.show',compact('song','comment_event'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$song = Songs::findOrFail($id);
		$tags = Genres::pluck('name','id');
		$tags->all();
		return view('backend.song.edit', compact('tags','song',$tags,$song));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\SongsRequests  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(SongsRequests $request, $id)
	{
		$id->update($request->all());
		$id->ganres()->sync($request->input('genres_list'));
		return redirect()->route('frontend.songs');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$song = Songs::findOrFail($id);
		if ($song->image_path == 'no_image.jpg'){
			unlink('upload/songs/' . $song->song_path);
		}
		else{
			unlink('upload/pic_song/' . $song->image_path);
			unlink('upload/songs/' . $song->song_path);
		}
		$song->delete();
		return redirect()->back()->withFlashSuccess(trans('pages.frontend.genres.success_delete'));
	}

	/**
	 * @param Songs $id
	 */
	public function ban(Songs $id)
	{

	}
}
