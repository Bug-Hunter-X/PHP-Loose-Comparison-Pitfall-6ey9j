function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

// The above function is unnecessarily verbose.  It can be simplified to:
function foo(a, b) {
  return a === b;
}