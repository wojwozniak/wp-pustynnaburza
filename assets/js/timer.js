// ### Countdown ###

// Deadline zgloszen
//Wpisujemy wewnątrz funkcji
// Date(rok, miesiąc-1, dzień, godzina, minuta, sekunda)
// Ważne! - miesiąc-1, tj. np. dla kwietnia wpisujemy 3

const futureDate = new Date(2022, 7, 20, 18, 30, 0);

// Weekdays and months

const months = [
    'Stycznia',
    'Lutego',
    'Marca',
    'Kwietnia',
    'Maja',
    'Czerwca',
    'Lipca',
    'Sierpnia',
    'Września',
    'Października',
    'Listopada',
    'Grudnia',
  ];
  const weekdays = [
    'niedzielę',
    'poniedziałek',
    'wtorek',
    'środę',
    'czwartek',
    'piątek',
    'sobotę',
  ];
  
  // Selections
  
  const zgloszenia = document.querySelector('.zgloszenia');
  const deadline = document.querySelector('.deadline');
  const items = document.querySelectorAll('.deadline-format h4');
  // Selections for labels 
  const daysLabel = document.getElementById("days");
  const hoursLabel = document.getElementById("hours");
  const minutesLabel = document.getElementById("minutes");
  const secondsLabel = document.getElementById("seconds");
  
  // Breaking up date to different variables
  
  const year = futureDate.getFullYear();
  const hours = futureDate.getHours();
  const minutes = futureDate.getMinutes();
  let month = futureDate.getMonth();
  month = months[month];
  const weekday = weekdays[futureDate.getDay()];
  const date = futureDate.getDate();
  
  // Text inside zgloszenia class
  
  zgloszenia.textContent = `Zgłoszenia ruszają w ${weekday}, ${date} ${month} ${year} o godzinie ${hours}:${minutes}!`;
  
  // Time calculation
  const futureTime = futureDate.getTime();
  function getRemaindingTime() {
    const today = new Date().getTime();
  
    const t = futureTime - today;
    const oneDay = 24 * 60 * 60 * 1000;
    const oneHour = 60 * 60 * 1000;
    const oneMinute = 60 * 1000;
  
    // calculate all values
    let days = t / oneDay;
    days = Math.floor(days);
    let hours = Math.floor((t % oneDay) / oneHour);
    let minutes = Math.floor((t % oneHour) / oneMinute);
    let seconds = Math.floor((t % oneMinute) / 1000);
  
    label();
  
    // setting up values
    const values = [days, hours, minutes, seconds];
  
    // choosing correct label
  
    function label() {
      let hoursCopy = hours;
      let minutesCopy = minutes;
      let secondsCopy = seconds;
      while (hoursCopy >= 20) {
        hoursCopy -= 10;
      }
      while (minutesCopy >= 20) {
        minutesCopy -= 10;
      }
      while (secondsCopy >= 20) {
        secondsCopy -= 10;
      }
      // days
      if (days == 1) {
        daysLabel.textContent = 'dzień';
      } else {
        daysLabel.textContent = 'dni';
      }
      //hours
      if (hours == 1) {
        hoursLabel.textContent = 'godzina';
      } else if (hoursCopy >= 2 && hoursCopy <= 4  || hoursCopy >= 12 && hoursCopy <=14) {
        hoursLabel.textContent = 'godziny';
      } else {
        hoursLabel.textContent = 'godzin';
      }
      if (hours >= 12 && hours <= 14) {
        hoursLabel.textContent = 'godzin';
      }
      //minutes
      if (minutes == 1) {
        minutesLabel.textContent = 'minuta';
      } else if (minutesCopy >= 2 && minutesCopy <= 4 || minutesCopy >= 12 && minutesCopy <=14) {
        minutesLabel.textContent = 'minuty';
      } else {
        minutesLabel.textContent = 'minut';
      }
      if (minutes >= 12 && minutes <= 14) {
        minutesLabel.textContent = 'minut';
      }
      // seconds
      if (seconds == 1) {
        secondsLabel.textContent = 'sekunda';
      } else if (secondsCopy >= 2 && secondsCopy <= 4 || secondsCopy >= 12 && secondsCopy <=14) {
        secondsLabel.textContent = 'sekundy';
      } else {
        secondsLabel.textContent = 'sekund';
      }
      if (seconds >= 12 && seconds <= 14) {
        secondsLabel.textContent = 'sekund';
      }
      return 0;
    }
  
    function format(item) {
      if (item < 10) {
        return (item = `0${item}`);
      }
      return item;
    }
  
    items.forEach((item, index) => {
      item.innerHTML = format(values[index]);
    });
  
    if (t < 0) {
      clearInterval(countdown);
      deadline.innerHTML = `<h4 class="expired">Zgłoszenia ruszyły! </h4>`;
    }
  }
  // countdown;
  let countdown = setInterval(getRemaindingTime, 1000);
  //set initial values
  getRemaindingTime();