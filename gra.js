
function startGame() {
  const found_cap = new Array(10).fill(false);
  localStorage.setItem("foundCap", JSON.stringify(found_cap));
  checkAndSetCapVisibility();
  let startDate = new Date();
  const currentDate = new Date();
  const futureDate = new Date(currentDate.getTime() + 10 * 60 * 1000);
  const futureDateString = futureDate.toISOString();
  localStorage.setItem('futureDate', futureDateString);
}

function checkAndSetCapVisibility() {
  const found_cap = JSON.parse(localStorage.getItem("foundCap")) || [];

  for (let i = 0; i < found_cap.length; i++) {
    if (found_cap[i]) {
      if (document.querySelector(`.cap-${i}`) != null) {
        document.querySelector(`.cap-${i}`).style.display = "none";
      }
    } else {
      if (document.querySelector(`.cap-${i}`) != null) {
        document.querySelector(`.cap-${i}`).style.display = "block";
      }
    }
  }
}

function checkDateReached() {
  const storedFutureDate = localStorage.getItem('futureDate');

  if (storedFutureDate) {
    const futureDate = new Date(storedFutureDate);
    const currentDate = new Date();
    if (currentDate >= futureDate) {
      return true;
    }
  }
  return false;
}

function handleCapClick(capNumber) {
  console.log("Znaleziono" + capNumber);
  let found_cap = JSON.parse(localStorage.getItem("foundCap")) || [];
  let countFound = found_cap.filter(Boolean).length;
  found_cap[capNumber] = true;
  countFound = found_cap.filter(Boolean).length;
  localStorage.setItem("foundCap", JSON.stringify(found_cap));
  alert(`Znaleziono ${countFound}/10 czapek!`);

  console.log(found_cap);

  document.querySelector(`.cap-${capNumber}`).style.display = "none";
  if (countFound === 10) {
    localStorage.setItem("game_won", true);
    openPopup();
  }
}

function checkIfGameWon() {
  return localStorage.getItem("game_won") === "true";
}

document.addEventListener("DOMContentLoaded", function () {
  //localStorage.clear();
  checkAndSetCapVisibility();
  //localStorage.removeItem("alertShown");
  const alertShown = localStorage.getItem("alertShown");
  if (!alertShown) {
    openPopup();
    localStorage.setItem("alertShown", true);
  }
  createHalfCircleButton();
  setInterval(dealWithDate, 1000);
});

function createHalfCircleButton() {
  const container = document.createElement('div');
  container.className = 'half-circle';
  const textSpan = document.createElement('span');
  textSpan.textContent = 'Gra';
  container.appendChild(textSpan);
  document.body.appendChild(container);
  container.addEventListener('click', function () {
    openPopup();
  });
}

function openPopup() {
  const alertShown = localStorage.getItem("alertShown");
  const gameWon = checkIfGameWon();
  if (!alertShown) {
    startGame();
    document.getElementById('popup').style.display = 'flex';
  } else if (!gameWon && !checkDateReached()) {
    dealWithDate();
    document.getElementById('popup2').style.display = 'flex';
  } else if (gameWon) {
    const timeFound = localStorage.getItem("foundDate");
    if (timeFound != null) {
      generateWinText(timeFound);
    } else {
      const currentDate = new Date();
      localStorage.setItem("foundDate", currentDate.toISOString());
      generateWinText(currentDate.toISOString());
    }
    document.getElementById('popup3').style.display = 'flex';
  } else {
    document.getElementById('popup4').style.display = 'flex';
  }
}

function generateWinText(foundDate) {
  const storedFutureDate = localStorage.getItem('futureDate');
  if (storedFutureDate) {
    const futureDate = new Date(storedFutureDate).getTime();
    const castedFoundDate = new Date(foundDate).getTime();
    const timeDiff = futureDate - castedFoundDate;
    const remainingTime = 10 * 60 * 1000 - timeDiff;
    const seconds = Math.floor(remainingTime / 1000) % 60;
    const minutes = Math.floor(remainingTime / (1000 * 60)) % 60;

    const txt = document.getElementById("popup-congratulations");
    if (txt != null) {
      if (minutes != 0) {
        txt.textContent = `Gratulacje! Udało Ci się znaleźć wszystkie czapki! Zajęło Ci to ${minutes} minut i ${seconds} sekund`;
      } else {
        txt.textContent = `Gratulacje! Udało Ci się znaleźć wszystkie czapki! Zajęło Ci to ${seconds} sekund!`;
      }
    }
  }
}

function closePopup() {
  document.getElementById('popup').style.display = 'none';
  document.getElementById('popup2').style.display = 'none';
  document.getElementById('popup3').style.display = 'none';
  document.getElementById('popup4').style.display = 'none';
}

function dealWithDate() {
  const storedFutureDate = localStorage.getItem('futureDate');

  if (storedFutureDate) {
    const futureDate = new Date(storedFutureDate);
    const currentDate = new Date();

    const timeDifference = futureDate - currentDate;

    const seconds = Math.floor(timeDifference / 1000) % 60;
    const minutes = Math.floor(timeDifference / (1000 * 60)) % 60;
    const hours = Math.floor(timeDifference / (1000 * 60 * 60));
    let found_cap = JSON.parse(localStorage.getItem("foundCap")) || [];
    let countFound = found_cap.filter(Boolean).length;

    const countdownString = `Gra trwa! Znaleziono ${countFound}/10 czapek! Masz jeszcze ${minutes} minut i ${seconds} sekund.`;

    let str = document.getElementById('data-popup');
    if (str != null) {
      str.textContent = countdownString;
    }

    const forceOpened = localStorage.getItem('forceOpened');

    if (timeDifference < 0 && forceOpened != null) {
      localStorage.setItem("forceOpened", JSON.stringify("aaa"));
      closePopup();
      openPopup();
    }
  }

}

function restartGame() {
  localStorage.clear();
  closePopup();
  openPopup();
}