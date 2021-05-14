let counter = 0;

/*Обозначаем все варианты ответов*/
const option1 = document.querySelector('.option1'),
    option2 = document.querySelector('.option2'),
    option3 = document.querySelector('.option3'),
    option4 = document.querySelector('.option4');

/*в переменной optionElements - хранит 4 option*/
const optionElements = document.querySelectorAll('.option');
const question = document.getElementById('question'),
    numberOfQuestion = document.getElementById('number-of-question'),
    numberOfAllQuestion = document.getElementById('number-of-all-questions');

let indexOfQuestion, //индекс текущего вопроса
    indexOfPage = 0; //индекс страниц

const answersTracker = document.getElementById('answers-tracker');
const btnNext = document.getElementById('btn-next');

let score = 0; //Итоговый результат опроса

const correctAnswer = document.getElementById('correct-answer'),
    numberOfAllQuestion2 = document.getElementById('number-of-all-questions-2'),
    btnTryAgain = document.getElementById('btn-try-again');

const questions = [{
        question: 'Полнота и актуальность информации об организации и ее деятельности:',
        options: [
            'Отлично, полностью удовлетворен(а) (информация размещена полностью, хорошо структурирована, актуальна);',
            'В целом хорошо, за исключением незначительных недостатков (информация представлена полностью, хорошо структурирована, частично не актуальна);',
            'Удовлетворительно, но со значительными недостатками (информация представлена полностью, плохо структурирована, не актуальна);',
            'Плохо, не соответствует минимальным требованиям (информация представлена не полностью, не структурирована, не актуальна);',
            'Неудовлетворительно, не устраивает (информация отсутствует).',
        ],
        rightAnswer: 1
    },
    {
        question: 'Наличие сведений о педагогических работниках организации:',
        options: [
            'Отлично, полностью удовлетворен(а) (информация размещена полностью, хорошо структурирована, актуальна);',
            'В целом хорошо, за исключением незначительных недостатков (информация представлена полностью, хорошо структурирована, частично не актуальна);',
            ' Удовлетворительно, но со значительными недостатками (информация представлена полностью, плохо структурирована, не актуальна);',
            'Плохо, не соответствует минимальным требованиям (информация представлена не полностью, не структурирована, не актуальна);',
            'Неудовлетворительно, не устраивает (информация отсутствует',
        ],
        rightAnswer: 1
    },
    {
        question: 'Материально-техническое и информационное обеспечение организации:',
        options: [
            'Отлично, полностью удовлетворен(а) (имеются бумажные средства обучения, читальные и методические кабинеты, электронные средства обучения, включая доступ к интернету);',
            'В целом хорошо, за исключением незначительных недостатков (имеются бумажные средства обучения, читальные и методические кабинеты, электронные средства обучения, за исключением доступа в интернет);',
            'Удовлетворительно, но со значительными недостатками (имеются бумажные средства обучения, читальные и методические кабинеты, частично есть электронные средства обучения);',
            'Плохо, не соответствует минимальным требованиям (имеются бумажные средства обучения, читальные и методические кабинеты, отсутствуют электронные средства обучения);',
            'Неудовлетворительно, не устраивает (полностью отсутствуют электронные и бумажные средства обучения, читальные и методические кабинеты).',
        ],
        rightAnswer: 1
    },
    {
        question: 'Оцените условия для охраны и укрепления здоровья:',
        options: [
            'Организация оборудована всеми необходимыми спортивными сооружениями, имеются в наличии программы дополнительного образования физкультурно-спортивной направленности;',
            'Отлично, полностью удовлетворен(а);',
            'В целом хорошо, за исключением незначительных недостатков (организация оборудована всеми необходимыми спортивными сооружениями (спортзал, стадион и пр.);',
            'Удовлетворительно, но со значительными недостатками (организация имеет только физкультурный зал);',
            'Неудовлетворительно, не устраивает (необходимые условия не созданы – (отсутствует спортивный зал и спортивные площадки)).',
        ],
        rightAnswer: 0
    },
    {
        question: 'Оцените условия по организации питания обучающихся:',
        options: [
            'Отлично, полностью удовлетворен(а) (в организации оборудовано помещение для питания обучающихся, а также для хранения и приготовления пищи, обеспечивающие возможность организации качественного горячего питания);',
            'Неудовлетворительно, не устраивает (необходимые условия не созданы – (отсутствует столовая (буфет).',
        ],
        rightAnswer: 2
    },
    {
        question: 'Доброжелательность и вежливость работников:',
        options: [
            'Полностью устраивает;',
            'В целом хорошо, но есть недостатки;',
            'Удовлетворительно;',
            'Неудовлетворительно, не устраивает.',
        ],
        rightAnswer: 0
    },
    {
        question: 'Компетентность работников:',
        options: [
            'Полностью устраивает;',
            'В целом хорошо, но есть недостатки;',
            'Удовлетворительно;',
            'Неудовлетворительно, не устраивает.',
        ],
        rightAnswer: 3
    }
];

const AnswersIndex = [];

numberOfAllQuestion.innerHTML = questions.length //выводим кол-во всех вопросов

const load = () => {
    question.innerHTML = questions[indexOfQuestion].question; //сам вопрос

    option1.innerHTML = questions[indexOfQuestion].options[0];
    option2.innerHTML = questions[indexOfQuestion].options[1];
    option3.innerHTML = questions[indexOfQuestion].options[2];
    option4.innerHTML = questions[indexOfQuestion].options[3];

    if (option1.innerHTML == 'undefined') {
        option1.style.display = 'none';
    } else {
        option1.style.display = 'block';
    }
    if (option2.innerHTML == 'undefined') {
        option2.style.display = 'none';
    } else {
        option2.style.display = 'block';
    }
    if (option3.innerHTML == 'undefined') {
        option3.style.display = 'none';
    } else {
        option3.style.display = 'block';
    }
    if (option4.innerHTML == 'undefined') {
        option4.style.display = 'none';
    } else {
        option4.style.display = 'block';
    }

    numberOfQuestion.innerHTML = indexOfPage + 1; //установка номера текущей страницы
    indexOfPage++; //увеличение индекса страницы
    console.log(indexOfPage);
};

let completedAnswers = [];

const randomQuestion = () => {
    let randomNumber = Math.floor(Math.random() * questions.length);
    let hitDublicate = false;
    if (indexOfPage == questions.length) {
        quizOver();
        document.querySelector('.quiz-content').classList.add('active');
    } else {
        if (completedAnswers.length > 0) {
            completedAnswers.forEach(item => {
                if (item == randomNumber) {
                    hitDublicate = true;
                }
            });
            if (hitDublicate) {
                randomQuestion();
            } else {
                indexOfQuestion = randomNumber;
                load();
            }
        };
        if (completedAnswers == 0) {
            indexOfQuestion = randomNumber;
            load();
        }
    };
    completedAnswers.push(indexOfQuestion);
};

const checkAnswer = el => {
    if (el.target.dataset.id == questions[indexOfQuestion].rightAnswer) {
        el.target.classList.add('correct');
        /*correctAnswerTracker();*/
        score++;
        randomQuestion();
        enableOptions();
    } else {
        el.target.classList.add('wrong');
        /*wrongtAnswerTracker();*/
        randomQuestion();
        enableOptions();
    }
    /*desabledOptions(); */
}

const desabledOptions = () => {
    optionElements.forEach(item => {
        item.classList.add('desabled');
        if (item.dataset.id == questions[indexOfQuestion].rightAnswer) {
            item.classList.add('correct');
        }
    })
}

const enableOptions = () => {
    optionElements.forEach(item => {
        item.classList.remove('desabled', 'correct', 'wrong');
    })
};

const answerTracker = () => {
    questions.forEach(() => {
        const div = document.createElement('div');
        answersTracker.appendChild(div);
    })
};

const correctAnswerTracker = status => {
    const t = answersTracker.children[indexOfPage - 1];
    t.style.backgroundColor = "#118f97";
};


const wrongtAnswerTracker = status => {
    const t = answersTracker.children[indexOfPage - 1];
    t.style.backgroundColor = "rgb(255, 61, 61)";
};


btnNext.addEventListener('click', () => {
    if (!optionElements[0].classList.contains('desabled')) {
        alert('Выберите один из вариантов ответа!');
    } else {
        randomQuestion();
        enableOptions();
    }
});

for (option of optionElements) {
    option.addEventListener('click', e => checkAnswer(e));
}

const quizOver = () => {
    document.querySelector('.quiz-over-modal').classList.add('active');
    // correctAnswer.innerHTML = score;
    // numberOfAllQuestion2.innerHTML = questions.length;
};

const tryAgain = () => {
    window.location.reload();
};

btnTryAgain.addEventListener('click', tryAgain);

window.addEventListener('load', () => {
    randomQuestion();
    answerTracker();
})

// закрытие модального окна
let modalBg = document.querySelector('.quiz-content');
let modalCross = document.querySelector('.close-popup');
let modalWindow = document.querySelector('.quiz-over-modal');

modalCross.addEventListener("click", function() {
    modalBg.classList.remove("active");
    modalWindow.classList.remove("active");
});

modalBg.addEventListener("click", function() {
    modalBg.classList.remove("active");
    modalWindow.classList.remove("active");
});