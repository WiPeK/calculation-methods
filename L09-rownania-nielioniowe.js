//z117 2sin(x-0.6) = 1.5 - x

function custom(x) {
	return 2 * Math.sin(x-0.6) - 1.5 - x;
}

function bisekcja(a, b, e) {
	x1 = a;
	x2 = b;
	while (1) {
		x = (x1 + x2) / 2;
		y = custom(x);
		y1 = custom(x1);
		if (Math.abs(y) < e) {
			return x;
		} else {
			if (y * y1 > 0) {
				x1 = x;
			} else {
				x2 = x;
			}
		}
	}
}


console.log(bisekcja(1.0, 4.0, 0.01));
//nie wiem czy to ta karteczka
//todo nie wiem jakie a,b i e