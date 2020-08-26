<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\ConfigMapCollection;

class ConfigMapRepository extends Repository
{
	protected $uri = 'configmaps';

	protected function createCollection($response)
	{
		return new ConfigMapCollection($response['items']);
	}
}
