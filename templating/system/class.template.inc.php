<?php 
//note: taken from https://code.tutsplus.com/tutorials/roll-your-own-templating-system-in-php--net-16596
/** * A templating engine * * PHP version 5 * * LICENSE: This source file is subject to the MIT License, available at * http://www.opensource.org/licenses/mit-license.html * * @author Jason 
Lengstorf <jason.lengstorf@copterlabs.com> * @copyright 2010 Copter Labs * @license http://www.opensource.org/licenses/mit-license.html MIT License */ 
  class Template { 

 /** * Stores the entries to be parsed in the template * @var array */ 
 public $entries = array();
  
 //TODO: Define a class property to store the template
 public $temp; 
  
 //TODO: Write a public method to output the result of the templating engine 
 public function output_result() {

 }
  
 //TODO: Write a private method to load the template 
 private function load_template() {

 }
  
 //TODO: Write a private method to parse the template 
 private function parse_template() {

 }
  
 //TODO: Write a static method to replace the template tags with entry data 
 public static function replace_temp_tags() {

 }
  
 //TODO: Write a private currying function to facilitate tag replacement 
  
}
?>