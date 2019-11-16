<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Requests\Frontend\Page\EventsRequests;
use App\Models\Comments\CommentsEvents;
use App\Models\Pages\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$event = Event::get();
		return view('backend.events.index')->with('event', $event);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$event = Event::where('id', '=', $id)->firstOrFail();
		$comment_event = CommentsEvents::get();
		return view('backend.events.show',compact('event','comment_event'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$event = Event::findOrFail($id);
		return view('backend.events.edit',compact('event'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\EventsRequests  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(EventsRequests $request, $id)
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
		unlink('upload/event_pic/' . $event->pic_event);
		$event->delete();
		return redirect()->back()->withFlashSuccess(trans('pages.frontend.genres.success_delete'));
	}

	/**
	 * @param Event $id
	 */
	public function ban(Event $id)
	{
		$event = Event::find($id);
		$event->active(0);
		return redirect()->back()->withFlashSuccess(trans('pages.frontend.genres.success_delete'));
	}
}
