const date = new Date();

const monthDays = document.querySelector('.sbc-day');
const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".some h3 ").innerHTML=months[date.getMonth()];

  let days = "";

  for (let i =1;i<=31;i++);
  {
      days+=`<span>${i}</span>`;
      monthDays.innerHTML = sbc-day;

  }