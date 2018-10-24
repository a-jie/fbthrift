<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

enum ComplexUnionEnum: int {
  _EMPTY_ = 0;
  intValue = 1;
  stringValue = 5;
  intListValue = 2;
  stringListValue = 3;
  typedefValue = 9;
  stringRef = 14;
}

/**
 * Original thrift struct:-
 * ComplexUnion
 */
class ComplexUnion implements \IThriftStruct, \IThriftUnion<ComplexUnionEnum> {
  use \ThriftUnionSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'intValue',
      'union' => true,
      'type' => \TType::I64,
      ],
    5 => dict[
      'var' => 'stringValue',
      'union' => true,
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'intListValue',
      'union' => true,
      'type' => \TType::LST,
      'etype' => \TType::I64,
      'elem' => dict[
        'type' => \TType::I64,
        ],
        'format' => 'collection',
      ],
    3 => dict[
      'var' => 'stringListValue',
      'union' => true,
      'type' => \TType::LST,
      'etype' => \TType::STRING,
      'elem' => dict[
        'type' => \TType::STRING,
        ],
        'format' => 'collection',
      ],
    9 => dict[
      'var' => 'typedefValue',
      'union' => true,
      'type' => \TType::MAP,
      'ktype' => \TType::I16,
      'vtype' => \TType::STRING,
      'key' => dict[
        'type' => \TType::I16,
      ],
      'val' => dict[
        'type' => \TType::STRING,
        ],
        'format' => 'collection',
      ],
    14 => dict[
      'var' => 'stringRef',
      'union' => true,
      'type' => \TType::STRING,
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'intValue' => 1,
    'stringValue' => 5,
    'intListValue' => 2,
    'stringListValue' => 3,
    'typedefValue' => 9,
    'stringRef' => 14,
  };
  const int STRUCTURAL_ID = 1260275021738383280;
  /**
   * Original thrift field:-
   * 1: i64 intValue
   */
  public ?int $intValue;
  /**
   * Original thrift field:-
   * 5: string stringValue
   */
  public ?string $stringValue;
  /**
   * Original thrift field:-
   * 2: list<i64> intListValue
   */
  public ?Vector<int> $intListValue;
  /**
   * Original thrift field:-
   * 3: list<string> stringListValue
   */
  public ?Vector<string> $stringListValue;
  /**
   * Original thrift field:-
   * 9: map<i16, string> typedefValue
   */
  public ?Map<int, string> $typedefValue;
  /**
   * Original thrift field:-
   * 14: string stringRef
   */
  public ?string $stringRef;
  protected ComplexUnionEnum $_type = ComplexUnionEnum::_EMPTY_;

  public function __construct(?int $intValue = null, ?string $stringValue = null, ?Vector<int> $intListValue = null, ?Vector<string> $stringListValue = null, ?Map<int, string> $typedefValue = null, ?string $stringRef = null  ) {
    $this->_type = ComplexUnionEnum::_EMPTY_;
    if ($intValue !== null) {
      $this->intValue = $intValue;
      $this->_type = ComplexUnionEnum::intValue;
    }
    if ($stringValue !== null) {
      $this->stringValue = $stringValue;
      $this->_type = ComplexUnionEnum::stringValue;
    }
    if ($intListValue !== null) {
      $this->intListValue = $intListValue;
      $this->_type = ComplexUnionEnum::intListValue;
    }
    if ($stringListValue !== null) {
      $this->stringListValue = $stringListValue;
      $this->_type = ComplexUnionEnum::stringListValue;
    }
    if ($typedefValue !== null) {
      $this->typedefValue = $typedefValue;
      $this->_type = ComplexUnionEnum::typedefValue;
    }
    if ($stringRef !== null) {
      $this->stringRef = $stringRef;
      $this->_type = ComplexUnionEnum::stringRef;
    }
  }

  public function getName(): string {
    return 'ComplexUnion';
  }

  public function getType(): ComplexUnionEnum {
    return $this->_type;
  }

  public function set_intValue(int $intValue): this {
    $this->_type = ComplexUnionEnum::intValue;
    $this->intValue = $intValue;
    return $this;
  }

  public function get_intValue(): int {
    invariant(
      $this->_type === ComplexUnionEnum::intValue,
      'get_intValue called on an instance of ComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->intValue);
  }

  public function set_stringValue(string $stringValue): this {
    $this->_type = ComplexUnionEnum::stringValue;
    $this->stringValue = $stringValue;
    return $this;
  }

  public function get_stringValue(): string {
    invariant(
      $this->_type === ComplexUnionEnum::stringValue,
      'get_stringValue called on an instance of ComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->stringValue);
  }

  public function set_intListValue(Vector<int> $intListValue): this {
    $this->_type = ComplexUnionEnum::intListValue;
    $this->intListValue = $intListValue;
    return $this;
  }

  public function get_intListValue(): Vector<int> {
    invariant(
      $this->_type === ComplexUnionEnum::intListValue,
      'get_intListValue called on an instance of ComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->intListValue);
  }

  public function set_stringListValue(Vector<string> $stringListValue): this {
    $this->_type = ComplexUnionEnum::stringListValue;
    $this->stringListValue = $stringListValue;
    return $this;
  }

  public function get_stringListValue(): Vector<string> {
    invariant(
      $this->_type === ComplexUnionEnum::stringListValue,
      'get_stringListValue called on an instance of ComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->stringListValue);
  }

  public function set_typedefValue(Map<int, string> $typedefValue): this {
    $this->_type = ComplexUnionEnum::typedefValue;
    $this->typedefValue = $typedefValue;
    return $this;
  }

  public function get_typedefValue(): Map<int, string> {
    invariant(
      $this->_type === ComplexUnionEnum::typedefValue,
      'get_typedefValue called on an instance of ComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->typedefValue);
  }

  public function set_stringRef(string $stringRef): this {
    $this->_type = ComplexUnionEnum::stringRef;
    $this->stringRef = $stringRef;
    return $this;
  }

  public function get_stringRef(): string {
    invariant(
      $this->_type === ComplexUnionEnum::stringRef,
      'get_stringRef called on an instance of ComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->stringRef);
  }

  public function readFromJson(string $jsonText): void {
    $this->_type = ComplexUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'intValue') !== null) {
      $this->intValue = $parsed['intValue'];
      $this->_type = ComplexUnionEnum::intValue;
    }    
    if (idx($parsed, 'stringValue') !== null) {
      $this->stringValue = $parsed['stringValue'];
      $this->_type = ComplexUnionEnum::stringValue;
    }    
    if (idx($parsed, 'intListValue') !== null) {
      $_json3 = $parsed['intListValue'];
      $_container4 = Vector {};
      foreach($_json3 as $_key1 => $_value2) {
        $_elem5 = 0;
        $_elem5 = $_value2;
        $_container4 []= $_elem5;
      }
      $this->intListValue = $_container4;
      $this->_type = ComplexUnionEnum::intListValue;
    }    
    if (idx($parsed, 'stringListValue') !== null) {
      $_json9 = $parsed['stringListValue'];
      $_container10 = Vector {};
      foreach($_json9 as $_key7 => $_value8) {
        $_elem11 = '';
        $_elem11 = $_value8;
        $_container10 []= $_elem11;
      }
      $this->stringListValue = $_container10;
      $this->_type = ComplexUnionEnum::stringListValue;
    }    
    if (idx($parsed, 'typedefValue') !== null) {
      $_json15 = $parsed['typedefValue'];
      $_container16 = Map {};
      foreach($_json15 as $_key13 => $_value14) {
        $_value17 = '';
        $_value17 = $_value14;
        $_container16[$_key13] = $_value17;
      }
      $this->typedefValue = $_container16;
      $this->_type = ComplexUnionEnum::typedefValue;
    }    
    if (idx($parsed, 'stringRef') !== null) {
      $this->stringRef = $parsed['stringRef'];
      $this->_type = ComplexUnionEnum::stringRef;
    }    
  }

}

enum VirtualComplexUnionEnum: int {
  _EMPTY_ = 0;
  thingOne = 1;
  thingTwo = 2;
}

/**
 * Original thrift struct:-
 * VirtualComplexUnion
 */
class VirtualComplexUnion implements \IThriftStruct, \IThriftUnion<VirtualComplexUnionEnum> {
  use \ThriftUnionSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'thingOne',
      'union' => true,
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'thingTwo',
      'union' => true,
      'type' => \TType::STRING,
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'thingOne' => 1,
    'thingTwo' => 2,
  };
  const int STRUCTURAL_ID = 8657642278595798833;
  /**
   * Original thrift field:-
   * 1: string thingOne
   */
  public ?string $thingOne;
  /**
   * Original thrift field:-
   * 2: string thingTwo
   */
  public ?string $thingTwo;
  protected VirtualComplexUnionEnum $_type = VirtualComplexUnionEnum::_EMPTY_;

  public function __construct(?string $thingOne = null, ?string $thingTwo = null  ) {
    $this->_type = VirtualComplexUnionEnum::_EMPTY_;
    if ($thingOne !== null) {
      $this->thingOne = $thingOne;
      $this->_type = VirtualComplexUnionEnum::thingOne;
    }
    if ($thingTwo !== null) {
      $this->thingTwo = $thingTwo;
      $this->_type = VirtualComplexUnionEnum::thingTwo;
    }
  }

  public function getName(): string {
    return 'VirtualComplexUnion';
  }

  public function getType(): VirtualComplexUnionEnum {
    return $this->_type;
  }

  public function set_thingOne(string $thingOne): this {
    $this->_type = VirtualComplexUnionEnum::thingOne;
    $this->thingOne = $thingOne;
    return $this;
  }

  public function get_thingOne(): string {
    invariant(
      $this->_type === VirtualComplexUnionEnum::thingOne,
      'get_thingOne called on an instance of VirtualComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->thingOne);
  }

  public function set_thingTwo(string $thingTwo): this {
    $this->_type = VirtualComplexUnionEnum::thingTwo;
    $this->thingTwo = $thingTwo;
    return $this;
  }

  public function get_thingTwo(): string {
    invariant(
      $this->_type === VirtualComplexUnionEnum::thingTwo,
      'get_thingTwo called on an instance of VirtualComplexUnion whose current type is %s',
      $this->_type,
    );
    return \nullthrows($this->thingTwo);
  }

  public function readFromJson(string $jsonText): void {
    $this->_type = VirtualComplexUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'thingOne') !== null) {
      $this->thingOne = $parsed['thingOne'];
      $this->_type = VirtualComplexUnionEnum::thingOne;
    }    
    if (idx($parsed, 'thingTwo') !== null) {
      $this->thingTwo = $parsed['thingTwo'];
      $this->_type = VirtualComplexUnionEnum::thingTwo;
    }    
  }

}

