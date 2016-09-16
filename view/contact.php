<body>
<?php include '_topbar.php'; ?>

<div class="container-fluid">
    <div class="col-md-2 col-sm-2 col-xs-0"></div>
    <div class="divcontact col-md-8 col-sm-8 col-xs-12">
        <div class="row">
            <div class="contact col-md-12 col-sm-12 col-xs-12">
                <h4>Envoyez-nous un message !</h4>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form method="post" action="add_message.php">
                            <input required type="email" name="email" placeholder="Votre @" id="sendmail"><br>
                            <textarea id="message" rows="5" cols="30" name="text" placeholder="Votre message :" ></textarea><br>
                            <button type="submit" id="sendmess">Envoyer</button>
                            <button type="reset" id="resetmess">Annuler</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-0"></div>

</div>


</body>