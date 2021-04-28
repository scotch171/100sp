
//Первый вариант со сменой цвета внутри класса
function changeColorVanila()
{
    document.getElementsByClassName('c')[0].style.color = "green";
}

//Добавляем класс родителю, чтобы переопределить цвет
function addClass()
{
    document.getElementsByClassName('c')[0].parentNode.classList.add('a')
}

//Решение такое-же как в первом варианте, но на Jquery
function changeColorJQ()
{
    $('.c').css('color', 'green');
}