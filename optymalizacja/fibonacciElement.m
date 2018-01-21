function[i] = fibonacciElement(val) 
        fib = zeros(1, val);
        fib(1) = 0;
        fib(2) = 1;

        if(fib(1) > val) 
            i = fib(1);
            return
        end

        if(fib(1) > val)
            i = fib(2);
            return
        end

        i = 3;
        while true
            fib(i) = fib(i - 2) + fib(i - 1);
       
            if (fib(i) > val)
                break;
            end
            i = i + 1;
        end
    end