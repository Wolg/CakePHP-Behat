<?php
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\BehatContext;
use Behat\MinkExtension\Context\MinkContext;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * FeatureContext
 */
class FeatureContext extends MinkContext implements ClosuredContextInterface {

    /**
     * parameters
     *
     * @array
     */
    public $parameters = array();

    /**
     * Constructor
     *
     * @param array $parameters
     */
    public function __construct(array $parameters) {
        $this->parameters = $parameters;
        if (file_exists(__DIR__ . '/../support/env.php')) {
            $world = $this;
            require(__DIR__ . '/../support/env.php');
        }
    }

    /**
     * @return array
     */
    public function getStepDefinitionResources() {
        return glob(__DIR__.'/../steps/*.php');
    }

    /**
     * @return array
     */
    public function getHookDefinitionResources() {
        return array(__DIR__ . '/../support/hooks.php');
    }

    /**
     * @param string $path
     * @return mixed
     */
    public function locatePath($path) {
        return parent::locatePath($this->getPathTo($path));
    }

    /**
     * @param $name
     * @param array $args
     * @return mixed
     */
    public function __call($name, array $args) {
        if (isset($this->$name) && is_callable($this->$name)) {
            return call_user_func_array($this->$name, $args);
        } else {
            $trace = debug_backtrace();
            trigger_error(
                'Call to undefined method ' . get_class($this) . '::' . $name .
                    ' in ' . $trace[0]['file'] .
                    ' on line ' . $trace[0]['line'],
                E_USER_ERROR
            );
        }
    }

    /**
     * Return Model Object
     *
     * @param string $name
     * @return object
     */
    public function getModel($name) {
        return ClassRegistry::init(array('class' => $name, 'ds' => 'test'));
    }

    /**
     * Truncate Test table
     *
     * @param string $name
     * @return void
     */
    public function truncateModel($name) {
        $model = ClassRegistry::init(array('class' => $name, 'ds' => 'test'));
        $table = $model->table;
        $db = ConnectionManager::getDataSource('test');
        $db->truncate($table);
    }
}