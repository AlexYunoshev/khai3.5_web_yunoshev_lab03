var dentalFlag = false;
var helthFlag = false;
var dentalbgFlag = false;

function reg() {
    var radio=document.getElementsByName('sex');
    var day = document.getElementById('input-day').value;
    var month = document.getElementById('input-month').value;
    var year = document.getElementById('input-year').value;
    var now = new Date();
    var today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
    var dob = new Date(year, month, day);
    var dobNow = new Date(today.getFullYear(), dob.getMonth() - 1, dob.getDate());
    var age = today.getFullYear() - dob.getFullYear();
    var name = document.getElementsByName('input-name');

    if (today < dobNow){
        age = age - 1;
    }

    if (radio[0].checked == true && age < 21 || radio[1].checked == true && age < 18) {
        alert('Нельзя зарегистрироваться');
    }
    else {
        alert('Регистрация прошла успешно');
    }

    
}

function anim() {
    document.getElementById('Dental').style.marginLeft = 0;
    document.getElementById('Helth').style.marginLeft = 0;
    document.getElementById('DentalBg').style.marginLeft = 0;
 

    var timer = setInterval(function(){
        if (dentalFlag == true && helthFlag == true && dentalbgFlag == true) {
            clearInterval(timer); 
            return;
        }
        draw();
    }, 1000); 


}

function draw() {
    var dental = document.getElementById('Dental');
    var helth = document.getElementById('Helth');
    var pic = document.getElementById('DentalBg');

    if (dental.style.left < 277){
        dental.style.left = 1 + 'px';
    }
    else {
        (dental.style.left = 277 + 'px');
        dentalFlag = true;
    }



    if (helth.style.left < 400) {
        helth.style.left = 1 + 'px';
    }
    else {
        (helth.style.left = 400 + 'px');
        helthFlag = true;
    }



    if (pic.style.left < 187) {
        pic.style.left = 1 + 'px';
    }
    else {
        (pic.style.left = 187 + 'px');
        dentalbgFlag = true;

    } 
    

}