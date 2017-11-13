function[r] = interpolation(x, y)
  r = 0;
  for i = 1:size(x,2)
    w = 1;
    for j = 1:size(x,2)
      if j ~= i
        w = conv(w, [1, -x(j)]) / (x(i) - x(j));
      end
    end
    r = r + y(i) * w;
  end
end

% x = interpolation([1.515, 1.52, 1.525, 1.53, 1.535, 1.54, 1.545, 1.55, 1.555, 1.56], [0.788551, 0.789599, 0.790637, 0.791667, 0.792687, 0.793698, 0.7947, 0.795693, 0.796677, 0.797653])