<?php

namespace OpenClassrooms\CleanArchitecture\BusinessRules\Proxies\Strategies\Cache\DTO;

use
    OpenClassrooms\CleanArchitecture\BusinessRules\Proxies\Requestors\Cache\CacheProxyStrategyRequest;
use
    OpenClassrooms\CleanArchitecture\BusinessRules\Proxies\Requestors\Cache\CacheProxyStrategyRequestBuilder;
use
    OpenClassrooms\CleanArchitecture\BusinessRules\Proxies\Requestors\Cache\Exceptions\CacheIdMustBeSetException;

/**
 * @author Romain Kuzniak <romain.kuzniak@openclassrooms.com>
 */
class CacheProxyStrategyRequestBuilderImpl implements CacheProxyStrategyRequestBuilder
{
    /**
     * @var CacheProxyStrategyRequestDTO
     */
    private $request;

    public function __construct()
    {
        $this->request = new CacheProxyStrategyRequestDTO();
    }

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withId($id)
    {
        $this->request->id = $id;

        return $this;
    }

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withData($data)
    {
        $this->request->data = $data;

        return $this;
    }

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withNamespaceId($namespaceId)
    {
        $this->request->namespaceId = $namespaceId;

        return $this;
    }

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withLifeTime($lifeTime)
    {
        $this->request->lifeTime = $lifeTime;

        return $this;
    }

    /**
     * @return CacheProxyStrategyRequest
     * @throws CacheIdMustBeSetException
     */
    public function build()
    {
        if (null === $this->request->id) {
            throw new CacheIdMustBeSetException();
        }

        return $this->request;
    }
}
