<?php

class GitPullController extends BaseController {
  public function pull() {
		$info = Config::get('git.info');

		$user = Request::header('php-auth-user');
		$pass = Request::header('php-auth-pw');

	  if (($user === $info['user']) and ($pass === $info['pass'])) {
		dd('yay');
	  } else {
		dd('nay');
	  }
	}
}