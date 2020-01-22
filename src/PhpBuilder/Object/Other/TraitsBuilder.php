<?php

declare(strict_types=1);

namespace Prometee\SwaggerClientBuilder\PhpBuilder\Object\Other;

class TraitsBuilder implements TraitsBuilderInterface
{
    /** @var UsesBuilderInterface */
    protected $usesBuilder;
    /** @var string[] */
    protected $traits = [];

    /**
     * @inheritDoc
     */
    public function configure(UsesBuilderInterface $usesBuilder, array $traits = []): void
    {
        $this->usesBuilder = $usesBuilder;
        $this->traits = $traits;
    }

    /**
     * {@inheritDoc}
     */
    public function build(string $indent = null): ?string
    {
        $content = (!empty($this->traits)) ? ' use ' . implode(",\n" . $indent, $this->traits) : '';

        if (!empty($content)) {
            $content = "\n" . $content . ';' . "\n";
        }

        return $content;
    }

    /**
     * {@inheritDoc}
     */
    public function addTrait(string $name, string $alias = ''): void
    {
        if (!$this->hasTrait($name)) {
            $this->setTrait($name, $alias);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function hasTrait(string $class): bool
    {
        return isset($this->traits[$class]);
    }

    /**
     * {@inheritDoc}
     */
    public function setTrait(string $class, string $alias = ''): void
    {
        $this->usesBuilder->guessUse($class, $alias);
        $this->traits[$class] = $this->usesBuilder->getInternalUseName($class);
    }
}