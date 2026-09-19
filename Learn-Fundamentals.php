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

?>