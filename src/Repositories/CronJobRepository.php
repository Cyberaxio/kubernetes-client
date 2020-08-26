<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\CronJobCollection;

class CronJobRepository extends Repository
{
	protected $uri = 'cronjobs';

	protected function createCollection($response)
	{
		return new CronJobCollection($response['items']);
	}
}
