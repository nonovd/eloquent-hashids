<?php

namespace Mtvs\EloquentHashids;

trait HashidRouting
{
	/**
	 * @see parent
	 */
	public function resolveRouteBinding($value, $field = null)
	{
		return $this->findByHashid($value);
	}

	/**
	 * @see parent
	 */
	public function getRouteKey()
	{
		return $this->hashid();
	}

	/**
	 * @see parent
	 */
	public function getRouteKeyName()
	{
		return null;
	}
}