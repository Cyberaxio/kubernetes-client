<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\IssuerCollection;
use Cyberaxio\Kubernetes\Repositories\Strategy\PatchMergeTrait;

class IssuerRepository extends Repository
{
    use PatchMergeTrait;

    protected $uri = 'issuers';

    protected function createCollection($response)
    {
        return new IssuerCollection($response['items']);
    }

}
