function simpson(a, b, n, av) {
	h = (b - a) / n;
	xarr = [n];
    yarr = [n];
    xarr[0] = a;
    xarr[n-1] = b;

    for (let i = 1; i < n-1; i++) {
    	xarr[i] = xarr[0] + i*h;
    }

    for (let i = 0; i < n; i++) {
    	yarr[i] = av * xarr[i] * xarr[i] * Math.log(xarr[i]);
    }

    simres = yarr[0];

    for (let i = 1; i < (n-1); i++) {
    	simres += (i&1 ? 4 : 2) * yarr[i];
    }

    simres += yarr[n-1];
    return (h/3)*simres;
}

console.log(simpson(1.2, 2.2, 10, 2))