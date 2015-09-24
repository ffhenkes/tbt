<?php

class StringUtils {

  // just an example of a static kind of function
  public static function diacritics($charset, $out_charset, $the_string) {
    
    return iconv($charset, $out_charset, $the_string);
  }

}

?>