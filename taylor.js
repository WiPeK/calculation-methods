function taylor(x, y, h) {
    let tab = [];

    for(let i = 0; i < x.length; i++) {
        tab.push(new Array(2));
        tab[i] = [x[i], y[i]];
    }

    // for(let i = 2; i < (x.length+1); i++) {
    //     for(let j = x.length - i-2; j > -1; j--) {
    //         tab[j,i] = tab[j+1, i-1] - tab[j, i -1];
    //     }
    // }
    // console.log(tab);

    fx = 0;

    // const a = [1, -1/5, 1/30];

    for (let j = 2; j < (x.length+1); j++) {
        for (let i = (x.length-(j-2)); i > -1 ; i--) {
            tab[i, j] = tab[i+1, j-1] - tab[i, j-1];
        }
        // fx += a[i/2-1] * (tab[(x.length-i+1) / 2 - 1, i] + tab[(x.length - i + 1) / 2, i]) / 2;
        fx += 1/(j-2) * tab[x.length + 2-j, j];
    }
    console.log(fx);
    return fx * 1/h;
}

console.log(taylor([0, 0.2, 0.4, 0.6, 0.8, 1, 1.2], [1, 1.221403, 1.491825, 1.822119, 2.225541, 2.718282, 3.320117], 0.2));