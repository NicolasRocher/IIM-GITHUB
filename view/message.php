<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-0"></div>
        <div class="divmess col-md-8 col-sm-8 col-xs-12">
            <div class="col-md-6">
                <h2>+ Send a message</h2>
                <form method="post" action="add_messages.php">
                    <input required type="email" name="email" id="email" placeholder="Email :"><br>
                    <textarea rows="7" cols="40" id="message" name="text" placeholder="Que voulez-vous nous dire ?"></textarea><br>
                    <button type="submit" id="sendmessage">Envoyer</button>
                    <button type="reset" id="resetmessage">Annuler</button>
                </form>
            </div>
            <div class="col-md-6">
                <a href="dashboard.php"><img src="favicon.png"></a>
            </div>

        </div>
        <div class="col-md-2 col-sm-2 col-xs-0"></div>
    </div>
</div>

</body>
