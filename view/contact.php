<div class="contact" id="contact">
    <h1 style="margin-bottom: 2em;">Contact</h1>

   
    <p class="contactText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae contraria sunt his, malane? Proclivi currit oratio. Duo enim genera quae erant, fecit tria. Vide igitur ne non debeas verbis nostris uti, sententiis tuis.</p>
    <div class="contactPicture">
        <img src="img/catwalk.png">
    </div>

    <div class="input-list style-4 clearfix">
        <form action="models/form-contact.php" method="post">
            <input type="text" name="naam" placeholder="Naam" required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="text" name="onderwerp" placeholder="Onderwerp" required><br>
            <textarea rows="5" name="bericht" placeholder="Bericht" onkeyup="adjust_textarea(this)" required></textarea><br>
            <input type="submit" name="submit" class="buttonStyle" style="padding: .5em; padding-left: 1em; padding-right: 1em;">
        </form>

        <div class="contactTekst">
       
       <p>Grauw</p>
        <p>Razende bol 5</p>
        <p>1938 ZZ HEEMSKERK</p>
        <p>info@grauw.amsterdam</p>
        <p>0675467328</p>
       
        </div>
        <script type="text/javascript">
            //auto expand textarea
            function adjust_textarea(h) {
                h.style.height = "20px";
                h.style.height = (h.scrollHeight) + "px";
            }
        </script>
    </div>

</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/scroll.js"></script>
<script src="js/script.js"></script>
