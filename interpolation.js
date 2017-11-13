function interpolation(x, y) {
	let r = new Array(x.length);
	r.fill(new Number(0.0));
	for (let i = 0; i < x.length; i++) {
		w = [1.0];
		for (let j = 0; j < x.length; j++) {
			if (i != j) {
				w = conv(w, [1.0, -x[j]]);
				for (let k = 0; k < w.length; k++) {
					w[k] = w[k] / (x[i] - x[j]);
				}
			}
		}
		for (let k = 0; k < w.length; k++) {
			r[k] += y[i] * w[k];
		}
	}
	return r;
}

function conv(u, v) {
	m = u.length;
	n = v.length;
	w = [];
	for (let k = 1; k < (m + n); k++) {
		ww = 0.0;
		for (let j = 0; j < k; j++) {
			if (j > (m - 1) || (k-j-1) > (n -1)) {
				continue;
			}
			ww += u[j] * v[k-j-1];
		}
		w.push(ww);
	}
	return w;
}

console.log(
	interpolation(
		[1.515, 1.52, 1.525, 1.53, 1.535, 1.54, 1.545, 1.55, 1.555, 1.56],
		[0.788551, 0.789599, 0.790637, 0.791667, 0.792687, 0.793698, 0.7947, 0.795693, 0.796677, 0.797653]
	)
);

//(1.515,0.788551)(1.52,0.789599)(1.525,0.790637)(1.53,0.791667)(1.535,0.792687)(1.54,0.793698)(1.545,0.7947)(1.55,0.795693)(1.555,0.796677)(1.56,0.797653)