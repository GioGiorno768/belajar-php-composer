<?php 
namespace vxl\Data;

class hello {
    public function __construct(private string $name) {
    }

    function sayHello(string $nama = "Tod") : string {
        return "Hallo $nama, nama saya {$this->name}, saya mahasiswa dari UNP Kediri" . PHP_EOL;
    }
}
?>