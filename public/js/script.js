function sivamtime() {
  now = new Date();
  d = now.getDay();
  datee = now.getDate();
  m = now.getMonth();
  y = now.getFullYear() + 543;
  hour = now.getHours();
  min = now.getMinutes();
  sec = now.getSeconds();

  if (min <= 9) {
    min = "0" + min;
  }
  if (sec <= 9) {
    sec = "0" + sec;
  }
  if (hour > 12) {
    hour = hour - 12;
    add = "pm";
  } else {
    hour = hour;
    add = "am";
  }
  if (hour == 12) {
    add = "pm";
  }

  time = hour + ":" + min + ":" + sec + " " + add;

  if (document.getElementById) {
    date.innerHTML = time;
  } else if (document.layers) {
    document.layers.date.document.write(time);
    document.layers.date.document.close();
  }

  setTimeout("sivamtime()", 1000);
}
window.onload = sivamtime;

//check
document.addEventListener("click", (event) => {
  modalWishlist(event.target.dataset.type);
  drop(event.target.dataset.type);
  functionForget(event.target.dataset.type)
});

//dropdown
let drop = (type) => {
  let element1 = document.querySelector("#sneaker-drop");
  let element2 = document.querySelector("#apparel-drop");
  if (type === "sneaker") {
    element2.style.display = "none";
    if (element1.style.display === "block") {
      element1.style.display = "none";
    } else {
      element1.style.display = "block";
    }
  } else if (type === "apparel") {
    element1.style.display = "none";
    if (element2.style.display === "block") {
      element2.style.display = "none";
    } else {
      element2.style.display = "block";
    }
  } else {
    element1.style.display = "none";
    element2.style.display = "none";
  }
};

//modal
let modalWishlist = (type) => {
  let element = document.querySelector("#wishlist");
  if (type === "modal") {
    if (element.style.display === "block") {
      element.style.display = "none";
    } else {
      element.style.display = "block";
    }
  } else {
    element.style.display = "none";
  }
};

//forget
let functionForget = (type) => {
  let element = document.querySelector("#forget");
  if (type === "forget") {
    if (element.style.display === "block") {
      element.style.display = "none";
    } else {
      element.style.display = "block";
    }
  } else {
    element.style.display = "none";
  }
}