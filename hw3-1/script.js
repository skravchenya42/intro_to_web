document.querySelector('#cels').onclick = celsToF;
document.querySelector('#your_name').onclick = greeting;

function celsToF() {
    let cels = +document.querySelector('.cels').value;
    let far = Number(cels) * (9 / 5) + 32
    document.write('Цельсиев:' + cels)
    document.write('Фаренгейтов:' + far.toFixed(1))
}

function greeting() {
    let name = document.querySelector('.name').value;
    console.log('Здарова, ' + name);
    document.write('Здарова, ' + name)
}
