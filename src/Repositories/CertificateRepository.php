<?php namespace Cyberaxio\Kubernetes\Repositories;

use Cyberaxio\Kubernetes\Collections\CertificateCollection;
use Cyberaxio\Kubernetes\Repositories\Strategy\PatchMergeTrait;

class CertificateRepository extends Repository
{
    use PatchMergeTrait;

    protected $uri = 'certificates';

    protected function createCollection($response)
    {
        return new CertificateCollection($response['items']);
    }

}
