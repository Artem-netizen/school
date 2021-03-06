const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/signup.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data == "Успешно") {
                        location.href = "./users.php";
                    } else {
                        errorText.textContent = data;
                        errorText.style.display = "block";
                    }
                }
            }
        }
        // мы должны отправить данные формы через ajax на php
    let formData = new FormData(form); //Создали новую переменную formData объекта
    xhr.send(formData); //Отправляем форму с data на php
}