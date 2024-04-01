		<script src="~bulma-carousel/dist/js/bulma-carousel.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>
		




<section class="hero is-medium">
  <div class="hero">
    <div class="container">
      <div id="my-element" class="carousel">
        <div class="carousel-item">
		<img  src="https://picsum.photos/2000/960.jpg">
        </div>
        <div class="carousel-item">
        <img  src="https://picsum.photos/2000/960.jpg">
        </div>
        <div class="carousel-item">
        <img  src="https://picsum.photos/2000/960.jpg">
        </div>
		<div class="carousel-item">
        <img  src="https://picsum.photos/2000/960.jpg">
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bulma-carousel/dist/js/bulma-carousel.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Initialize all divs with carousel class
  var carousels = bulmaCarousel.attach('.carousel', {});

  // Loop on each carousel initialized
  for (var i = 0; i < carousels.length; i++) {
    // Add listener to 'before:show' event
    carousels[i].on('before:show', state => {
      console.log(state);
    });
  }

  // Access bulmaCarousel instance of an element
  var element = document.querySelector('#my-element');
  if (element && element.bulmaCarousel) {
    // bulmaCarousel instance is available as element.bulmaCarousel
    element.bulmaCarousel.on('before-show', function (state) {
      console.log(state);
    });
  }
});
</script>


