# PHP Array & Function Concepts

This repository contains basic to intermediate PHP concepts demonstrating how to work with arrays, multidimensional arrays, built-in array functions, custom functions, variable scope behaviors, and file inclusion techniques[cite: 6].

---
## Topics Covered

### 1. Multidimensional Arrays & Iteration
* **Multidimensional Arrays:** Storing nested arrays (arrays within arrays) to organize complex, structured data in rows and columns[cite: 6].
* **Array Iteration:** Traversing through nested array levels using `foreach` loops to access and extract individual values[cite: 6].

---
### 2. Built-in Array Functions
* **Type & Existence Checks:**
  * **`is_array()`**: Checks whether a given variable is an array[cite: 6].
  * **`in_array()`**: Searches for a specific value inside an array and returns a boolean response[cite: 6].
  * **`count()` / `sizeof()`**: Calculates and returns the total number of elements in an array[cite: 6].
* **String Conversion:**
  * **`implode()`**: Converts an array into a single string by joining its elements[cite: 6].
  * **`explode()`**: Splits a string into an array using a specified delimiter[cite: 6].
* **Array Manipulation:**
  * **`shuffle()`**: Randomizes the order of the elements inside an array[cite: 6].
  * **`array_merge()`**: Merges two or more arrays into a single array[cite: 6].
  * **`array_reverse()`**: Reverses the order of elements in an array[cite: 6].
* **Stack & Element Operations:**
  * **`array_push()`**: Pushes one or more elements onto the end of an array[cite: 6].
  * **`array_pop()`**: Pops and removes the last element from an array[cite: 6].
  * **`end()`**: Sets the internal pointer of an array to its last element and returns its value[cite: 6].

---
### 3. Custom Functions & Execution
* **Function Basics:** Creating reusable code blocks to perform specific tasks, promoting code reusability and maintainability[cite: 6].
* **Parameters vs Arguments:** Parameters are variables declared in the function header, whereas arguments are the real values passed when calling the function[cite: 6].
* **Return Values:** Returning output or calculated results from a function back to the caller using the `return` statement[cite: 6].
  
---
### 4. Parameter Handling & Passing Modes
* **Default Arguments:** Setting default parameter values in function signatures to handle calls where optional arguments are omitted.
* **Pass by Value (Default):** Passing arguments normally so that modifications inside the function do not affect the original variable[cite: 6].
* **Pass by Reference (`&`):** Passing variables using the `&` operator to directly modify the original variable's value outside the function[cite: 6].

---
### 5. Variable Scope & Superglobals
* **Local Scope:** Variables declared inside a function that can only be accessed within that function's execution context[cite: 6].
* **Global Scope:** Variables declared outside functions that require the `global` keyword or `$GLOBALS` array to be accessed inside a function[cite: 6].
* **Superglobals:** Built-in global variables (`$_GET`, `$_POST`, `$_SERVER`, `$GLOBALS`) that are always available across all scopes[cite: 6].


