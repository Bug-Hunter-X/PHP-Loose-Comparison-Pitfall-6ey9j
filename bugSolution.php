function foo(a, b) {
  return a === b; // Use strict comparison
}

// Example usage:
var result1 = foo(1, "1"); // Returns false (strict comparison)
var result2 = foo(1, 1); // Returns true

echo "Result 1: " . ($result1 ? "true" : "false") . "\n";
echo "Result 2: " . ($result2 ? "true" : "false");