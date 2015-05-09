<?php

namespace Urigen;

class Urigen
{
	public function __construct($target, $parameters)
	{
		$uri = $target . '?';

		$numKeys = count($parameters);
		$i = 0;

		foreach ($parameters as $key => $value)
		{
			$uri .= $key . '=';
			$uri .= urlencode($value);

			if (++$i < $numItems) {
				$uri .= '&';
			}

			return $uri;
		}
	}
}
