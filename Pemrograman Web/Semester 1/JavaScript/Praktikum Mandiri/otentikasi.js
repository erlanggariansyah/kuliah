let uname = 'erlangga';
let password = 'integrity';

function login() {
    let un = document.getElementById('uname').value;
    let pw = document.getElementById('pw').value;

    if (un == uname && pw == password) {
        let a = confirm('Login sukses!');
        return true;
    } else {
        alert('Login gagal');
        return false;
    }
}
