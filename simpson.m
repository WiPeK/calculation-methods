function[w] = simpson(a, b, n, av)
    h = (b - a) / n;
    
    xarr = [b];
    yarr = [b];
    xarr(1) = a;
    xarr(b) = b;
    
    for i=2:(b-1)
       xarr(i) = xarr(1) + (i-1)*h;
    end
    
    for i=1:b
       yarr(i) = horner(av, xarr(i)); 
    end
    
    simres = yarr(1);
    
    for i=2:(b-1)
        if mod(i, 2) == 0
            simres = simres + 4 * yarr(i);
        else
            simres = simres + 2 * yarr(i);
        end
    end
    
    simres = simres + yarr(b);
    w = (h / 3) * simres;
end

% 2.6x^2 * lnx [1,2; 2,2] n=10