% y = -0.5x^5 + 0.7x^4 - 1.1x^3 - 0.5x + 1 x = 2.0

function[w] = horner(a, x)
    w = a(1);
    
    for i = 2:(length(a))
        w = w * x + a(i);
    end
end