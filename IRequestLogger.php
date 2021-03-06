<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008, 2012 Filip Procházka (filip.prochazka@kdyby.org)
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Kdyby\Extension\Curl;

use Kdyby;
use Nette;



/**
 * @author Filip Procházka <filip.prochazka@kdyby.org>
 */
interface IRequestLogger
{

	/**
	 * @param \Kdyby\Extension\Curl\Request $request
	 * @return string the id to pass to response
	 */
	function request(Request $request);


	/**
	 * @param \Kdyby\Extension\Curl\Response $response
	 * @param string $id
	 */
	function response(Response $response, $id);

}
