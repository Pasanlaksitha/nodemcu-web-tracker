
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;")
});

document.addEventListener('click', e => {
    cursor.classList.add("expand");
    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 500);
});



function getCode() {
    let d = CryptoJS.AES.decrypt("U2FsdGVkX1+DMu/W6CsEBWI9f+PMEe4Jdt/RIuBunwqSBcVSVnhAtev+5Sn+fRhI", "stegohide");
    return d.toString(CryptoJS.enc.Utf8);
}