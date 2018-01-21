function[w] = optymalizacja(f, a, b, e) 
    l = (b - a) / e;
    k = fibonacciElement(round(l));
    aArray = single(rand(l, 1));
    bArray = single(rand(l, 1));
    cArray = single(rand(l, 1));
    dArray = single(rand(l, 1));
    disp(a);
    aArray(1) = a;
    bArray(1) = b;
    cArray(1) = bArray(1) - (((fibonacci(k-1)/fibonacci(k)))*(bArray(1) - aArray(1)));
    dArray(1) = aArray(1) + bArray(1) - cArray(1);

    for i=1:(k-4)
        if (f(cArray(i)) < f(dArray(i))) 
            aArray(i+1) = aArray(i);
            bArray(i+1) = dArray(i);
         else 
            bArray(i+1) = bArray(i);
            aArray(i+1) = cArray(i);
        end
        cArray(i+1) = bArray(i+1) - ((fibonacci(k-i-2)/fibonacci(k-i-1)) * (bArray(i+1) - aArray(i+1)));
        dArray(i+1) = aArray(i+1) + bArray(i+1) - cArray(i+1);
    end
    w = cArray(k-3);
end