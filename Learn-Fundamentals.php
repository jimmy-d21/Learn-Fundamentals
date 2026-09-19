<?php
/*
  ==============================================================================
  LEARN FUNDAMENTALS: PHP Core Mastery Guide & Cheat Sheet
  ==============================================================================
  Repository Folder Name: php-core-fundamentals
  File Name: learn_fundamentals.php
  
  This single file covers the 6 foundational topics from the learning roadmap:
  1. Basic PHP Syntax
  2. Variables and Scope
  3. Data Types
  4. Casting Data Types
  5. Output and Debugging (echo, print, var_dump, print_r)
  6. Constants
  ==============================================================================
*/

// =============================================================================
// TOPIC 1: BASIC PHP SYNTAX
// =============================================================================
/*
  - What it is: The grammar, rules, comments, and tags governing PHP execution.
  - Why it is important: Ensures code parses without syntax/parse errors.
  - Difficulty: Beginner
*/

// Single-line comment example
# Alternative single-line comment

/*
  Multi-line comment block:
  Keywords/functions are CASE-INSENSITIVE (echo == ECHO).
  Variables are CASE-SENSITIVE ($name != $NAME).
*/
echo "==========================================\n";
echo "1. BASIC PHP SYNTAX DEMO\n";
echo "==========================================\n";

$appName = "PHP Fundamentals App";

// ECHO is case-insensitive, variable interpolation prints value
echo "App Name: " . $appName . "\n"; 
// RESULT: App Name: PHP Fundamentals App

// =============================================================================
// TOPIC 2: VARIABLES AND SCOPE
// =============================================================================
/*
  - What it is: Storage containers ($) and their visibility (Local, Global, Static).
  - Why it is important: Prevents variable naming collisions and retains state cleanly.
  - Difficulty: Beginner to Intermediate
*/

echo "\n==========================================\n";
echo "2. VARIABLES AND SCOPE DEMO\n";
echo "==========================================\n";

$globalUser = "Alex"; // Global Scope variable

function testVariableScope() {
    global $globalUser;      // Imports global variable into local function scope
    static $visitCounter = 0; // Static variable retains value across calls
    $visitCounter++;
    
    $localStatus = "Active";  // Local Scope variable
    
    // Double quotes evaluate (interpolate) variables
    echo "User: $globalUser | Status: $localStatus | Visit #$visitCounter\n";
}

testVariableScope(); 
// RESULT: User: Alex | Status: Active | Visit #1

testVariableScope(); 
// RESULT: User: Alex | Status: Active | Visit #2

// Single quotes output text literally without evaluating variables
echo 'Literal output test: $globalUser will not evaluate here.' . "\n";
// RESULT: Literal output test: $globalUser will not evaluate here.


// =============================================================================
// TOPIC 3: DATA TYPES
// =============================================================================
/*
  - What it is: Data classification (String, Int, Float, Bool, Array, Object, Null, Resource).
  - Why it is important: Determines allowed mathematical and logical operations.
  - Difficulty: Beginner
*/

echo "\n==========================================\n";
echo "3. DATA TYPES DEMO\n";
echo "==========================================\n";

$strVal   = "PHP Programming"; // String
$intVal   = 42;                // Integer
$floatVal = 99.99;             // Float / Double
$boolVal  = true;              // Boolean
$arrayVal = ["PHP", "MySQL"];  // Array
$nullVal  = null;              // NULL

echo "String Type: " . gettype($strVal) . "\n";
// RESULT: String Type: string

echo "Integer Type: " . gettype($intVal) . "\n";
// RESULT: Integer Type: integer

echo "Float Type: " . gettype($floatVal) . "\n";
// RESULT: Float Type: double

echo "Is intVal an integer? " . (is_int($intVal) ? "Yes" : "No") . "\n";
// RESULT: Is intVal an integer? Yes

// =============================================================================
// TOPIC 4: CASTING DATA TYPES
// =============================================================================
/*
  - What it is: Explicit conversion from one data type to another.
  - Syntax: (int), (float), (string), (bool), (array), (object)
  - Why it is important: Sanitizes and prepares string inputs for calculations/DB operations.
  - Difficulty: Intermediate
*/

echo "\n==========================================\n";
echo "4. CASTING DATA TYPES DEMO\n";
echo "==========================================\n";

$rawInput = "15.75 items";

$castedInt   = (int) $rawInput;   // Truncates non-numeric suffix
// RESULT: 15

$castedFloat = (float) $rawInput; // Preserves floating point value
// RESULT: 15.75

$castedBool  = (bool) "";         // Empty string evaluates to false
// RESULT: false

$userAssocArray = ["username" => "dev_john", "role" => "Admin"];
$userObject     = (object) $userAssocArray; // Converts array to stdClass object

echo "Raw String: '$rawInput'\n";
// RESULT: Raw String: '15.75 items'

echo "Casted (int): $castedInt\n";
// RESULT: Casted (int): 15

echo "Casted (float): $castedFloat\n";
// RESULT: Casted (float): 15.75

echo "Accessing Property from Casted Object: " . $userObject->username . "\n";
// RESULT: Accessing Property from Casted Object: dev_john

// =============================================================================
// TOPIC 5: OUTPUT AND DEBUGGING
// =============================================================================
/*
  - What it is: Language constructs & functions to display content and inspect variables:
    * echo: Language construct, fast, accepts multiple parameters, no return value.
    * print: Language construct, returns 1 (can be used in expressions).
    * var_dump(): Output detailed type, length, and value information (Primary Debug Tool).
    * print_r(): Output human-readable information for arrays and objects.
  - Why it is important: Critical for application development, debugging, and troubleshooting.
  - Difficulty: Beginner
*/

echo "\n==========================================\n";
echo "5. OUTPUT AND DEBUGGING DEMO\n";
echo "==========================================\n";

// 1. echo (Outputs multiple string arguments separated by commas)
echo "echo: ", "Learning ", "PHP ", "Output\n";
// RESULT: echo: Learning PHP Output

// 2. print (Always returns 1, can be used in expressions)
$result = print("print: Outputting single string\n");
// RESULT: print: Outputting single string

echo "print return value: $result\n\n";
// RESULT: print return value: 1

// 3. var_dump() — Highly detailed structure inspection
echo "--- var_dump() Output ---\n";
var_dump($arrayVal);
/*
  RESULT:
  array(2) {
    [0]=>
    string(3) "PHP"
    [1]=>
    string(5) "MySQL"
  }
*/

var_dump($boolVal);
/*
  RESULT:
  bool(true)
*/

// 4. print_r() — Human-readable array structure inspection
echo "\n--- print_r() Output ---\n";
print_r($userAssocArray);
/*
  RESULT:
  Array
  (
      [username] => dev_john
      [role] => Admin
  )
*/

// =============================================================================
// TOPIC 6: CONSTANTS
// =============================================================================
/*
  - What it is: Identifiers for simple values that CANNOT change during script execution.
  - Syntax:
    * define("NAME", value): Global scope, defined at runtime.
    * const NAME = value: Defined at compile-time, usable in global/class/namespace scopes.
  - Why it is important: Holds fixed config values (DB settings, API keys, version numbers).
  - Difficulty: Beginner
*/

echo "\n==========================================\n";
echo "6. CONSTANTS DEMO\n";
echo "==========================================\n";

// Define runtime global constant
define("SITE_URL", "https://example.com");

// Define compile-time constant
const APP_VERSION = "2.1.0";

echo "Site URL: " . SITE_URL . "\n";
// RESULT: Site URL: https://example.com

echo "App Version: " . APP_VERSION . "\n";
// RESULT: App Version: 2.1.0

// Magic Constants (Built-in predefined constants)
echo "Current Line Number: " . __LINE__ . "\n";
// RESULT: Current Line Number: 185 (Outputs current file line integer)

echo "Current File Path: " . __FILE__ . "\n";
// RESULT: Current File Path: /path/to/php-core-fundamentals/learn_fundamentals.php

echo "\n==========================================\n";
echo "ALL FUNDAMENTALS EXECUTED SUCCESSFULLY!\n";
echo "==========================================\n";

?>