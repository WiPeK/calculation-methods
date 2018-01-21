function[w] = fibonacci(n)  
    if(n == 0)
        w = 0;
        return;
    end    
    if(n == 1)
        w = 1;
        return;
    end
    w = fibonacci(n - 1) + fibonacci(n - 2);
    return;
        end