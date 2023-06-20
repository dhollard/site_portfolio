<!-- Script réduction image en-tête au scroll -->
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("Header_projet").style.height = "400px";
        document.getElementById("Titre_page").style.fontSize = "42px";
    } else {
        document.getElementById("Header_projet").style.height = "100vh";
        document.getElementById("Titre_page").style.fontSize = "58px";
    }
    }
</script>