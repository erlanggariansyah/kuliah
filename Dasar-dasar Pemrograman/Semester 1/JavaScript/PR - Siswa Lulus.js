hasil_akhir = [
    {'nama':'Reza', 'nilai':70},
    {'nama':'Ciut', 'nilai':63},
    {'nama':'Dian', 'nilai':80},
    {'nama':'Badu', 'nilai':40}
];

function lulusAja(param) {
    for (i = 0; i < param.length; i++) {
        if (param[i].nilai > 65) {
            console.log(param[i].nama);
        }
    }
}

lulusAja(hasil_akhir);
