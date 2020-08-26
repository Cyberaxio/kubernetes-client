<?php namespace Cyberaxio\Kubernetes\Collections;

use Cyberaxio\Kubernetes\Models\PersistentVolume;
use Cyberaxio\Kubernetes\Collections\Collection;

class PersistentVolumeCollection extends Collection
{
	/**
	 * The constructor.
	 *
	 * @param array $items
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getPersistentVolumes($items));
	}

	/**
	 * Get an array of persistent volumes.
	 *
	 * @param  array $items
	 * @return array
	 */
	protected function getPersistentVolumes(array $items)
	{
		foreach ($items as &$item) {
			if ($item instanceof PersistentVolume) {
				continue;
			}
			
			$item = new PersistentVolume($item);
		}

		return $items;
	}
}
