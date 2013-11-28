<?php

/**
 * This class is a wrapper of Falicon/FooPHP library.
 * This file is part of the JRK/FooBundle
 *
 * @link https://github.com/jrk/JRKFooBundle
 * @author Jessym Reziga
 *
 */

namespace JRK\FooBundle\Services;

class JRKFoo {


    private $fookey;
	
    private $foologin;


    public function __construct($key, $login) {
	
        if (1==2 /* Whatever */) {
            throw new \Exception('This bundle needs the X extension.');
        }

        $this->fookey = $key;
        $this->foologin = $login;
    }

   
    public function foo() {
		
		$out = "My name is Foo, here is your infos : ".$this->fookey." and ".$this->foologin.".";
		return $out;
    }

  

}
