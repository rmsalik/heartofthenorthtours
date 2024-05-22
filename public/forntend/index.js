var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    autoplay: true,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });




  


  // image gallery swiper start

  $('.owl-carousel').owlCarousel({
    loop:true,
    autoplay: true,
    margin:15,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})


var video = document.getElementById('video');
var playButton = document.getElementById('play-pause-button');

// Set initial background image for the play button
playButton.style.backgroundImage = 'url(./images/Play-icon.png)';
playButton.style.width = '100%';
playButton.style.height = 'auto';
playButton.style.backgroundSize = '10%';
playButton.style.backgroundRepeat = 'no-repeat';
playButton.style.backgroundPosition = 'center center';
playButton.style.padding='5%';

// Function to update the play/pause button icon based on video state
function updatePlayButton() {
  if (video.paused) {
    playButton.style.backgroundImage = 'url("../forntend/images/Play-icon.png")';
    playButton.style.display = 'block'; // Show play button
  } else {
    playButton.style.display = 'none'; // Hide play button when video is playing
  }
}

// Event listener for clicking the play/pause button
playButton.addEventListener('click', function() {
  if (video.paused) {
    video.play();
  } else {
    video.pause();
  }
});

// Event listener for video play
video.addEventListener('play', function() {
  updatePlayButton();
});

// Event listener for video pause
video.addEventListener('pause', function() {
  updatePlayButton();
});





