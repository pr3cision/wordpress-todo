<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
	
    
        <!--Debut section formulaire-->
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <form action="index.html" method="POST" id="contact-form" role="form">
                        <div class="row">
                            <!--debut Boite message-->
                            <div class="col-lg-9">
                                <input type="text" name="message" id="message" class="form-control" placeholder="Ajouter une tâche" cols="30" rows="1">
                            </div>
                            <!--fin boite message-->

                            <!--Bouton submit-->
                            <div class="row col-lg-3 col-md-12 col-sm-12 mt-lg-0 mt-md-2 mt-sm-2 buttonContainer">

                                <!--Bouton ajout une ligne-->
                                    <input type="submit" class="button1 col btn-rounded hvr-sweep-to-left" value="Ajouter">
                                <!--Bouton mode modification-->
                                    <input type="button" class="button1 col edit ml-2 btn-outline-secondary btn-rounded waves-effect" value="Modifier">
                            </div>
                            <!--fin bouton submit-->
                        </div>
                    </form>
                </div>
            </div>
        <!--Fin section formulaire-->

        <!--Debut boite liste-->
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <div class="listBox">
                        <div class="listBox">

                            <!--Contenu de la boite-->
                                <ul id="list-items">

                                    <!--Element de la boite-->
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label class="text"> Exemple 1</label>
                                                <button type="submit" class="ico delete btn"><i class="fas fa-trash"></i></button>
                                                
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label class="text"> Exemple 2</label>
                                                <button type="submit" class="ico delete btn"><i class="fas fa-trash"></i></button>
                                                
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label class="text"> Exemple 3</label>
                                                <button type="submit" class="ico delete btn"><i class="fas fa-trash"></i></button>
                                                
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label class="text"> Exemple 4</label>
                                                <button type="submit" class="ico delete btn"><i class="fas fa-trash"></i></button>
                                                
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                    <!--Fin Element boite-->

                                </ul>
                            <!--Fin Contenu Boite-->

                        </div>
                    </div>
                </div>
            </div>
        <!--Fin boite liste-->    

</div>
<?php get_footer(); ?>
