function horner(a, x) {
	result = a[0];
	for (let i = 1; i < a.length; i++) {
		result = result * x + a[i];
	}
	return result;
}

console.log(horner([-0.5, 0.7, -1.1, 0, -0.5, 1], 2));