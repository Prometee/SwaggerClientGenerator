<?php

declare(strict_types=1);

namespace Prometee\SwaggerClientGenerator\Base\Generator\Object\Method;

use Prometee\SwaggerClientGenerator\Base\Generator\GeneratorInterface;

interface MethodParameterGeneratorInterface extends GeneratorInterface
{
    /**
     * @param string[] $types
     * @param string $name
     * @param string|null $value
     * @param bool $byReference
     * @param string|null $description
     */
    public function configure(
        array $types,
        string $name,
        ?string $value = null,
        bool $byReference = false,
        string $description = ''
    ): void;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return bool
     */
    public function isByReference(): bool;

    /**
     * @return array
     */
    public function getTypes(): array;

    /**
     * @param array $types
     */
    public function setTypes(array $types): void;

    /**
     * @param string $type
     */
    public function addType(string $type): void;

    /**
     * @param string $type
     *
     * @return bool
     */
    public function hasType(string $type): bool;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string|null
     */
    public function getValueType(): ?string;

    /**
     * @param bool $byReference
     */
    public function setByReference(bool $byReference): void;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @param string|null $value
     */
    public function setValue(?string $value): void;

    /**
     * @return string
     */
    public function getPhpName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

    /**
     * @param string $description
     */
    public function setDescription(string $description): void;

    /**
     * @return string|null
     */
    public function getPhpType(): ?string;

    /**
     * @return string|null
     */
    public function getValue(): ?string;
}