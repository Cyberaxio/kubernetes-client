<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\ServiceCollection;

class ServiceRepository extends Repository
{
	protected $uri = 'services';

	protected function createCollection($response)
	{
		return new ServiceCollection($response['items']);
	}
}
