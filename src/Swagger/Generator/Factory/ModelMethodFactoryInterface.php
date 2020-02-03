<?php

declare(strict_types=1);

namespace Prometee\SwaggerClientGenerator\Swagger\Generator\Factory;

use Prometee\SwaggerClientGenerator\Base\Generator\Factory\MethodFactoryInterface as BaseMethodFactoryInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Other\UsesGeneratorInterface;
use Prometee\SwaggerClientGenerator\Swagger\Generator\Model\Method\ModelConstructorGeneratorInterface;

interface ModelMethodFactoryInterface extends BaseMethodFactoryInterface
{
    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return ModelConstructorGeneratorInterface
     */
    public function createModelConstructorGenerator(UsesGeneratorInterface $usesGenerator): ModelConstructorGeneratorInterface;
}