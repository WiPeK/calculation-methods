//R101
//const xy = [0, 0.2, 0.4, 0.6, 0.8, 1, 1.2];
//const yy = [1, 1.221403, 1.491825, 1.822119, 2.225541, 2.718282, 3.320117]

function taylor(x, y, h) {
	fx = 0;
	let tab = new Array(x.length+1).fill(new Array(x.length).fill(0));

	for (let i = 0; i < x.length; i++) {
		tab[i][0] = x[i];
		tab[i][1] = y[i];
	}
	console.log('----');

	for (let j = 2; j < (x.length+1); j++) {
		for (let i = (x.length - (j-2)); i >= 0; i--) {
			console.log(j);
			console.log(i);
			tab[j, i] = tab[j-1, i+1] - tab[j-1, i];
			console.log('**')
			console.log(tab[i,j]);
			console.log('|||||');
		}
		fx = fx + 1/(j-2) * tab[x.length + 2 - j, j];
		console.log(fx);
	}
	return fx * 1/h;
}

console.log(taylor([0, 0.2, 0.4, 0.6, 0.8, 1, 1.2], [1, 1.221403, 1.491825, 1.822119, 2.225541, 2.718282, 3.320117], 0.2));