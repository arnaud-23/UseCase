<?php

namespace OpenClassrooms\CleanArchitecture\BusinessRules\Proxies\Requestors\Cache;

use
    OpenClassrooms\CleanArchitecture\BusinessRules\Proxies\Requestors\Cache\Exceptions\CacheIdMustBeSetException;

/**
 * @author Romain Kuzniak <romain.kuzniak@openclassrooms.com>
 */
interface CacheProxyStrategyRequestBuilder
{
    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withNamespaceId($namespaceId);

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withId($id);

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withData($data);

    /**
     * @return CacheProxyStrategyRequestBuilder
     */
    public function withLifeTime($lifeTime);

    /**
     * @return CacheProxyStrategyRequest
     * @throws CacheIdMustBeSetException
     */
    public function build();

}
