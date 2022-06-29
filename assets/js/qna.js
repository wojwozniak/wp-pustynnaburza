const btns = document.querySelectorAll(".click-wrapper");
btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
            const question = e.currentTarget.parentElement;
        question.classList.toggle("show-text");
    });
});