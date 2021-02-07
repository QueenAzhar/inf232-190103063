<?php

 class Myclass
 {

 private $font_size;
 private $font_color;
 private $string_value;

 function __construct($font_size,$font_color,$string_value)
 {
 $this->font_size = $font_size;
 $this->font_color = $font_color;
 $this->string_value = $string_value;
 }

 function customize_print()
 {
 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
 } 
 }
 
 $f = new MyClass('20px','red','This is the first php file');

 echo $f->customize_print();
 ?>