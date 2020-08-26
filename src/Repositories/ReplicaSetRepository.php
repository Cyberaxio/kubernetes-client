<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\ReplicaSetCollection;

class ReplicaSetRepository extends Repository
{
	protected $uri = 'replicasets';

	protected function createCollection($response)
	{
		return new ReplicaSetCollection($response['items']);
	}
}
