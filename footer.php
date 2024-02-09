<div class="bodyf">
<div class="main"></div>
<div class="footer">
    <div class="bubbles"></div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var bubblesContainer = document.querySelector('.bubbles');
    for (var i = 0; i < 128; i++) {
        var bubble = document.createElement('div');
        var size = 2 + Math.random() * 4 + 'rem';
        var distance = 6 + Math.random() * 4 + 'rem';
        var position = -5 + Math.random() * 110 + '%';
        var time = 2 + Math.random() * 2 + 's';
        var delay = -1 * (2 + Math.random() * 2) + 's';
        bubble.style.setProperty('--size', size);
        bubble.style.setProperty('--distance', distance);
        bubble.style.setProperty('--position', position);
        bubble.style.setProperty('--time', time);
        bubble.style.setProperty('--delay', delay);
        bubble.classList.add('bubble');
        bubblesContainer.appendChild(bubble);
    }
});
</script>
    <div class="contentf">
        <div>
            <div>
                <h3 class="h3">Contact</h3>
            </div>
            <div>
                <h4 class="h4">Téléphone</h4>
                <p>+216 20 953 953</p>
            </div>
            <div>
                <h4 class="h4">Adresse</h4>
                <p>10 Décembre, Immeuble Essasdi Tour C-D Mezzanine, Av. Habib Bourguiba, Tunis 1004</p>
            </div>
            <div>
                <h4 class="h4">Horaires</h4>
                <p>Ouvert 24h/24</p>
            </div>
        </div>
        <div>
            <img src="logo-Startup-village.png" alt="" id="logo">
        </div>
    </div>
</div>
<svg style="position: fixed; top: 100vh">
    <defs>
        <filter id="blob">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob" />
        </filter>
    </defs>
</svg>

</div>


 <!-- Jquery needed -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="navjs.js"></script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>











<script>
    window.addEventListener('load', function() {
        // Hide the loader when the page is fully loaded
        var loaderContainer = document.getElementById('loaderContainer');
        loaderContainer.style.display = 'none';
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>