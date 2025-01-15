# Momento PHP
``Registro de progresso do PHP.`` 
## What is a PHP File?

- **PHP files** can contain **text**, **HTML**, **CSS**, **JavaScript**, and **PHP code**.  
- **PHP code** is executed on the server, and the result is returned to the browser as plain **HTML**.  
- **PHP files** have the extension ".php".

---

## Rules for PHP Variables

1. A variable starts with the `$` sign, followed by the name of the variable.
2. A variable name must start with:
   - A letter, or
   - The underscore (`_`) character.
3. A variable name **cannot** start with a number.
4. A variable name can only contain:
   - Alpha-numeric characters (`A-z`, `0-9`), and
   - Underscores (`_`).
5. Variable names are **case-sensitive**:
   - `$age` and `$AGE` are considered two different variables.
  
---
  
## **PHP echo and print Statements**

- **`echo`** and **`print`** are more or less the **same**.  
  Both are used to **output data** to the screen.

### **Differences Between `echo` and `print`**

1. **Return Value**:  
   - `echo` has **no return value**.  
   - `print` has a **return value of 1**, so it can be used in **expressions**.

2. **Parameters**:  
   - `echo` can take **multiple parameters** (though this usage is rare).  
   - `print` can take only **one argument**.

3. **Performance**:  
   - `echo` is marginally **faster** than `print`.

```php
// Examples:
echo "This is echo.";
print "This is print.";


