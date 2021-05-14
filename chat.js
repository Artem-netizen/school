const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox = document.querySelector(".chat-box");

form.onsubmit = (e) => {
    e.preventDefault();
}

sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/insert-chat.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    inputField.value = ""; //после того, как сообщение отправлено в базу данных, оставим поле ввода пустым
                    scrollToBottom();

                    // let data = xhr.response;
                    // console.log(data);
                    // if (data == "Успешно") {
                    //     location.href = "users.php";
                    // } else {
                    //     errorText.style.display = "block";
                    //     errorText.textContent = data;
                    // }
                }
            }
        }
        // мы должны отправить данные формы через ajax на php
    let formData = new FormData(form); //Создали новую переменную formData объекта
    xhr.send(formData); //Отправляем форму с data на php
}

chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}
chatBox.onmouseleave = () => {
    chatBox.classList.remove("active");
}

setTimeout(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./php/get-chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                chatBox.innerHTML = data;
                if (!chatBox.classList.contains("active")) {
                    scrollToBottom();
                }
            }
        }
    }

    // мы должны отправить данные формы через ajax на php
    let formData = new FormData(form); //Создали новую переменную formData объекта
    xhr.send(formData); //Отправляем форму с data на php
}, 500); //эта функция будет запускаться через 500 мс.


function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}