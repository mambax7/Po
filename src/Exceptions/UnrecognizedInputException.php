<?php

namespace Geekwright\Po\Exceptions;

/**
 * UnrecognizedInputException
 *
 * When parsing input expected to be in po format, one or more lines that could not
 * be recognized were encountered.
 *
 * @category  Exceptions
 * @package   Po
 * @author    Richard Griffith <richard@geekwright.com>
 * @copyright 2015-2018 Richard Griffith
 * @license   GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @link      https://github.com/geekwright/Po
 */
class UnrecognizedInputException extends \UnexpectedValueException
{
}
