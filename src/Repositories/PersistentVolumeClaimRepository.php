<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\PersistentVolumeClaimCollection;

class PersistentVolumeClaimRepository extends Repository
{
	protected $uri = 'persistentvolumeclaims';

	protected function createCollection($response)
	{
		return new PersistentVolumeClaimCollection($response['items']);
	}
}
