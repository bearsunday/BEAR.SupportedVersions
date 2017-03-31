<?php
/**
 * This file is part of the BEAR.Resource package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace BEAR\Resource;

/**
 * ucwords for obsolete php version 5.5.15 or down
 *
 * @param string $str
 * @param string $delimiter
 *
 * @return string
 */
function ucwords($str, $delimiter = ' ') {
    return str_replace(' ', '', \ucwords(str_replace($delimiter, ' ', $str)));
}
