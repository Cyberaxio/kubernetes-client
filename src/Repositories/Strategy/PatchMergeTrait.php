<?php namespace Cyberaxio\Kubernetes\Repositories\Strategy;

use Cyberaxio\Kubernetes\Models\Model;

trait PatchMergeTrait {

    public function patch(Model $model)
    {
        $this->client->setPatchType("merge");

        $result = parent::patch($model);

        // Reverting default patch type
        $this->client->setPatchType();

        return $result;
    }

}
