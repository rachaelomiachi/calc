// let days =2;
// let hours =0;
// let minut = 2;
// let seconds =5;
// // convert all to seconds
// let totalseconds = 
// days * 60 * 60 * 24 + hours * 60 * 60 + seconds;

// // temporary seconds holders
// let tempseconds = totalseconds;
// // calculate number of days, hours, minutes and seconds from a given numberof seconds
// const convert =(value, seconds) =>{
//     if (value > inSeconds){
//         let x = value % seconds;
//         tempseconds = x;
//         return(value - x) / inSeconds;
//     }else{
//         return 0;
//     }
    
// };
// //sets seconds
// const setseconds = (s) =>{
//     document.querySelector("#seconds").textContent = s + "s";
// };
// //sets hours
// const setMinutes = (m) => {
//     document.querySelector("#minutes").textContent = m + "m";    
// }
// // set days
// const setDays =(h) =>{
//     document.querySelector("#days").textContent = d +"d";
    
// };
// //update the count down every 1 secon

// <!-- Display the countdown timer in an element -->
// <p id="demo"></p>

// <script>
// // Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// // Update the count down every 1 second
// var x = setInterval(function() {

//   // Get today's date and time
//   var now = new Date().getTime();

//   // Find the distance between now and the count down date
//   var distance = countDownDate - now;

//   // Time calculations for days, hours, minutes and seconds
//   var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   // Display the result in the element with id="demo"
//   document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//   + minutes + "m " + seconds + "s ";

//   // If the count down is finished, write some text
//   if (distance < 0) {
//     clearInterval(x);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   }
// }, 1000);
// </script>


























z