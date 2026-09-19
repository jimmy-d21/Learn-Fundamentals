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
?>