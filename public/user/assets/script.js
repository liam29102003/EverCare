document.addEventListener('DOMContentLoaded', function() {
    const counterElement = document.querySelector('.patients');
    const targetNumber = 100; // Change this to your desired end number
    const duration = 2000; // Change this to your desired animation duration in milliseconds
    const interval = duration / targetNumber;

    let currentNumber = 0;

    const updateCounter = () => {
        if (currentNumber < targetNumber) {
            currentNumber++;
            counterElement.textContent = convertToBurmese(currentNumber);
            setTimeout(updateCounter, interval);
        }
    };

    setTimeout(updateCounter, interval);
});
document.addEventListener('DOMContentLoaded', function() {
  const counterElement = document.querySelector('.doctors');
  const targetNumber = 100; // Change this to your desired end number
  const duration = 2000; // Change this to your desired animation duration in milliseconds
  const interval = duration / targetNumber;

  let currentNumber = 0;

  const updateCounter = () => {
      if (currentNumber < targetNumber) {
          currentNumber++;
          counterElement.textContent = convertToBurmese(currentNumber);
          setTimeout(updateCounter, interval);
      }
  };

  setTimeout(updateCounter, interval);
});
document.addEventListener('DOMContentLoaded', function() {
const counterElement = document.querySelector('.staff');
const targetNumber = 100; // Change this to your desired end number
const duration = 2000; // Change this to your desired animation duration in milliseconds
const interval = duration / targetNumber;

let currentNumber = 0;

const updateCounter = () => {
    if (currentNumber < targetNumber) {
        currentNumber++;
        counterElement.textContent = convertToBurmese(currentNumber);
        setTimeout(updateCounter, interval);
    }
};

setTimeout(updateCounter, interval);
});

function convertToBurmese(number) {
    const burmeseNumerals = ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉'];
    return number.toString().split('').map(digit => burmeseNumerals[digit]).join('');
}