<body>
<?php include '_topbar.php'; ?>
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-0"></div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <h4>Envoyez-nous un message !</h4>
            <form method="post" action="add_message.php">
                <label for="email">Email :</label><br>
                <input required type="email" name="email"><br>
                <label for="message">Votre message :</label>
                <textarea id="message" rows="5" cols="5" name="text"></textarea><br>
                <button type="submit" id="sendmess">Envoyer</button>
                <button type="reset" id="resetmess">Annuler</button>
            </form>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-0"></div>
    </div>
</body>