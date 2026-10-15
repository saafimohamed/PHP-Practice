# PHP Include vs Require Guide

This guide explains the differences and usage of `include` and `require` in PHP, based on the code example provided.

---

## Overview

Both `include` and `require` are used to insert the content of one PHP file into another PHP file before the server executes it. However, they handle errors differently when the target file cannot be found.

---

## 1. Include Statement

The `include` statement includes and evaluates a specified file. 

* **Behavior on Error:** If the file is **not found** or cannot be loaded, `include` throws a **Warning** (E_WARNING), but the rest of the script continues to execute.
* **Syntax Example:**
  ```php
  include "Home.php";

---
## 2. Require Statement

The `require` statement also includes and evaluates a specified file, ensuring that the code cannot run without it.

* **Behavior on Error:** If the file is **not found** or cannot be loaded, `require` throws a **Fatal Error** (E_COMPILE_ERROR) and **stops/halts** the entire script execution immediately.
* **Syntax Example:**
  ```php
  require "Home.php";
