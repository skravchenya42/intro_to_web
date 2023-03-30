document.querySelector('button').onclick = nameOk;

function nameOk() {
    console.log('name ok');
    let name = document.querySelector('.name').value;
    console.log(name);
    document.querySelector('.output').innerHTML = name;
}