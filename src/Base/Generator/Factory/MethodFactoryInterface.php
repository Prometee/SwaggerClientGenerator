<?php

declare(strict_types=1);

namespace Prometee\SwaggerClientGenerator\Base\Generator\Factory;

use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\ArrayGetterSetterGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\ConstructorGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\GetterSetterGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\IsserSetterGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\MethodGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\MethodParameterGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Method\PropertyMethodsGeneratorInterface;
use Prometee\SwaggerClientGenerator\Base\Generator\Object\Other\UsesGeneratorInterface;

interface MethodFactoryInterface
{
    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return MethodGeneratorInterface
     */
    public function createMethodGenerator(UsesGeneratorInterface $usesGenerator): MethodGeneratorInterface;

    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return ConstructorGeneratorInterface
     */
    public function createConstructorGenerator(UsesGeneratorInterface $usesGenerator): ConstructorGeneratorInterface;

    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return MethodParameterGeneratorInterface
     */
    public function createMethodParameterGenerator(UsesGeneratorInterface $usesGenerator): MethodParameterGeneratorInterface;

    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return PropertyMethodsGeneratorInterface
     */
    public function createPropertyMethodsGenerator(UsesGeneratorInterface $usesGenerator): PropertyMethodsGeneratorInterface;

    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return GetterSetterGeneratorInterface
     */
    public function createGetterSetterGenerator(UsesGeneratorInterface $usesGenerator): GetterSetterGeneratorInterface;

    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return IsserSetterGeneratorInterface
     */
    public function createIsserSetterGenerator(UsesGeneratorInterface $usesGenerator): IsserSetterGeneratorInterface;

    /**
     * @param UsesGeneratorInterface $usesGenerator
     *
     * @return ArrayGetterSetterGeneratorInterface
     */
    public function createArrayGetterSetterGenerator(UsesGeneratorInterface $usesGenerator): ArrayGetterSetterGeneratorInterface;

    /**
     * @return PhpDocFactoryInterface
     */
    public function getPhpDocFactory(): PhpDocFactoryInterface;

    /**
     * @param string $getterSetterGeneratorClass
     */
    public function setGetterSetterGeneratorClass(string $getterSetterGeneratorClass): void;

    /**
     * @return string
     */
    public function getMethodGeneratorClass(): string;

    /**
     * @param PhpDocFactoryInterface $phpDocFactory
     */
    public function setPhpDocFactory(PhpDocFactoryInterface $phpDocFactory): void;

    /**
     * @param string $arrayGetterSetterGeneratorClass
     */
    public function setArrayGetterSetterGeneratorClass(string $arrayGetterSetterGeneratorClass): void;

    /**
     * @param string $methodGeneratorClass
     */
    public function setMethodGeneratorClass(string $methodGeneratorClass): void;

    /**
     * @param string $propertyMethodsGeneratorClass
     */
    public function setPropertyMethodsGeneratorClass(string $propertyMethodsGeneratorClass): void;

    /**
     * @param string $methodParameterGeneratorClass
     */
    public function setMethodParameterGeneratorClass(string $methodParameterGeneratorClass): void;

    /**
     * @param string $isserSetterGeneratorClass
     */
    public function setIsserSetterGeneratorClass(string $isserSetterGeneratorClass): void;

    /**
     * @return string
     */
    public function getConstructorGeneratorClass(): string;

    /**
     * @param string $constructorGeneratorClass
     */
    public function setConstructorGeneratorClass(string $constructorGeneratorClass): void;

    /**
     * @return string
     */
    public function getMethodParameterGeneratorClass(): string;

    /**
     * @return string
     */
    public function getPropertyMethodsGeneratorClass(): string;

    /**
     * @return string
     */
    public function getArrayGetterSetterGeneratorClass(): string;

    /**
     * @return string
     */
    public function getIsserSetterGeneratorClass(): string;

    /**
     * @return string
     */
    public function getGetterSetterGeneratorClass(): string;
}