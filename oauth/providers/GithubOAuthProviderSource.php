<?php

/**
 * Craft OAuth by Dukt
 *
 * @package   Craft OAuth
 * @author    Benjamin David
 * @copyright Copyright (c) 2013, Dukt
 * @license   http://dukt.net/craft/oauth/docs/license
 * @link      http://dukt.net/craft/oauth/
 */

namespace OAuthProviderSources;

class GithubOAuthProviderSource extends BaseOAuthProviderSource {

	public $consoleUrl = 'https://github.com/settings/applications/';

	public function getName()
	{
		return 'GitHub';
	}
}