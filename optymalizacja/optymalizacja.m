function[w] = optymalizacja(f, a, b, e) 
    l = (b - a) / e;
    k = fibonacciElement(round(l));
    aArray = (l);
    bArray = (l);
    cArray = (l);
    dArray = (l);
    aArray(0) = a;
    bArray(0) = b;
    cArray(0) = bArray(0) - (((fibonacci(k-1)/fibonacci(k)))*(bArray(0) - aArray(0)));
    dArray(0) = aArray(0) + bArray(0) - cArray(0);

    for i=0:(k-4)
        if (f(cArray(i)) < f(dArray(i))) 
            aArray(i+1) = aArray(i);
            bArray(i+1) = dArray(i);
         else 
            bArray(i+1) = bArray(i);
            aArray(i+1) = c(i);
        end
        cArray(i+1) = bArray(i+1) - ((fibonacci(k-i-2)/fibonacci(k-i-1)) * (bArray(i+1) - aArray(i+1)));
        dArray(i+1) = aArray(i+1) + bArray(i+1) - cArray(i+1);
    end
    w = cArray(k-3);
        end