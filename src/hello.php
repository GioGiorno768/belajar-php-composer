<?php 
namespace vxl\Data;

class hello {
    public function __construct(private string $name) {
    }

    function sayHello(string $nama) : string {
        return "Hallo $nama, nama saya {$this->name}" . PHP_EOL;
    }
}
?>