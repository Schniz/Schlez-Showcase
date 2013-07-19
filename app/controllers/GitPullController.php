<?php

class GitPullController extends BaseController {
  public function pull($user, $pass) {
		$info = Config::get('git.info');

		// Checks if the user is the right user.
		// We do not want any intruders!
	  if (($user === $info['user']) and ($pass === $info['pass'])) {
			$result = `git pull`;

			echo $result;


			// Call the migration
			try {
				Artisan::call('migrate');
			} catch (Exception $e) {
				Log::error($e);
			}
	  } else {
			return App::abort(404, "Page not found.");
	  }
	}
}