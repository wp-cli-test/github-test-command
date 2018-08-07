<?php namespace WP_CLI_Test\GitHubTestCommand;

class GitHubTestCommand {

	/**
	 * Generate a version string to test against.
	 *
	 * @command github-test-command
	 * @when before_wp_load
	 */
	public function __invoke() {
		\WP_CLI::success( 'Version C.' );
	}
}
