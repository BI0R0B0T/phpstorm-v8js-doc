<?php
/**
 * @authot Dolgov_M <dolgov@bk.ru>
 * @date 23.10.2014 18:24
 */

/**
 * Class V8Js
 * @link http://php.net/v8js
 */
class V8Js {
    const V8_VERSION = "0.1.0";
    const FLAG_NONE = 1 ;
    const FLAG_FORCE_ARRAY = 2 ;

    /**
     * Construct a new V8Js object
     *
     * @param string $object_name               The name of the object passed to Javascript
     * @param array $variables                  Map of PHP variables that will be available in Javascript. Must be an
     *                                          associative array in format array("name-for-js" => "name-of-php-variable").
     *                                          Defaults to empty array.
     * @param array $extensions                 List of extensions registered using V8Js::registerExtension() which should
     *                                          be available in the Javascript context of the created V8Js object.
     * @param bool $report_uncaught_exceptions  Controls whether uncaught Javascript exceptions are reported immediately
     *                                          or not. Defaults to TRUE. If set to FALSE the uncaught exception can be
     *                                          accessed using V8Js::getPendingException().
     */
    public function  __construct( $object_name = "PHP" , $variables = array() , $extensions = array() , $report_uncaught_exceptions = TRUE ) {}

    /**
     * Compiles and executes the string passed with script as Javascript code.
     *
     * @param string $script        The code string to be executed.
     * @param string $identifier    Identifier string for the executed code. Used for debugging.
     * @param int    $flags         Execution flags. This value must be one of the V8Js::FLAG_* constants, defaulting to V8Js::FLAG_NONE.
     *                              V8Js::FLAG_NONE:        no flags
     *                              V8Js::FLAG_FORCE_ARRAY: forces all Javascript objects passed to PHP to be associative arrays
     * @return mixed                Returns the last variable instantiated in the Javascript code converted to matching
     *                              PHP variable type.
     */
    public function executeString ( $script , $identifier = "V8Js::executeString()" , $flags = V8Js::FLAG_NONE ) {}

    /**
     * Returns any pending uncaught Javascript exception as V8JsException left from earlier V8Js::executeString() call(s).
     *
     * @return V8JsException|null
     */
    public function getPendingException ( ) {}

    /**
     * Register Javascript extensions for V8Js
     *
     * @param string $extension_name    Name of the extension to be registered
     * @param string $script            The Javascript code to be registered.
     * @param array  $dependencies      Array of extension names the extension to be registered depends on. Any such
     *                                  extension is enabled automatically when this extension is loaded.
     * @param bool   $auto_enable       If set to TRUE, the extension will be enabled automatically in all V8Js contexts.
     * @return bool  TRUE if extension was registered successfully, FALSE otherwise.
     */
    public static function registerExtension ( $extension_name , $script , $dependencies = array() , $auto_enable = FALSE ) {}

    /**
     * returns array of Javascript extensions registered using V8Js::registerExtension().
     *
     * @return array
     */
    public static function getExtensions ( ) {}

}

/**
 * Class V8JsException
 * @link http://php.net/v8jsexception
 */
class V8JsException extends Exception {
    /**
     * @var string
     */
    protected $JsFileName ;
    /**
     * @var int
     */
    protected $JsLineNumber ;
    /**
     * @var int
     */
    protected $JsSourceLine ;
    /**
     * @var string
     */
    protected $JsTrace ;
    /**
     * @var string
     */
    protected $message ;
    /**
     * @var int
     */
    protected $code ;
    /**
     * @var string
     */
    protected  $file ;
    /**
     * @var int
     */
    protected $line ;

    /**
     * @return string
     */
    final public function  getJsFileName ( ) {}
    /**
     * @return int
     */
    final public function  getJsLineNumber ( ) {}

    /**
     * @return int
     */
    final public function  getJsSourceLine ( ) {}

    /**
     * @return string
     */
    final public function  getJsTrace ( ) {}
}