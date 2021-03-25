function sortEvenOdd(arr) {
    return arr.sort( function(a, b)
    {
        return a % 2 - b % 2 || a - b;
    });
}
