// 1 + 0.8ysinx - 2y^2 [0;1] y(0) =0 h = 0.1


// function euler(fn, a, b, y0, h) {
// 	const n = Number(Math.ceil(b/h));
// 	const x = Array(n).fill(0);
// 	const y = Array(n).fill(0);
// 	const fxy = Array(n-1).fill(0);
// 	const hfxy = Array(n-1).fill(0);
// 	y[0] = y0;
// 	fxy[0] = fn(x[0], y[0]);
// 	hfxy[0] = fxy[0] * h;

// 	let iterator = 1;
// 	for (let i = 0; i <= b; i = i + 0.1) {
// 		x[iterator] = i;
// 		y[iterator] = y[iterator-1] + hfxy[iterator-1];
// 		fxy[iterator] =  fn(x[iterator], y[iterator]);
// 		hfxy[iterator] =  fxy[iterator] * h;
// 		iterator++;
// 	}
// 	return y[y.length - 1];
// }

// console.log(euler(test, 0, 0.6, 1, 0.1)); //test dla danych z instrukcji
// console.log(euler(custom, 0, 1, 0, 0.1));

function custom(x, y) {
	return 1 + 0.8 * y * Math.sin(x) - 2 * (y * y);
}

function test(x, y) {
	return 2 * x * y;
}

function rk4(fn, x0, y0, h, i) {
	let xi = x0;
	let yi = y0;
	for (let j = 1; j <= i; j++) {
		k1 = h * fn(xi, yi);
		k2 = h * fn(xi + 0.5*h, yi + 0.5*k1);
		k3 = h * fn(xi + 0.5*h, yi + 0.5*k2);
		k4 = h * fn(xi + h, yi + k3);

		dyi = (1.0/6.0) * (k1 + 2.0*k2 + 2.0*k3 + k4);

		xi += h;
		yi += dyi
	}
	return yi
}

console.log(rk4(custom, 0, 1, 0.1, 10));