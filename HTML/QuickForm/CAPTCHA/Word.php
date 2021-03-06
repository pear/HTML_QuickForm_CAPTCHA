<?php

/* vim: set expandtab tabstop=4 shiftwidth=4: */

/**
 * Element for HTML_QuickForm to display a CAPTCHA "Word"
 *
 * The HTML_QuickForm_CAPTCHA package adds an element to the
 * HTML_QuickForm package to display a CAPTCHA "word".
 *
 * This package requires the use of a PHP session.
 *
 * PHP versions 4 and 5
 *
 * @category  HTML
 * @package   HTML_QuickForm_CAPTCHA
 * @author    Philippe Jausions <Philippe.Jausions@11abacus.com>
 * @copyright 2006-2008 by Philippe Jausions / 11abacus
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/HTML_QuickForm_CAPTCHA
 */

/**
 * Required packages
 */
require_once 'HTML/QuickForm/CAPTCHA.php';
require_once 'Text/CAPTCHA/Driver/Word.php';

/**
 * Element for HTML_QuickForm to display a CAPTCHA "word" question
 *
 * The HTML_QuickForm_CAPTCHA package adds an element to the
 * HTML_QuickForm package to display a CAPTCHA "word" question.
 *
 * Options for the element
 * <ul>
 *  <li>'length'     (integer)  the length of the Word.</li>
 *  <li>'mode'       (string)   'single' for separated words.</li>
 *  <li>'locale'     (string)   locale for Numbers_Words package</li>
 *  <li>'sessionVar' (string)   name of session variable containing
 *                              the Text_CAPTCHA instance (defaults to
 *                              _HTML_QuickForm_CAPTCHA.)</li>
 * </ul>
 *
 * This package requires the use of a PHP session.
 *
 * @category  HTML
 * @package   HTML_QuickForm_CAPTCHA
 * @author    Philippe Jausions <Philippe.Jausions@11abacus.com>
 * @copyright 2006-2008 by Philippe Jausions / 11abacus
 * @license   http://www.opensource.org/licenses/bsd-license.php New BSD
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/HTML_QuickForm_CAPTCHA
 * @see       Text_CAPTCHA_Driver_Equation
 */
class HTML_QuickForm_CAPTCHA_Word extends HTML_QuickForm_CAPTCHA
{
    /**
     * Default options
     *
     * @var    array
     * @access protected
     */
    var $_options = array(
            'sessionVar' => '_HTML_QuickForm_CAPTCHA',
            'length'     => 4,
            'mode'       => 'single',
            'locale'     => 'en_US',
            'phrase'     => null,
            );

    /**
     * CAPTCHA driver
     *
     * @var    string
     * @access protected
     */
    var $_CAPTCHA_driver = 'Word';
}

/**
 * Registers the class with QuickForm
 */
if (class_exists('HTML_QuickForm')) {
    HTML_QuickForm::registerElementType('CAPTCHA_Word',
            'HTML/QuickForm/CAPTCHA/Word.php', 'HTML_QuickForm_CAPTCHA_Word');
}

?>