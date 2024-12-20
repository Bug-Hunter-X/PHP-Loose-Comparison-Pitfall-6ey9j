# PHP Loose Comparison Pitfall

This repository demonstrates a common error in PHP related to loose comparison (`==`) versus strict comparison (`===`). Loose comparison can lead to unexpected behavior if not carefully handled.  The example shows a function that is unnecessarily complex due to using loose comparison when strict comparison would suffice. The solution demonstrates how to correctly use strict comparison to avoid this issue.

## Bug
The `bug.php` file contains a function that uses loose comparison.  This leads to less readable and potentially incorrect logic.

## Solution
The `bugSolution.php` file presents a cleaner and more accurate version that utilizes strict comparison to eliminate ambiguity.

## How to reproduce
1. Clone the repository.
2. Run the `bug.php` file. Note the result.
3. Run the `bugSolution.php` file. Observe how the revised function is cleaner and accurately reflects the intended comparison.