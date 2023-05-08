<?php

class MemberTest {
    /**  Location for overloaded data.  */
    private $data = array();

    /**  Overloading not used on declared members.  */
    public $declared = 1;

    /**  Overloading not triggered when accessed inside the class.  */
    private $hidden = 2;

    public function __set($name, $value) {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "Getting '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error('Undefined property: ' . $name . ' in ' . $trace[0]['file'] . ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    /**  As of PHP 5.1.0  */
    public function __isset($name) {
        echo "Is '$name' set?\n";
        return isset($this->data[$name]);
    }

    /**  As of PHP 5.1.0  */
    public function __unset($name) {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }

    /**  Not a magic method, just here for example.  */
    public function getHidden() {
        echo "'hidden' visible here so __get() not used\n";
        return $this->hidden;
    }
}


echo "<pre>\n";

$obj = new MemberTest;

$obj->a = 1;
echo $obj->a . "\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));

echo $obj->declared . "\n";
echo $obj->getHidden() . "\n";
echo $obj->hidden . "\n";
?>
