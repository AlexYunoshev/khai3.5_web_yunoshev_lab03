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

    var dental = document.getElementById("Dental");
    var helth = document.getElementById("Helth");
    var pic = document.getElementById("DentalBg");
    var pos = 0;
    var id = setInterval(frame, 5);
    function frame() {
        if (dentalFlag && helthFlag && dentalbgFlag) {
            clearInterval(id);
        }
        pos++;
        if (pos < 277) {
            dental.style.marginLeft = pos + 'px';
        }
        else {
            dental.style.marginLeft = 277 + 'px';
            dentalFlag = true;
        }

        if (pos < 400) {
            helth.style.marginLeft = pos + 'px';
        }
        else {
            helth.style.marginLeft = 400 + 'px';
            helthFlag = true;
        }

        if (pos < 187) {
            pic.style.marginLeft = pos + 'px';
        }
        else {
            pic.style.marginLeft = 187 + 'px';
            dentalbgFlag = true;
        }
    }
}

