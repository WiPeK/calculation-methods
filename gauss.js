function gauss(a, b) {
    n - a[0].length;
    c = a;

    for (int i = 0; i < b[0].length; i++) {
        c[i].push(b[0][i]);
    }

    for (int s = 1; s < n; s++) {
        for (int i = s+1; i < n+1; i++) {
            for (int j = s+1; j < n+2; j++) {
                c[i-1][j-1] -= c[i-1][s-1] / c[s-1][s-1] * c[s-1][j-1];
            }
        }
    }




}