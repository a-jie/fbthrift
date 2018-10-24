<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift enum:-
 * MyEnum
 */
enum MyEnum: int {
  MyValue1 = 0;
  MyValue2 = 1;
}

/**
 * Original thrift exception:-
 * MyException1
 */
class MyException1 extends \TException implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'message',
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'code',
      'type' => \TType::I32,
      'enum' => 'MyEnum',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'message' => 1,
    'code' => 2,
  };
  const int STRUCTURAL_ID = 7711048519845400283;
  /**
   * Original thrift field:-
   * 1: string message
   */
  public string $message;
  /**
   * Original thrift field:-
   * 2: enum module.MyEnum code
   */
  /* HH_FIXME[4110] conflicting definition with parent */
  /* HH_FIXME[4236] conflicting definition with parent */
  public MyEnum $code;

  public function __construct(?string $message = null, ?MyEnum $code = null  ) {
    parent::__construct();
    if ($message === null) {
      $this->message = '';
    } else {
      $this->message = $message;
    }
    if ($code === null) {
      $this->code = MyEnum::MyValue1;
    } else {
      $this->code = $code;
    }
  }

  public function getName(): string {
    return 'MyException1';
  }

}

/**
 * Original thrift exception:-
 * MyException2
 */
class MyException2 extends \TException implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'message',
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'code',
      'type' => \TType::I32,
      'enum' => 'MyEnum',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'message' => 1,
    'code' => 2,
  };
  const int STRUCTURAL_ID = 3067783023341493113;
  /**
   * Original thrift field:-
   * 1: string message
   */
  public string $message;
  /**
   * Original thrift field:-
   * 2: enum module.MyEnum code
   */
  /* HH_FIXME[4110] conflicting definition with parent */
  /* HH_FIXME[4236] conflicting definition with parent */
  public MyEnum $code;

  public function __construct(?string $message = null, ?MyEnum $code = null  ) {
    parent::__construct();
    if ($message === null) {
      $this->message = '';
    } else {
      $this->message = $message;
    }
    if ($code === null) {
      $this->code = MyEnum::MyValue1;
    } else {
      $this->code = $code;
    }
  }

  public function getName(): string {
    return 'MyException2';
  }

}

/**
 * Original thrift exception:-
 * MyException3
 */
class MyException3 extends \TException implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'message',
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'code',
      'type' => \TType::I32,
      'enum' => 'MyEnum',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'message' => 1,
    'code' => 2,
  };
  const int STRUCTURAL_ID = 3517193566312570591;
  /**
   * Original thrift field:-
   * 1: string message
   */
  public string $message;
  /**
   * Original thrift field:-
   * 2: enum module.MyEnum code
   */
  /* HH_FIXME[4110] conflicting definition with parent */
  /* HH_FIXME[4236] conflicting definition with parent */
  public MyEnum $code;

  public function __construct(?string $message = null, ?MyEnum $code = null  ) {
    parent::__construct();
    if ($message === null) {
      $this->message = '';
    } else {
      $this->message = $message;
    }
    if ($code === null) {
      $this->code = MyEnum::MyValue1;
    } else {
      $this->code = $code;
    }
  }

  public function getName(): string {
    return 'MyException3';
  }

}

/**
 * Original thrift exception:-
 * MyException4
 */
class MyException4 extends \TException implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'message',
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'code',
      'type' => \TType::I32,
      'enum' => 'MyEnum',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'message' => 1,
    'code' => 2,
  };
  const int STRUCTURAL_ID = 3517193566312570591;
  /**
   * Original thrift field:-
   * 1: string message
   */
  public string $message;
  /**
   * Original thrift field:-
   * 2: enum module.MyEnum code
   */
  /* HH_FIXME[4110] conflicting definition with parent */
  /* HH_FIXME[4236] conflicting definition with parent */
  public MyEnum $code;

  public function __construct(?string $message = null, ?MyEnum $code = null  ) {
    parent::__construct();
    if ($message === null) {
      $this->message = '';
    } else {
      $this->message = $message;
    }
    if ($code === null) {
      $this->code = MyEnum::MyValue2;
    } else {
      $this->code = $code;
    }
  }

  public function getName(): string {
    return 'MyException4';
  }

}

/**
 * Original thrift exception:-
 * MyException5
 */
class MyException5 extends \TException implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'message',
      'type' => \TType::STRING,
      ],
    2 => dict[
      'var' => 'code',
      'type' => \TType::I64,
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'message' => 1,
    'code' => 2,
  };
  const int STRUCTURAL_ID = 7335721753390449361;
  /**
   * Original thrift field:-
   * 1: string message
   */
  public string $message;
  /**
   * Original thrift field:-
   * 2: i64 code
   */
  public int $code;

  public function __construct(?string $message = null, ?int $code = null  ) {
    parent::__construct();
    if ($message === null) {
      $this->message = '';
    } else {
      $this->message = $message;
    }
    if ($code === null) {
      $this->code = 0;
    } else {
      $this->code = $code;
    }
  }

  public function getName(): string {
    return 'MyException5';
  }

}

