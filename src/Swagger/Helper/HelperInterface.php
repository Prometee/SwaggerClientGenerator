<?php

declare(strict_types=1);

namespace Prometee\SwaggerClientGenerator\Swagger\Helper;

interface HelperInterface
{
    /**
     * @param array|null $items
     *
     * @return string
     */
    public static function getPhpTypeFromSwaggerArrayType(?array $items): string;

    /**
     * @param string $format
     *
     * @return string
     */
    public static function getPhpTypeFromSwaggerStringType(?string $format): string;

    /**
     * @param string $str
     *
     * @return string
     */
    public static function cleanStr(string $str): string;

    /**
     * @param array $config
     *
     * @return string|null
     */
    public static function getPhpTypeFromSwaggerConfiguration(array $config): ?string;

    /**
     * @param string $type
     * @param array|null $items
     * @param string|null $format
     *
     * @return string|null
     */
    public static function getPhpTypeFromSwaggerConfigurationType(
        string $type,
        ?array $items = null,
        ?string $format = null
    ): ?string;

    /**
     * @param string $ref
     *
     * @return string
     */
    public static function getPhpTypeFromSwaggerDefinitionName(string $ref): string;

    /**
     * @param string $type
     * @param array|null $items
     *
     * @return string
     */
    public static function getPhpTypeFromSwaggerTypeAndFormat(string $type, ?array $items): string;

    /**
     * @param string $str
     *
     * @return string
     */
    public static function camelize(string $str): string;
}
