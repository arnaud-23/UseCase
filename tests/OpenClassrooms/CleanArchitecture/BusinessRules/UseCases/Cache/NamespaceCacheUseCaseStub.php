<?php

namespace OpenClassrooms\Tests\CleanArchitecture\BusinessRules\UseCases\Cache;

use OpenClassrooms\CleanArchitecture\BusinessRules\Requestors\UseCaseRequest;
use OpenClassrooms\Tests\CleanArchitecture\BusinessRules\Requestors\UseCaseRequestStub;
use OpenClassrooms\Tests\CleanArchitecture\BusinessRules\UseCases\UseCaseStub;
use OpenClassrooms\CleanArchitecture\Application\Annotations\Cache;

/**
 * @author Romain Kuzniak <romain.kuzniak@openclassrooms.com>
 */
class NamespaceCacheUseCaseStub extends UseCaseStub
{
    const NAMESPACE_PREFIX = 'namespace_prefix';

    const NAMESPACE_ATTRIBUTE = UseCaseRequestStub::FIELD_VALUE;

    /**
     * @Cache (namespacePrefix = "namespace_prefix", namespaceAttribute= "field")
     */
    public function execute(UseCaseRequest $useCaseRequest)
    {
        return parent::execute($useCaseRequest);
    }
}