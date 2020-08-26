<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\HorizontalPodAutoscalerCollection;

class HorizontalPodAutoscalerRepository extends Repository
{
	protected $uri = 'horizontalpodautoscalers';

	protected function createCollection($response)
	{
		return new HorizontalPodAutoscalerCollection($response['items']);
	}
}
