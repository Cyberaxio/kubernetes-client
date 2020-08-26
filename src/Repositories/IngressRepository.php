<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\IngressCollection;

class IngressRepository extends Repository
{
	protected $uri = 'ingresses';

	protected function createCollection($response)
	{
		return new IngressCollection($response['items']);
	}
}
