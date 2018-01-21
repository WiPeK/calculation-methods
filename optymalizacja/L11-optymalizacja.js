//o 47 (x-1)^3 * (x+2)^2 * (x-3) [0.5, 5] fibonnacci

function fibonacciElement(val) {
    let fib = [0, 1];

    if(fib[0] > val) {
        return fib[0];
    }

    if(fib[1] > val) {
        return fib[1];
    }

    let i = 2;
    do {
        fib[i] = fib[i - 2] + fib[i - 1];
        i++;
    } while(fib[i] > val);
    return i;
}

function custom(x) {
    return Math.pow((x-1), 3) * Math.pow((x+2), 2) * (x-3);
}

function fibonacci(n)  {
    if(n === 0)
        return 0;
    else if(n === 1)
        return 1;
    else
        return fibonacci(n - 1) + fibonacci(n - 2);
}

function optymalizacja(f, a, b, e) {
    const l = (b - a) / e;
    const k = fibonacciElement(Math.round(l));
    let aArray = new Array();
    let bArray = new Array();
    let cArray = new Array();
    let dArray = new Array();
    aArray[0] = a;
    bArray[0] = b;
    cArray[0] = bArray[0] - (((fibonacci(k-1)/fibonacci(k)))*(bArray[0] - aArray[0]));
    dArray[0] = aArray[0] + bArray[0] - cArray[0];

    for (let i = 0; i < (k-4); i++) {
        if (f(cArray[i]) < f(dArray[i])) {
            aArray[i+1] = aArray[i];
            bArray[i+1] = dArray[i];
        } else {
            bArray[i+1] = bArray[i];
            aArray[i+1] = c[i];
        }
        cArray[i+1] = bArray[i+1] - ((fibonacci(k-i-2)/fibonacci(k-i-1)) * (bArray[i+1] - aArray[i+1]));
        dArray[i+1] = aArray[i+1] + bArray[i+1] - cArray[i+1];
    }
    return cArray[k-3];
}

console.log(optymalizacja(custom, 0.5, 5, 0.01));