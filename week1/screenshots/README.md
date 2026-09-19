# Differences Between echo and print
echo: Faster than print and can take multiple parameters (multiple strings separated by commas).
print: Has a return value of 1 (so it can be used in expressions), but is slightly slower than echo.
## Defining and Using Constants &Concatenation Operator:
(Dot Operator): Used to concatenate combine two or more strings or variables together into a single text output.
### Conditional Statements(if, else, and elseif)
if: Checks if a condition is True. If it is, the code inside its block executes.
elseif: Checks an alternative condition if the preceding if or elseif condition evaluated to False. Multiple elseif statements can be chained together.
else: The default fallback block. It executes only when all preceding if and elseif conditions evaluate to False.
### switch Statement:
Expression Matching: Evaluates a value once and tests it against each case using loose equality (==).

case: Defines a target value and the code block to run if matched.

break: Terminates the switch block once a match is executed, preventing code execution from leaking into subsequent cases (fall-through).

default: The optional fallback block that executes if no case matches the expression.

