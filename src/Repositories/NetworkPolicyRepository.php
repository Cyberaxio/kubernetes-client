<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\NetworkPolicyCollection;

class NetworkPolicyRepository extends Repository
{
	protected $uri = 'networkpolicies';

	protected function createCollection($response)
	{
		return new NetworkPolicyCollection($response['items']);
	}
}
