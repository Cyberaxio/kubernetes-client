<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\ReplicationControllerCollection;

class ReplicationControllerRepository extends Repository
{
	protected $uri = 'replicationcontrollers';

	protected function createCollection($response)
	{
		return new ReplicationControllerCollection($response['items']);
	}
}
