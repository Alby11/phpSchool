<?php

class Computer {

    public function __call($name, $arguments) {
        if ($name === 'add') {
            if (count($arguments) === 2) {
                return $this->callAdd2($arguments);
            } else if (count($arguments) === 3) {
                return $this->callAdd3($arguments);
            } else {
                throw new Exception;
            }
        } else {
            throw new Exception;
        }
    }

    private function callAdd2($arguments): float {
        $sum = 0;
        $sum = $arguments[0] + $arguments[1];
        return $sum;
    }

    private function callAdd3($arguments): float {
        $sum = 0;
        $sum = $arguments[0] + $arguments[1] + $arguments[2];
        return $sum;
    }

}

$Computer = new Computer;
echo $Computer->add(10, 20) . "\n";
echo $Computer->add(10.20, 20.50, 30.50) . "\n";
$Computer->add(10);
$Computer->sub(10, 20);
?>