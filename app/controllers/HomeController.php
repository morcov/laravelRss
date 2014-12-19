<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index() {
		$contentLink = array(
			'http://news.liga.net/politics/rss.xml',
			'http://news.liga.net/economics/rss.xml',
			'http://news.liga.net/photo/rss.xml',
			'http://news.liga.net/photo/rss.xml',
		);
		$array = [];
		foreach($contentLink as $link){
			$content = file_get_contents($link);
			$flux = new SimpleXmlElement($content);
			$array[] = $flux->channel;
		}

		return View::make('home.home')->with('flux', $array);
	}
}

/*
//			foreach($flux->channel->item as $item){
//				$array[] = $item;
//			}

//		uasort($array, function($a, $b){
//			if ($a['pubDate'] === $b['pubDate']) return 0;
//
//			return $a['pubDate'] < $b['pubDate'] ? 1 : -1;
//		});
 * */
