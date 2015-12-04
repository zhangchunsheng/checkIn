<?php
/*
 * name: yaf所有函数名
 *
 * 方便非IDE编辑器代码补全
 */
namespace Yaf;

final class Application {
    /* constants */
    /* properties */
    protected $config = NULL;
    protected $dispatcher = NULL;
    static protected $_app = NULL;
    protected $_modules = NULL;
    protected $_running = "";
    protected $_environ = "product";
    protected $_err_no = "0";
    protected $_err_msg = "";
    /* methods */
    public function __construct($config, $envrion = NULL) {
    }
    public function run() {
    }
    public function execute($entry, $_ = "...") {
    }
    public static function app() {
    }
    public function environ() {
    }
    public function bootstrap($bootstrap = NULL) {
    }
    public function getConfig() {
    }
    public function getModules() {
    }
    public function getDispatcher() {
    }
    public function setAppDirectory($directory) {
    }
    public function getAppDirectory() {
    }
    public function getLastErrorNo() {
    }
    public function getLastErrorMsg() {
    }
    public function clearLastError() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __sleep() {
    }
    private function __wakeup() {
    }
}
abstract class Bootstrap_Abstract {
    /* constants */
    /* properties */
    /* methods */
}
final class Dispatcher {
    /* constants */
    /* properties */
    protected $_router = NULL;
    protected $_view = NULL;
    protected $_request = NULL;
    protected $_plugins = NULL;
    static protected $_instance = NULL;
    protected $_auto_render = "1";
    protected $_return_response = "";
    protected $_instantly_flush = "";
    protected $_default_module = NULL;
    protected $_default_controller = NULL;
    protected $_default_action = NULL;
    /* methods */
    private function __construct() {
    }
    private function __clone() {
    }
    private function __sleep() {
    }
    private function __wakeup() {
    }
    public function enableView() {
    }
    public function disableView() {
    }
    public function initView($templates_dir, array $options = NULL) {
    }
    public function setView($view) {
    }
    public function setRequest($request) {
    }
    public function getApplication() {
    }
    public function getRouter() {
    }
    public function getRequest() {
    }
    public function setErrorHandler($callback, $error_types) {
    }
    public function setDefaultModule($module) {
    }
    public function setDefaultController($controller) {
    }
    public function setDefaultAction($action) {
    }
    public function returnResponse($flag) {
    }
    public function autoRender($flag) {
    }
    public function flushInstantly($flag) {
    }
    public static function getInstance() {
    }
    public function dispatch($request) {
    }
    public function throwException($flag = NULL) {
    }
    public function catchException($flag = NULL) {
    }
    public function registerPlugin($plugin) {
    }
}
final class Loader {
    /* constants */
    /* properties */
    protected $_local_ns = NULL;
    protected $_library = NULL;
    protected $_global_library = NULL;
    static protected $_instance = NULL;
    /* methods */
    private function __construct() {
    }
    private function __clone() {
    }
    private function __sleep() {
    }
    private function __wakeup() {
    }
    public function autoload($class_name) {
    }
    public static function getInstance($local_library_path = NULL, $global_library_path = NULL) {
    }
    public function registerLocalNamespace($name_prefix) {
    }
    public function getLocalNamespace() {
    }
    public function clearLocalNamespace() {
    }
    public function isLocalName($class_name) {
    }
    public static function import($file) {
    }
    public function setLibraryPath($library_path, $is_global = NULL) {
    }
    public function getLibraryPath($is_global = NULL) {
    }
}
abstract class Request_Abstract {
    /* constants */
    const SCHEME_HTTP = http;
    const SCHEME_HTTPS = https;
    /* properties */
    public $module = NULL;
    public $controller = NULL;
    public $action = NULL;
    public $method = NULL;
    protected $params = NULL;
    protected $language = NULL;
    protected $_exception = NULL;
    protected $_base_uri = "";
    protected $uri = "";
    protected $dispatched = "";
    protected $routed = "";
    /* methods */
    public function isGet() {
    }
    public function isPost() {
    }
    public function isPut() {
    }
    public function isHead() {
    }
    public function isOptions() {
    }
    public function isCli() {
    }
    public function isXmlHttpRequest() {
    }
    public function getServer($name, $default = NULL) {
    }
    public function getEnv($name, $default = NULL) {
    }
    public function setParam($name, $value = NULL) {
    }
    public function getParam($name, $default = NULL) {
    }
    public function getParams() {
    }
    public function getException() {
    }
    public function getModuleName() {
    }
    public function getControllerName() {
    }
    public function getActionName() {
    }
    public function setModuleName($module) {
    }
    public function setControllerName($controller) {
    }
    public function setActionName($action) {
    }
    public function getMethod() {
    }
    public function getLanguage() {
    }
    public function setBaseUri($uir) {
    }
    public function getBaseUri() {
    }
    public function getRequestUri() {
    }
    public function setRequestUri($uir) {
    }
    public function isDispatched() {
    }
    public function setDispatched() {
    }
    public function isRouted() {
    }
    public function setRouted($flag = NULL) {
    }
}
class Request_Http extends Request_Abstract {
    /* constants */
    /* properties */
    public $module = NULL;
    public $controller = NULL;
    public $action = NULL;
    public $method = NULL;
    protected $params = NULL;
    protected $language = NULL;
    protected $_exception = NULL;
    protected $_base_uri = "";
    protected $uri = "";
    protected $dispatched = "";
    protected $routed = "";
    /* methods */
    public function getQuery() {
    }
    public function getRequest() {
    }
    public function getPost() {
    }
    public function getCookie() {
    }
    public function getFiles() {
    }
    public function get() {
    }
    public function isXmlHttpRequest() {
    }
    public function __construct() {
    }
    private function __clone() {
    }
    public function isGet() {
    }
    public function isPost() {
    }
    public function isPut() {
    }
    public function isHead() {
    }
    public function isOptions() {
    }
    public function isCli() {
    }
    public function getServer($name, $default = NULL) {
    }
    public function getEnv($name, $default = NULL) {
    }
    public function setParam($name, $value = NULL) {
    }
    public function getParam($name, $default = NULL) {
    }
    public function getParams() {
    }
    public function getException() {
    }
    public function getModuleName() {
    }
    public function getControllerName() {
    }
    public function getActionName() {
    }
    public function setModuleName($module) {
    }
    public function setControllerName($controller) {
    }
    public function setActionName($action) {
    }
    public function getMethod() {
    }
    public function getLanguage() {
    }
    public function setBaseUri($uir) {
    }
    public function getBaseUri() {
    }
    public function getRequestUri() {
    }
    public function setRequestUri($uir) {
    }
    public function isDispatched() {
    }
    public function setDispatched() {
    }
    public function isRouted() {
    }
    public function setRouted($flag = NULL) {
    }
}
final class Request_Simple extends Request_Abstract {
    /* constants */
    const SCHEME_HTTP = http;
    const SCHEME_HTTPS = https;
    /* properties */
    public $module = NULL;
    public $controller = NULL;
    public $action = NULL;
    public $method = NULL;
    protected $params = NULL;
    protected $language = NULL;
    protected $_exception = NULL;
    protected $_base_uri = "";
    protected $uri = "";
    protected $dispatched = "";
    protected $routed = "";
    /* methods */
    public function __construct() {
    }
    private function __clone() {
    }
    public function getQuery() {
    }
    public function getRequest() {
    }
    public function getPost() {
    }
    public function getCookie() {
    }
    public function getFiles() {
    }
    public function get() {
    }
    public function isXmlHttpRequest() {
    }
    public function isGet() {
    }
    public function isPost() {
    }
    public function isPut() {
    }
    public function isHead() {
    }
    public function isOptions() {
    }
    public function isCli() {
    }
    public function getServer($name, $default = NULL) {
    }
    public function getEnv($name, $default = NULL) {
    }
    public function setParam($name, $value = NULL) {
    }
    public function getParam($name, $default = NULL) {
    }
    public function getParams() {
    }
    public function getException() {
    }
    public function getModuleName() {
    }
    public function getControllerName() {
    }
    public function getActionName() {
    }
    public function setModuleName($module) {
    }
    public function setControllerName($controller) {
    }
    public function setActionName($action) {
    }
    public function getMethod() {
    }
    public function getLanguage() {
    }
    public function setBaseUri($uir) {
    }
    public function getBaseUri() {
    }
    public function getRequestUri() {
    }
    public function setRequestUri($uir) {
    }
    public function isDispatched() {
    }
    public function setDispatched() {
    }
    public function isRouted() {
    }
    public function setRouted($flag = NULL) {
    }
}
abstract class Response_Abstract {
    /* constants */
    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "";
    /* methods */
    public function __construct() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __toString() {
    }
    public function setBody() {
    }
    public function appendBody() {
    }
    public function prependBody() {
    }
    public function clearBody() {
    }
    public function getBody() {
    }
    public function setHeader() {
    }
    protected function setAllHeaders() {
    }
    public function getHeader() {
    }
    public function clearHeaders() {
    }
    public function setRedirect() {
    }
    public function response() {
    }
}
class Response_Http extends Response_Abstract {
    /* constants */
    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "1";
    protected $_response_code = "200";
    /* methods */
    public function __construct() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __toString() {
        return "";
    }
    public function setBody() {
    }
    public function appendBody() {
    }
    public function prependBody() {
    }
    public function clearBody() {
    }
    public function getBody() {
    }
    public function setHeader() {
    }
    protected function setAllHeaders() {
    }
    public function getHeader() {
    }
    public function clearHeaders() {
    }
    public function setRedirect() {
    }
    public function response() {
    }
}
class Response_Cli extends Response_Abstract {
    /* constants */
    /* properties */
    protected $_header = NULL;
    protected $_body = NULL;
    protected $_sendheader = "";
    /* methods */
    public function __construct() {
    }
    public function __destruct() {
    }
    private function __clone() {
    }
    private function __toString() {
        return "";
    }
    public function setBody() {
    }
    public function appendBody() {
    }
    public function prependBody() {
    }
    public function clearBody() {
    }
    public function getBody() {
    }
    public function setHeader() {
    }
    protected function setAllHeaders() {
    }
    public function getHeader() {
    }
    public function clearHeaders() {
    }
    public function setRedirect() {
    }
    public function response() {
    }
}
abstract class Controller_Abstract {
    /* constants */
    /* properties */
    public $actions = NULL;
    protected $_module = NULL;
    protected $_name = NULL;
    protected $_request = NULL;
    protected $_response = NULL;
    protected $_invoke_args = NULL;
    protected $_view = NULL;
    /* methods */
    final protected function render($tpl, array $parameters = NULL) {
    }
    final protected function display($tpl, array $parameters = NULL) {
    }
    final public function getRequest() {
    }
    final public function getResponse() {
    }
    final public function getModuleName() {
    }
    final public function getView() {
    }
    final public function initView(array $options = NULL) {
    }
    final public function setViewpath($view_directory) {
    }
    final public function getViewpath() {
    }
    final public function forward($module, $controller = NULL, $action = NULL, array $paramters = NULL) {
    }
    final public function redirect($url) {
    }
    final public function getInvokeArgs() {
    }
    final public function getInvokeArg($name) {
    }
    final public function __construct() {
    }
    final private function __clone() {
    }
}
abstract class Action_Abstract extends Controller_Abstract {
    /* constants */
    /* properties */
    public $actions = NULL;
    protected $_module = NULL;
    protected $_name = NULL;
    protected $_request = NULL;
    protected $_response = NULL;
    protected $_invoke_args = NULL;
    protected $_view = NULL;
    protected $_controller = NULL;
    /* methods */
    abstract public function execute();
    public function getController() {
    }
    final private function __clone() {
    }
}
abstract class Config_Abstract {
    /* constants */
    /* properties */
    protected $_config = NULL;
    protected $_readonly = "1";
    /* methods */
    abstract public function get($name);
    abstract public function set($name, $value);
    abstract public function readonly();
    abstract public function toArray();
}
final class Config_Ini extends Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable {
    /* constants */
    /* properties */
    protected $_config = NULL;
    protected $_readonly = "1";
    /* methods */
    public function __construct($config_file, $section = NULL) {
    }
    public function __isset($name) {
    }
    public function get($name = NULL) {
    }
    public function set($name, $value) {
    }
    public function count() {
    }
    public function rewind() {
    }
    public function current() {
    }
    public function next() {
    }
    public function valid() {
    }
    public function key() {
    }
    public function toArray() {
    }
    public function readonly() {
    }
    public function offsetUnset($name) {
    }
    public function offsetGet($name) {
    }
    public function offsetExists($name) {
    }
    public function offsetSet($name, $value) {
    }
    public function __get($name = NULL) {
    }
    public function __set($name, $value) {
    }
}
final class Config_Simple extends Config_Abstract implements Iterator, Traversable, ArrayAccess, Countable {
    /* constants */
    /* properties */
    protected $_config = NULL;
    protected $_readonly = "";
    /* methods */
    public function __construct($config_file, $section = NULL) {
    }
    public function __isset($name) {
    }
    public function get($name = NULL) {
    }
    public function set($name, $value) {
    }
    public function count() {
    }
    public function offsetUnset($name) {
    }
    public function rewind() {
    }
    public function current() {
    }
    public function next() {
    }
    public function valid() {
    }
    public function key() {
    }
    public function readonly() {
    }
    public function toArray() {
    }
    public function __set($name, $value) {
    }
    public function __get($name = NULL) {
    }
    public function offsetGet($name) {
    }
    public function offsetExists($name) {
    }
    public function offsetSet($name, $value) {
    }
}
final class View_Simple implements View_Interface {
    /* constants */
    /* properties */
    protected $_tpl_vars = NULL;
    protected $_tpl_dir = NULL;
    protected $_options = NULL;
    /* methods */
    public function __construct($tempalte_dir, array $options = NULL) {
    }
    public function __isset($name) {
    }
    public function get($name = NULL) {
    }
    public function assign($name, $value = NULL) {
    }
    public function render($tpl, $tpl_vars = NULL) {
    }
    public function eval1($tpl_str, $vars = NULL) {
    }
    public function display($tpl, $tpl_vars = NULL) {
    }
    public function assignRef($name, &$value) {
    }
    public function clear($name = NULL) {
    }
    public function setScriptPath($template_dir) {
    }
    public function getScriptPath() {
    }
    public function __get($name = NULL) {
    }
    public function __set($name, $value = NULL) {
    }
}
abstract class Router {
    /* constants */
    /* properties */
    protected $_routes = NULL;
    protected $_current = NULL;
    /* methods */
    public function __construct() {
    }
    public function addRoute() {
    }
    public function addConfig() {
    }
    public function route() {
    }
    public function getRoute() {
    }
    public function getRoutes() {
    }
    public function getCurrentRoute() {
    }
}
class Route_Static extends Router {
    /* constants */
    /* properties */
    /* methods */
    public function match($uri) {
    }
    public function route($request) {
    }
    public function __construct() {
    }
    public function addRoute() {
    }
    public function addConfig() {
    }
    public function getRoute() {
    }
    public function getRoutes() {
    }
    public function getCurrentRoute() {
    }
}
final class Route_Simple implements Route_Interface {
    /* constants */
    /* properties */
    protected $controller = NULL;
    protected $module = NULL;
    protected $action = NULL;
    /* methods */
    public function __construct($module_name, $controller_name, $action_name) {
    }
    public function route($request) {
    }
}
final class Route_Supervar implements Route_Interface {
    /* constants */
    /* properties */
    protected $_var_name = NULL;
    /* methods */
    public function __construct($supervar_name) {
    }
    public function route($request) {
    }
}
final class Route_Rewrite extends Route_Interface implements Route_Interface {
    /* constants */
    /* properties */
    protected $_route = NULL;
    protected $_default = NULL;
    protected $_verify = NULL;
    /* methods */
    public function __construct($match, array $route, array $verify = NULL) {
    }
    public function route($request) {
    }
}
final class Route_Regex extends Route_Interface implements Route_Interface {
    /* constants */
    /* properties */
    protected $_route = NULL;
    protected $_default = NULL;
    protected $_maps = NULL;
    protected $_verify = NULL;
    /* methods */
    public function __construct($match, array $route, array $map = NULL, array $verify = NULL) {
    }
    public function route($request) {
    }
}
final class Route_Map implements Route_Interface {
    /* constants */
    /* properties */
    protected $_ctl_router = "";
    protected $_delimiter = NULL;
    /* methods */
    public function __construct($controller_prefer = NULL, $delimiter = NULL) {
    }
    public function route($request) {
    }
}
abstract class Plugin_Abstract {
    /* constants */
    /* properties */
    /* methods */
    public function routerStartup(Request_Abstract $request, Response_Abstract $response) {
    }
    public function routerShutdown(Request_Abstract $request, Response_Abstract $response) {
    }
    public function dispatchLoopStartup(Request_Abstract $request, Response_Abstract $response) {
    }
    public function dispatchLoopShutdown(Request_Abstract $request, Response_Abstract $response) {
    }
    public function preDispatch(Request_Abstract $request, Response_Abstract $response) {
    }
    public function postDispatch(Request_Abstract $request, Response_Abstract $response) {
    }
    public function preResponse(Request_Abstract $request, Response_Abstract $response) {
    }
}
final class Registry {
    /* constants */
    /* properties */
    static protected $_instance = NULL;
    protected $_entries = NULL;
    /* methods */
    private function __construct() {
    }
    private function __clone() {
    }
    public static function get($name) {
    }
    public static function has($name) {
    }
    public static function set($name, $value) {
    }
    public static function del($name) {
    }
}
final class Session implements Iterator, Traversable, ArrayAccess, Countable {
    /* constants */
    /* properties */
    static protected $_instance = NULL;
    protected $_session = NULL;
    protected $_started = "";
    /* methods */
    private function __construct() {
    }
    private function __clone() {
    }
    private function __sleep() {
    }
    private function __wakeup() {
    }
    public static function getInstance() {
    }
    public function start() {
    }
    public function get($name) {
    }
    public function has($name) {
    }
    public function set($name, $value) {
    }
    public function del($name) {
    }
    public function count() {
    }
    public function rewind() {
    }
    public function next() {
    }
    public function current() {
    }
    public function key() {
    }
    public function valid() {
    }
    public function offsetGet($name) {
    }
    public function offsetSet($name, $value) {
    }
    public function offsetExists($name) {
    }
    public function offsetUnset($name) {
    }
    public function __get($name) {
    }
    public function __isset($name) {
    }
    public function __set($name, $value) {
    }
    public function __unset($name) {
    }
}
class Exception extends \Exception {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
    final private function __clone() {
    }
}
class Exception_StartupError extends Exception {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_RouterFailed extends Exception {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_DispatchFailed extends Exception {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_LoadFailed extends Exception {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_LoadFailed_Module extends Exception_LoadFailed {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_LoadFailed_Controller extends Exception_LoadFailed {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_LoadFailed_Action extends Exception_LoadFailed {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_LoadFailed_View extends Exception_LoadFailed {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}
class Exception_TypeError extends Exception {
    /* constants */
    /* properties */
    protected $message = NULL;
    protected $code = "0";
    protected $file = NULL;
    protected $line = NULL;
    protected $previous = NULL;
    /* methods */
    public function __construct() {
    }
}