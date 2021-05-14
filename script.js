const searchWrapper = document.querySelector('.search-input');
const inputBox = searchWrapper.querySelector('input');
const suggBox = searchWrapper.querySelector('.autocom-box');

inputBox.onkeyup = (e) => {
    let userdata = e.target.value;
    let emptyArray = [];
    if (userdata) {
        emptyArray = suggestions.filter((data) => {
            return data.toLocaleLowerCase().startsWith(userdata.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data) => {
            return data = '<li class="autocom-box">' + data + '</li>';
        });
        console.log(emptyArray);
        searchWrapper.classList.add('active');
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll('.autocom-box');
        for (let i = 0; i < allList.length; i++) {
            allList[i].setAttribute('onclick', 'select(this)')
        }
    } else {
        searchWrapper.classList.remove('active');
    }
}

function select(element) {
    let selectUserData = element.textContent;
    inputBox.value = selectUserData;
    searchWrapper.classList.remove('active');
}

function showSuggestions(list) {
    let listData;
    if (!list.length) {
        userValue = inputBox.value;
        listData = '<li class="autocom-box">' + userValue + '</li>';
    } else {
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}