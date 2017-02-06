<?php

/*
 * This file is part of the GLAVWEB.cms SilexCmsContentBlock package.
 *
 * (c) Andrey Nilov <nilov@glavweb.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glavweb\SilexCmsContentBlock\Provider;

use Glavweb\CmsContentBlock\Service\OptionService;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * OptionServiceProvider
 *
 * @package Glavweb\SilexCmsContentBlock
 * @author Andrey Nilov <nilov@glavweb.ru>
 */
class OptionServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Container $app)
    {
        $app['option_service'] = function () use ($app) {
            return new OptionService(
                $app['cms_rest_client']
            );
        };
    }
}
