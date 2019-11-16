<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Frontend\Page\TextsRequests;
use App\Models\Comments\CommentsEvents;
use App\Models\Pages\Genres;
use App\Models\Pages\Texts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TextsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$text = Texts::get();
		return view('backend.text.index')->with('text',$text);
	}

	/**
	 * @param $id
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function show($id)
	{
		$text = Texts::where('id', '=', $id)->firstOrFail();
		$comment_event = CommentsEvents::get();
		return view('backend.text.show',compact('text','comment_event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Texts $id)
	{
		$tags = Genres::pluck('name','id');
		return view('backend.text.edit',compact('id','tags'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\TextsRequests  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(TextsRequests $request, $id)
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
		$text = Texts::findOrFail($id);
		if (!empty($text->text_path)){
			unlink('upload/texts/' . $text->text_path);
			$text->delete();
		}else{
			$text->delete();
		}
		return redirect()->back()->withFlashSuccess(trans('pages.frontend.genres.success_delete'));
	}
	/**
	 * @param Texts $id
	 */
	public function ban(Texts $id)
	{

	}
}
