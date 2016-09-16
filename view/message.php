<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2>Envoyez un message, partagez votre musique !</h2>
            <form method="post" action="add_messages.php">
                <input required type="email" name="email" id="email" placeholder="Email :"><br>
                <textarea rows="7" cols="20" id="message" name="message" placeholder="Que voulez-vous nous dire ?"></textarea><br>
                <button type="submit" id="sendmessage">Envoyer</button><br>
                <button type="reset" id="resetmessage">Annuler</button>
            </form>
        </div>
    </div>
</div>

</body>
