function fun1() {
    let radio=document.getElementsByName('sex');
    if (radio[0].checked) {
        alert('Выбран мужской пол');
    }
    else {
        alert('Выбран женский пол')
    }
}