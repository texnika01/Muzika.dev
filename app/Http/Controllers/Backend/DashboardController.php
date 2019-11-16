<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Pages\Event;
use App\Models\Pages\Genres;
use App\Models\Pages\Songs;
use App\Models\Pages\Styles;
use App\Models\Pages\Texts;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $songs = Songs::count();
		$text = Texts::count();
		$styles = Styles::count();
		$genres = Genres::count();
		$events = Event::count();
		$user = User::count();

        return view('backend.dashboard', compact('songs','text','styles','genres','events','user'));
    }
}
