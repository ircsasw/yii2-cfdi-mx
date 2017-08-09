<?php

/**
 * Test del Componente CfdiComponent.
 * Clase que genera un comprobante cfdi para timbrar ante un PAC.
 *
 * @author Arturo Ramos <ircsasw@gmail.com>
 */
class CfdiComponentTest extends PHPUnit_Framework_TestCase {

    /**
    * Just check if the CfdiComponent has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testIsThereAnySyntaxError() {
        $var = new ircsasw\cfdi\CfdiComponent;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    /**
    * Just check if the CfdiComponent has no syntax error
    *
    * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
    * any typo before you even use this library in a real project.
    *
    */
    public function testMethod1() {
        $var = new ircsasw\cfdi\CfdiComponent;
        $this->assertTrue($var->method1("hey") == 'Hello World');
        unset($var);
    }

}
