/* Skrypt obsługujący stronę pytania i odpowiedzi
Można zmienną list dodając pytania i odpowiedzi na nie
Podajemy je w cudzysłowiach, oddzielone przecinkami
pytanie,
odpowiedź,
pytanie,
odpowiedź,
...

Ostatnia odpowiedź w liście bez przecinka na końcu
*/

const list = [
    'Lorem Ipsum 1',
    'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, accusantium.',
    'Lorem Ipsum 2',
    'A tu druga odpowiedz',
    'Lorem Ipsum 3',
    'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, accusantium.',
    'Lorem Ipsum 4',
    'klkljjljkljjllkkjllkj'
];

const target = document.querySelector(".qna-wrapper");

document.addEventListener('DOMContentLoaded', () => {
    let q;
    let a;
    for (let i = 0; i < list.length; i += 2) {
        q = list[i];
        a = list[i + 1];
        target.innerHTML += `
            <article class="question">
                <div class="click-wrapper">
                    <div class="question-title">
                    <p>${q}</p>
                    <button type="button" class="question-btn">
                        <span class="plus-icon">
                        <i class="far fa-plus-square"></i>
                        </span>
                        <span class="minus-icon">
                        <i class="far fa-minus-square"></i>
                        </span>
                    </button>
                    </div>
                </div>
                <div class="question-text">
                <p>${a}</p>
                </div>
            </article>
        `;
    }
    const btns = document.querySelectorAll(".click-wrapper");
    btns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            const question = e.currentTarget.parentElement;
            question.classList.toggle("show-text");
        });
    }); 
});