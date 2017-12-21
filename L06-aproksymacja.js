function aproksymacja(x, y) {
	let s0 = 0;
	let s1 = 0;
	let s2 = 0;
	let t0 = 0;
	let t1 = 0;

	for(let i = 0; i < x.length; i++) {
		s0++;
		s1 += x[i];
		s2 += Math.pow(x[i],2);
		t0 += y[i];
		t1 += x[i] * y[i];
	}

	const a0 = (t0 - (t1*s1)/s2)/(x.length - (s1*s1)/s2);
	const a1 = (t1 - a0*s1)/s2;

	let yn = [];
	for(let i = 0; i < x.length; i++) {
		yn.push(a0 + a1 * x[i]);
	}

	TESTER = document.getElementById('tester');

	const line = {
			x: x,
	    	y: yn,
	    	mode: 'lines',
			name: a0 + " + " + a1 + "x"
	};

	const points = {
			x: x,
	    	y: y,
	    	mode: 'markers',
			name: "Wylosowane punkty"
	};

	const data = [line, points];

	Plotly.plot( TESTER, data, {
	    margin: { t: 0 } } );
}
aproksymacja([2.95, 2.60, 2.69, 3.01, 2.44, 2.51, 3.37, 2.98], [113.8, 119.66, 106.28, 120, 107.43, 114.8, 115.53, 117.4]);
//https://codepen.io/anon/pen/eeLvzJ