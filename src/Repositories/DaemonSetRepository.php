<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\DaemonSetCollection;

class DaemonSetRepository extends Repository
{
	protected $uri = 'daemonsets';

	protected function createCollection($response)
	{
		return new DaemonSetCollection($response['items']);
	}
}
