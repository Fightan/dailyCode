
<h1>Forum</h1>

<div id="forum">
    <div class="container">
        <div class="row">
            <table id="table">
                <colgroup>
                    <col span="1" style="width: 55%;">
                    <col span="1" style="width: 15%;">
                    <col span="1" style="width: 15%;">
                    <col span="1" style="width: 15%;">
                </colgroup>
                <tr id="main">
                    <th>Sujet</th>
                    <th>Auteur</th>
                    <th>Réponses</th>
                    <th>Date</th>
                </tr>
                <?php
                    foreach(sujet::getAll() as $message){
                        echo <<<html
                            <tr>
                                <td class="link"><a href="?p=$message->id_sujet">$message->nom_sujet</a></td>
                                <td>$message->auteur</td>
                                <td>$message->reponses</td>
                                <td>$message->date</td>
                            </tr>
                        html;
                    }
                ?>
            </table> 
        </div>
        <div class="row">
            <h2>Nouveau sujet</h2>
            <form id="form" method="post" action="?p=forum">
                <!-- <input type="hidden" value="forum" name="p"> -->
                <input class="col-6" type="text" name="title" id="title" placeholder="Entrez le titre de votre sujet">
                <div id="editor" placeholder="Entrez votre texte"></div>
                <input id="sendForm" disabled class="sendFormInactive" type="submit" value="Poster le sujet">
            </form>
        </div>
    </div>
</div>
