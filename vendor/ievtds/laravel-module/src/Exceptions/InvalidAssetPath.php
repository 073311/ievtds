<?php

namespace ievtds\Module\Exceptions;

class InvalidAssetPath extends \Exception
{
    public static function missingModuleName($asset)
    {
        return new static("Module name was not specified in asset [$asset].");
    }
}
