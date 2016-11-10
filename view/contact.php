<div class="contact" id="contact">
    <h1>Contact</h1>

    <div class="contactTekst">
        <p>Grauw</p>
        <p>Contactweg 36</p>
        <p>0618894141</p>
    </div>

    <div class="form-style">
        <form action="models/form-contact.php" method="post">
            <input type="text" name="naam" placeholder="Naam" required><br>
            <input type="email" name="email" placeholder="E-mail" required><br>
            <input type="text" name="onderwerp" placeholder="Onderwerp" required><br>
            <textarea rows="5" name="bericht" placeholder="Bericht" onkeyup="adjust_textarea(this)" required></textarea><br>
            <input type="submit" name="submit">
        </form>

        <script type="text/javascript">
            //auto expand textarea
            function adjust_textarea(h) {
                h.style.height = "20px";
                h.style.height = (h.scrollHeight) + "px";
            }
        </script>
    </div>


</div>


</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/scroll.js"></script>
<script src="js/script.js"></script>
