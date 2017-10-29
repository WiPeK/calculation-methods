function simpson(a, b, n, av) {
	h = (b - a) / n;
	xarr = [b];
    yarr = [b];
    xarr[0] = a;
    xarr[b-1] = b;

    for (let i = 1; i < b-1; i++) {
    	xarr[i] = xarr[0] + i*h;
    }

    console.log(xarr);

    for (let i = 0; i < b; i++) {
    	yarr[i] = horner(av, xarr[i]);
    }

    console.log(yarr);

    simres = yarr[0];

    for (let i = 1; i < (b-1); i++) {
    	simres += (i&1 ? 4 : 2) * yarr[i];
    }

    simres += yarr[b-1];
    return (h/3)*simres;
}

function horner(a, x) {
	result = a[0];
	for (let i = 1; i < a.length; i++) {
		result = result * x + a[i];
	}
	return result;
}

console.log(simpson(1, 5, 4, [1, 3, 2]))