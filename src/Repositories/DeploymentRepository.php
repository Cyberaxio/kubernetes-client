<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\DeploymentCollection;

class DeploymentRepository extends Repository
{
	protected $uri = 'deployments';

	protected function createCollection($response)
	{
		return new DeploymentCollection($response['items']);
	}
}
