<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\EndpointCollection;

class EndpointRepository extends Repository
{
	protected $uri = 'endpoints';

	protected function createCollection($response)
	{
		return new EndpointCollection($response['items']);
	}
}
