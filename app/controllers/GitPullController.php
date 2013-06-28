<?php

class GitPullController extends BaseController {
  public function pull($user, $pass) {
		$info = Config::get('git.info');

	  if (($user === $info['user']) and ($pass === $info['pass'])) {
			$result = `git pull`;

			dd($result);
	  } else {
			return App::abort(404, "Page not found.");
	  }
	}
}