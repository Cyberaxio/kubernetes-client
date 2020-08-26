<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\JobCollection;

class JobRepository extends Repository
{
	protected $uri = 'jobs';

	protected function createCollection($response)
	{
		return new JobCollection($response['items']);
	}
}
