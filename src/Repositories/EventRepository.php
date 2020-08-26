<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\EventCollection;

class EventRepository extends Repository
{
	protected $uri = 'events';

	protected function createCollection($response)
	{
		return new EventCollection($response['items']);
	}
}
