<?php

class GitPullController extends BaseController {
  public function pull($user, $pass) {
		$info = Config::get('git.info');

	  if (($user === $info['user']) and ($pass === $info['pass'])) {
			dd('yay');
	  } else {
			dd('nay');
	  }
	}
}