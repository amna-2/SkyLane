

let menu= document.querySelector('#menu-btn');
let navbar= document.querySelector('.header .navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  


var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
    breakpoints: {
        640: {
          slidesPerView: 1,
          
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
  });

  let loadMorebtn= document.querySelector('.packages .load-more .btn');
  let currentItem= 3;
  loadMorebtn.onclick=()=>{
    let boxes= [...document.querySelectorAll('.packages .box-container .box')];
    for (var i= currentItem; i<currentItem+3; i++){
        boxes[i].style.display= 'inline-block';
    }
    currentItem+=3;
    if (currentItem> boxes.length){
        loadMorebtn.style.display= 'none';
    }
  }


//   const span = document.getElementById("total-price");
//   const input = document.getElementById("total-price1");

//   // Create a MutationObserver to watch for changes in the span's content
//   const observer = new MutationObserver(() => {
//     // Update the input value with the span's content
//     input.value = span.textContent.trim();
//   });

//   // Start observing the span for changes
//   observer.observe(span, { childList: true, characterData: true });

//   // Simulate a change to the span
//   setTimeout(() => {
//     span.textContent = "150"; // Simulate a dynamic update
//   }, 2000);





// function clicked(){
//     console.log("clicked ------------------------")
//     document.getElementById("total-price1").value = document.getElementById("total-price").textContent;

// }
// function calculatePrice() {
//     const destination = document.getElementById("destination");
//     const guests = document.getElementById("guests").value;
//     const arrivalDate = new Date(document.getElementById("arrival").value);
//     const leavingDate = new Date(document.getElementById("leaving").value);
  
//     if (!destination.value || !guests || !arrivalDate || !leavingDate) {
//       document.getElementById("total-price").innerText = 0;
//       return;
//     }
  
//     const timeDifference = leavingDate - arrivalDate;
//     const days = timeDifference / (1000 * 60 * 60 * 24);
  
//     if (days <= 0) {
//       document.getElementById("total-price").innerText = 0;
//       return;
//     }
  
//     const pricePerDay = parseFloat(destination.value);
//     const totalPrice = pricePerDay * guests * days;
//     document.getElementById("total-price").innerText = totalPrice.toFixed(2);
//   }
  



//   chatgpt-code




// const today = new Date();
// today.setDate(today.getDate() + 1); // Move to tomorrow's date
// const formattedDate = today.toISOString().split('T')[0]; // Format to YYYY-MM-DD
// document.getElementById('date').setAttribute('min', formattedDate); // Set min date to tomorrow



// Price Calculation Logic
function calculatePrice() {
    const destination = document.getElementById("destination");
    const guests = document.getElementById("guests").value;
    const arrivalDate = new Date(document.getElementById("arrival").value);
    const leavingDate = new Date(document.getElementById("leaving").value);

    // Reset price if inputs are invalid
    if (!destination.value || !guests || isNaN(arrivalDate) || isNaN(leavingDate)) {
        updatePrice(0);
        return;
    }

    // Calculate the number of days
    const timeDifference = leavingDate - arrivalDate;
    const days = timeDifference / (1000 * 60 * 60 * 24);

    // Reset price if days are invalid
    if (days <= 0) {
        updatePrice(0);
        return;
    }

    // Calculate total price
    const pricePerDay = parseFloat(destination.value);
    const totalPrice = pricePerDay * guests * days;

    // Update the price
    updatePrice(totalPrice.toFixed(2));
}

// Function to update the span and input values
function updatePrice(value) {
    const totalPriceSpan = document.getElementById("total-price");
    const totalPriceInput = document.getElementById("total-price1");

    totalPriceSpan.textContent = value;
    totalPriceInput.value = value; // Synchronize with input
}

// Ensure synchronization on form submission
document.querySelector('.book-form').addEventListener('submit', () => {
    const totalPriceSpan = document.getElementById("total-price");
    const totalPriceInput = document.getElementById("total-price1");

    totalPriceInput.value = totalPriceSpan.textContent.trim(); // Final sync before submit
});