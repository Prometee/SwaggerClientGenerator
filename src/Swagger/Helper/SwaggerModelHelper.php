<?php

declare(strict_types=1);

namespace Prometee\SwaggerClientBuilder\Swagger\Helper;

class SwaggerModelHelper extends AbstractHelper implements SwaggerModelHelperInterface
{


    public static function isNullableBySwaggerConfiguration(string $targetedProperty, array $definition): bool
    {
        if (!isset($definition['properties'])) return true;

        if (isset($definition['required']) && in_array($targetedProperty, $definition['required'])) {
            return false;
        }

        if (!isset($definition['properties'][$targetedProperty])) return true;

        return isset($definition['properties'][$targetedProperty]['nullable'])
            ? $definition['properties'][$targetedProperty]['nullable']
            : true
            ;
    }

    /**
     * {@inheritdoc}
     */
    public static function getClassPathFromDefinitionName(string $definitionName): string
    {
        $classPath = trim($definitionName, '_');
        $words = explode('_', $classPath);
        $words = array_map('ucfirst', $words);
        $classPath = implode('', $words);
        return $classPath;
    }
}
