<?php
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
require_once $GLOBALS['THRIFT_ROOT'].'/packages/module/module_types.php';

class module_CONSTANTS {
  private static $__myInt = null;
  public static function myInt() {
    if (self::$__myInt == null) {
      self::$__myInt = 1337;
    }
    return self::$__myInt;
  }

  private static $__name = null;
  public static function name() {
    if (self::$__name == null) {
      self::$__name = "Mark Zuckerberg";
    }
    return self::$__name;
  }

  private static $__states = null;
  public static function states() {
    if (self::$__states == null) {
      self::$__states = array(
        array(
          "San Diego" => 3211000,
          "Sacramento" => 479600,
          "SF" => 837400,
        ),
        array(
          "New York" => 8406000,
          "Albany" => 98400,
        ),
      );
    }
    return self::$__states;
  }

  private static $__x = null;
  public static function x() {
    if (self::$__x == null) {
      self::$__x = 1;
    }
    return self::$__x;
  }

  private static $__y = null;
  public static function y() {
    if (self::$__y == null) {
      self::$__y = 1000000;
    }
    return self::$__y;
  }

  private static $__z = null;
  public static function z() {
    if (self::$__z == null) {
      self::$__z = 1e+09;
    }
    return self::$__z;
  }

  private static $__instagram = null;
  public static function instagram() {
    if (self::$__instagram == null) {
      self::$__instagram = new Internship(array(
        "weeks" => 12,
        "title" => "Software Engineer",
        "employer" =>         3,
      ));
    }
    return self::$__instagram;
  }

  private static $__kRanges = null;
  public static function kRanges() {
    if (self::$__kRanges == null) {
      self::$__kRanges = array(
        new Range(array(
          "min" => 1,
          "max" => 2,
        )),
        new Range(array(
          "min" => 5,
          "max" => 6,
        )),
      );
    }
    return self::$__kRanges;
  }

  private static $__internList = null;
  public static function internList() {
    if (self::$__internList == null) {
      self::$__internList = array(
        new Internship(array(
          "weeks" => 12,
          "title" => "Software Engineer",
          "employer" =>           3,
        )),
        new Internship(array(
          "weeks" => 10,
          "title" => "Sales Intern",
          "employer" =>           0,
        )),
      );
    }
    return self::$__internList;
  }

  private static $__apostrophe = null;
  public static function apostrophe() {
    if (self::$__apostrophe == null) {
      self::$__apostrophe = "'";
    }
    return self::$__apostrophe;
  }

  private static $__tripleApostrophe = null;
  public static function tripleApostrophe() {
    if (self::$__tripleApostrophe == null) {
      self::$__tripleApostrophe = "'''";
    }
    return self::$__tripleApostrophe;
  }

  private static $__quotationMark = null;
  public static function quotationMark() {
    if (self::$__quotationMark == null) {
      self::$__quotationMark = "\"";
    }
    return self::$__quotationMark;
  }

  private static $__backslash = null;
  public static function backslash() {
    if (self::$__backslash == null) {
      self::$__backslash = "\\";
    }
    return self::$__backslash;
  }

  private static $__escaped_a = null;
  public static function escaped_a() {
    if (self::$__escaped_a == null) {
      self::$__escaped_a = "\x61";
    }
    return self::$__escaped_a;
  }

  private static $__char2ascii = null;
  public static function char2ascii() {
    if (self::$__char2ascii == null) {
      self::$__char2ascii = array(
        "'" => 39,
        "\"" => 34,
        "\\" => 92,
        "\x61" => 97,
      );
    }
    return self::$__char2ascii;
  }

  private static $__escaped_strings = null;
  public static function escaped_strings() {
    if (self::$__escaped_strings == null) {
      self::$__escaped_strings = array(
        "\x61",
        "\xab",
        "\x6a",
        "\xa6",
        "\x61yyy",
        "\xabyyy",
        "\x6ayyy",
        "\xa6yyy",
        "zzz\x61",
        "zzz\xab",
        "zzz\x6a",
        "zzz\xa6",
        "zzz\x61yyy",
        "zzz\xabyyy",
        "zzz\x6ayyy",
        "zzz\xa6yyy",
      );
    }
    return self::$__escaped_strings;
  }

  private static $__false_c = null;
  public static function false_c() {
    if (self::$__false_c == null) {
      self::$__false_c = false;
    }
    return self::$__false_c;
  }

  private static $__true_c = null;
  public static function true_c() {
    if (self::$__true_c == null) {
      self::$__true_c = true;
    }
    return self::$__true_c;
  }

  private static $__zero_byte = null;
  public static function zero_byte() {
    if (self::$__zero_byte == null) {
      self::$__zero_byte = 0;
    }
    return self::$__zero_byte;
  }

  private static $__zero16 = null;
  public static function zero16() {
    if (self::$__zero16 == null) {
      self::$__zero16 = 0;
    }
    return self::$__zero16;
  }

  private static $__zero32 = null;
  public static function zero32() {
    if (self::$__zero32 == null) {
      self::$__zero32 = 0;
    }
    return self::$__zero32;
  }

  private static $__zero64 = null;
  public static function zero64() {
    if (self::$__zero64 == null) {
      self::$__zero64 = 0;
    }
    return self::$__zero64;
  }

  private static $__zero_dot_zero = null;
  public static function zero_dot_zero() {
    if (self::$__zero_dot_zero == null) {
      self::$__zero_dot_zero = 0;
    }
    return self::$__zero_dot_zero;
  }

  private static $__empty_string = null;
  public static function empty_string() {
    if (self::$__empty_string == null) {
      self::$__empty_string = "";
    }
    return self::$__empty_string;
  }

  private static $__empty_int_list = null;
  public static function empty_int_list() {
    if (self::$__empty_int_list == null) {
      self::$__empty_int_list = array(
      );
    }
    return self::$__empty_int_list;
  }

  private static $__empty_string_list = null;
  public static function empty_string_list() {
    if (self::$__empty_string_list == null) {
      self::$__empty_string_list = array(
      );
    }
    return self::$__empty_string_list;
  }

  private static $__empty_int_set = null;
  public static function empty_int_set() {
    if (self::$__empty_int_set == null) {
      self::$__empty_int_set = array(
      );
    }
    return self::$__empty_int_set;
  }

  private static $__empty_string_set = null;
  public static function empty_string_set() {
    if (self::$__empty_string_set == null) {
      self::$__empty_string_set = array(
      );
    }
    return self::$__empty_string_set;
  }

  private static $__empty_int_int_map = null;
  public static function empty_int_int_map() {
    if (self::$__empty_int_int_map == null) {
      self::$__empty_int_int_map = array(
      );
    }
    return self::$__empty_int_int_map;
  }

  private static $__empty_int_string_map = null;
  public static function empty_int_string_map() {
    if (self::$__empty_int_string_map == null) {
      self::$__empty_int_string_map = array(
      );
    }
    return self::$__empty_int_string_map;
  }

  private static $__empty_string_int_map = null;
  public static function empty_string_int_map() {
    if (self::$__empty_string_int_map == null) {
      self::$__empty_string_int_map = array(
      );
    }
    return self::$__empty_string_int_map;
  }

  private static $__empty_string_string_map = null;
  public static function empty_string_string_map() {
    if (self::$__empty_string_string_map == null) {
      self::$__empty_string_string_map = array(
      );
    }
    return self::$__empty_string_string_map;
  }


  private static $____values = null;
  public static function __values() {
    if (self::$____values == null) {
      self::$____values = array(
        "myInt" => 1337,
        "name" => "Mark Zuckerberg",
        "states" => array(
          array(
            "San Diego" => 3211000,
            "Sacramento" => 479600,
            "SF" => 837400,
          ),
          array(
            "New York" => 8406000,
            "Albany" => 98400,
          ),
        ),
        "x" => 1,
        "y" => 1000000,
        "z" => 1e+09,
        "instagram" => new Internship(array(
          "weeks" => 12,
          "title" => "Software Engineer",
          "employer" =>           3,
        )),
        "kRanges" => array(
          new Range(array(
            "min" => 1,
            "max" => 2,
          )),
          new Range(array(
            "min" => 5,
            "max" => 6,
          )),
        ),
        "internList" => array(
          new Internship(array(
            "weeks" => 12,
            "title" => "Software Engineer",
            "employer" =>             3,
          )),
          new Internship(array(
            "weeks" => 10,
            "title" => "Sales Intern",
            "employer" =>             0,
          )),
        ),
        "apostrophe" => "'",
        "tripleApostrophe" => "'''",
        "quotationMark" => "\"",
        "backslash" => "\\",
        "escaped_a" => "\x61",
        "char2ascii" => array(
          "'" => 39,
          "\"" => 34,
          "\\" => 92,
          "\x61" => 97,
        ),
        "escaped_strings" => array(
          "\x61",
          "\xab",
          "\x6a",
          "\xa6",
          "\x61yyy",
          "\xabyyy",
          "\x6ayyy",
          "\xa6yyy",
          "zzz\x61",
          "zzz\xab",
          "zzz\x6a",
          "zzz\xa6",
          "zzz\x61yyy",
          "zzz\xabyyy",
          "zzz\x6ayyy",
          "zzz\xa6yyy",
        ),
        "false_c" => false,
        "true_c" => true,
        "zero_byte" => 0,
        "zero16" => 0,
        "zero32" => 0,
        "zero64" => 0,
        "zero_dot_zero" => 0,
        "empty_string" => "",
        "empty_int_list" => array(
        ),
        "empty_string_list" => array(
        ),
        "empty_int_set" => array(
        ),
        "empty_string_set" => array(
        ),
        "empty_int_int_map" => array(
        ),
        "empty_int_string_map" => array(
        ),
        "empty_string_int_map" => array(
        ),
        "empty_string_string_map" => array(
        ),
      );
    }
    return self::$____values;
  }

}

$GLOBALS['module_CONSTANTS'] = module_CONSTANTS::$__values;

?>
