</body>
<script src="./assets/js/index.js"></script>
<script type="text/javascript">
    function toggle() {
        var trailer = document.querySelector(".trailer");
        trailer.classList.toggle("active");
        var video = document.querySelector("iframe");
        // video.classList.toggle("pause");
        if (video) {
            var iframeSrc = video.src;
            video.src = iframeSrc;
        }
    }
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>

</html>