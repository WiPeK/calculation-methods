function[] = aproksymacja(x, y, m)
    clc;
    s = zeros([1 2*m+1]);
    t = zeros([1 m+1]);
    
    for i = 1:2*m+1
      for j = 1:size(x,2)
        s(i) = s(i) + x(j)^(i-1);
      end
    end
    
    for i = 1:m+1
      for j = 1:size(x,2)
        t(i) = t(i) + x(j)^(i-1) * y(j);
      end
    end
    
    m2 = zeros([m+1 m+2]);
    
    for i = 1:m+1
      for j = 1:m+1
        m2(j,i) = s(1,j+i-1);          
      end
    end
    m2(1:m+1,m+2) = t;
    
    m2
    a = m2(1:m+1,1:m+1)
    b = m2(1:m+1,m+2)
    q = inv(a)*b
    
    x2 = -10:20;
    y2 = zeros([1 size(x2,2)]);
    for i = 1:size(x2,2)
      for j = 1:size(q,1)
        y2(i) = y2(i) + q(j) * x2(i)^(j-1);
      end
    end
    
    plot(x,y,'*',x2,y2);
    xlabel('x');
    ylabel('y=Q(x)');
    legend('dane','aproksymacja')
end

%aproksymacja([2.95, 2.60, 2.69, 3.01, 2.44, 2.51, 3.37, 2.98], [113.8, 119.66, 106.28, 120, 107.43, 114.8, 115.53, 117.4], 1)