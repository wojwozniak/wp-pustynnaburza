// Selekcje - muszą być u góry, nie ruszać
const zgloszenia = document.querySelector('.zgloszenia');
const deadline = document.querySelector('.deadline');
const items = document.querySelectorAll('.deadline-format h4');
const daysLabel = document.getElementById("days");
const hoursLabel = document.getElementById("hours");
const minutesLabel = document.getElementById("minutes");
const secondsLabel = document.getElementById("seconds");
const buttonContainer = document.querySelector('.button-container');
const timerTitle = document.querySelector('.timer-title');
// Koniec selekcji - config poniżej, nie ruszać powyżej



// ### CONFIG ###

// # Daty # - rrrr, m, d, h, m, s ---> gdzie miesiące liczą się od 0 do 11!!!

// Pierwsza data - na przykład rozpoczęcie zgłoszeń
const startDate = new Date(2024, 9, 1, 8, 0, 0);

// Druga data - na przykład zamknięcie zgłoszeń
const futureDate = new Date(2024, 9, 31, 23, 59, 59);

// # Przed pierwszą datą - widoczny zegar, ukryty przycisk zgłoszeń
const tytulPrzedStart = `Odliczamy czas do rozpoczęcia zgłoszeń!`;
const tekstPrzedOdliczaniem = `Zgłoszenia rozpoczynają się w`; // i tu dalej jest odliczana data

// # Pomiędzy pierwszą a drugą datą - widoczny jest przycisk zgłoszeń
const tytulPomiedzy = `Zgłoszenia aktywne!`;
const tekstPodczasOdliczania = `Zgłoszenia kończą się w`; // i tu dalej jest odliczana data
const tekstPrzycisku = 'ZGŁOSZENIA';
const linkZgloszenia = 'https://forms.office.com/Pages/ResponsePage.aspx?id=Ho024XU55kyJPfw1H9RNzdSFJQPIqDlKsSf25-RXn1ZUNjNMQzRYVEc4M1paOFJTWkg1NzczTzIzSy4u';

// # Po drugiej dacie - ukryty przycisk i zegar
const tytulKoniecZgloszen = `Zgłoszenia zakończone!`;
const podtytulKoniecZgloszen = `Dalsze informacje już wkrótce`;

// ### KONIEC CONFIGU PONIŻEJ NIE ZMIENIAĆ! ###







// Miesiące i dni tygodnia
const months = [
  'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca',
  'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia',
];
const weekdays = [
  'niedzielę', 'poniedziałek', 'wtorek', 'środę', 'czwartek', 'piątek', 'sobotę',
];

// Generacja dat i godzin
const futureTime = futureDate.getTime();
const startTime = startDate.getTime();
const oneMinute = 60 * 1000;
const oneHour = 60 * oneMinute;
const oneDay = 24 * oneHour;

// Dane do subtitle
let year = 0;
let hour = 0;
let minutes = 0;
let month = 0;
let weekday = 0;
let date = 0;

// Główna funkcja
function main() {
  // W naszej funkcji uznajemy istnienie trzech faz czasu:
  // - przed startTime (0)
  // - pomiędzy start i future (1)
  // - po future (2)
  // Funkcja getRemainingTime jest wywoływana co sekundę aktualizując zegar
  let currentPhase = -1;

  function handleTime() {
    let localPhase = -2;
    const now = new Date().getTime();
    const t1 = startTime - now;
    const t2 = futureTime - now;

    // Wyliczamy na potrzeby wewnętrznej funkcji aktualną fazę
    localPhase = (t2 < 0) ? 2 : (t1 < 0) ? 1 : 0;

    // Wyliczamy odpowiedni "pozostały czas"
    (localPhase == 1) ? handleLabels(t2) : (localPhase == 0) ? handleLabels(t1) : null;

    // Aktualizujemy resztę UI tylko wtedy przy przeskoku fazy
    if (localPhase !== currentPhase) {
      handleDateUpdate(localPhase); // Wygenerowanie danych do subtitle
      handleUIUpdate(localPhase); // Wywołanie aktualizacji UI
      currentPhase = localPhase; // Aktualizacja fazy w main
    }
  }

  function handleUIUpdate(currentPhase) {
    if (currentPhase == 2) {
      clearInterval(countdown);
      deadline.style.display = 'none';
      buttonContainer.style.display = 'none';
      timerTitle.innerHTML = tytulKoniecZgloszen;
      zgloszenia.textContent = podtytulKoniecZgloszen;
    }
    else if (currentPhase == 1) {
      timerTitle.innerHTML = tytulPomiedzy;
      zgloszenia.textContent = `${tekstPodczasOdliczania} ${weekday} ${date}. ${month} ${year} o godzinie ${hours}:${minutes}`;
      buttonContainer.innerHTML = `
                <button type="button" 
                    class="btn d-more" 
                    onclick="location.href='${linkZgloszenia}'" 
                    target="_blank">
                        ${tekstPrzycisku}
                </button>`;
    }
    else if (currentPhase == 0) {
      timerTitle.innerHTML = tytulPrzedStart;
      zgloszenia.textContent = `${tekstPrzedOdliczaniem} ${weekday} ${date}. ${month} ${year} o godzinie ${hours}:${minutes}`;
    }
  }

  function handleDateUpdate(currentPhase) {
    function getDateComponents(date) {
      return {
        year: date.getFullYear(),
        hours: date.getHours(),
        minutes: date.getMinutes().toString().padStart(2, '0'),
        month: months[date.getMonth()],
        weekday: weekdays[date.getDay()],
        date: date.getDate()
      };
    }

    if (currentPhase == 0) {
      dateComponents = getDateComponents(startDate);
    }
    else if (currentPhase == 1) {
      dateComponents = getDateComponents(futureDate);
    }
    else if (currentPhase == 2) {
      dateComponents = getDateComponents(new Date(0));
    }

    year = dateComponents.year;
    hours = dateComponents.hours;
    minutes = dateComponents.minutes;
    month = dateComponents.month;
    weekday = dateComponents.weekday;
    date = dateComponents.date;
  }

  function handleLabels(givenTime) {
    let days = Math.floor(givenTime / oneDay);
    let remainder = givenTime % oneDay;
    let hours = Math.floor(remainder / oneHour);
    remainder %= oneHour;
    let minutes = Math.floor(remainder / oneMinute);
    let seconds = Math.floor((remainder % oneMinute) / 1000);
    label(days, hours, minutes, seconds);
    const values = [days, hours, minutes, seconds];
    items.forEach((item, index) => {
      item.innerHTML = format(values[index]);
    });
  }

  // Rozpoczęcie licznika
  let countdown = setInterval(handleTime, 1000);
  handleTime();
}

// Funkcje do odmiany słów i formatowania 
function label(days, hours, minutes, seconds) {
  let hoursCopy = hours;
  let minutesCopy = minutes;
  let secondsCopy = seconds;

  while (hoursCopy >= 20) hoursCopy -= 10;
  while (minutesCopy >= 20) minutesCopy -= 10;
  while (secondsCopy >= 20) secondsCopy -= 10;

  daysLabel.textContent = (days === 1) ? 'dzień' : 'dni';

  if (hours === 1) {
    hoursLabel.textContent = 'godzina';
  } else if (hoursCopy >= 2 && hoursCopy <= 4 || hoursCopy >= 12 && hoursCopy <= 14) {
    hoursLabel.textContent = 'godziny';
  } else {
    hoursLabel.textContent = 'godzin';
  }

  if (minutes === 1) {
    minutesLabel.textContent = 'minuta';
  } else if (minutesCopy >= 2 && minutesCopy <= 4 || minutesCopy >= 12 && minutesCopy <= 14) {
    minutesLabel.textContent = 'minuty';
  } else {
    minutesLabel.textContent = 'minut';
  }

  if (seconds === 1) {
    secondsLabel.textContent = 'sekunda';
  } else if (secondsCopy >= 2 && secondsCopy <= 4 || secondsCopy >= 12 && secondsCopy <= 14) {
    secondsLabel.textContent = 'sekundy';
  } else {
    secondsLabel.textContent = 'sekund';
  }
}

function format(item) {
  return item < 10 ? `0${item}` : item;
}

// Inicjalizacja
main();