<?php
/**
 * Bluz Framework Component
 *
 * @copyright Bluz PHP Team
 * @link https://github.com/bluzphp/framework
 */

/**
 * @namespace
 */
namespace Bluz\Validator\Rule;

/**
 * Class String
 * @package Bluz\Validator\Rule
 */
class String extends AbstractRule
{
    /**
     * @var string
     */
    protected $template = '"{{name}}" must be a string';

    /**
     * @param mixed $input
     * @return bool
     */
    public function validate($input)
    {
        return is_string($input);
    }
}
