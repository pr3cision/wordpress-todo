			

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		

	<script>
		// @ts-nocheck

/* ---------- Debut section On Page Load ---------- */

//Fonction pour obtenir les post qui sont dans la BD todo au chargement de la page
	function getTodo( data, status ){
		
		let todoApp = $('#list-items');

		$( data ).each(function( position , element ){
			

			/* ---- Variable -> element hthlm ---- */
			let li = $('<li class="itemLine"></li>')
			let div = $('<div />');
			let chckBox = $('<input type="checkbox">')

			let label = $('<label class="text"></label>')

			let button = $('<button type="submit" class="ico delete btn"><i class="fas fa-trash"></i></button>')
			let breakLine = $('<hr style="width:93%;text-align:left;margin-left:0">')

			/* ---- Variable -> appendage ---- */

			div.append(chckBox)
			div.append(label)
			label.attr( 'post_id', element.id )
			label.text(element.titre);
			div.append(button);
			button.click(dltOnClick); //fonctionnalite delete
			button.attr( 'post_id', element.id)
			button.mouseover(mouseHoverEffect); // effet a l;hover du btn delete

			li.attr( 'id', 'todo-'+element.id )
			li.click(selectHighlight)
			li.append(div)
			li.append(breakLine);
			
			todoApp.append(li);
			
		})
	}

/* ---------- Fin section On Page Load ---------- */

/* ---------- Debut section Insert Post---------- */

/* Fonctionne pareil a la fonction Onload ---- SI CHANGEMENT A FAIRE ICI , FAIRE CELLE EN HAUT AUSSI ---- */
	function addPost( data , status ){

		let todoApp = $('#list-items');

			if ( status == "success"){
				/* ---- Variable -> element hthlm ---- */

				let li = $('<li class="itemLine"></li>')
				let div = $('<div />');
				let chckBox = $('<input type="checkbox">')

				let label = $('<label class="text"></label>')

				let button = $('<button type="submit" class="ico delete btn"><i class="fas fa-trash"></i></button>')
				let breakLine = $('<hr style="width:93%;text-align:left;margin-left:0">')

				/* ---- Variable -> appendage ---- */

				div.append(chckBox)
				div.append(label)
				label.attr( 'post_id', data.id )
				label.text( data.titre );

				div.append(button);
				button.attr( 'post_id', data.id )
				button.click(dltOnClick); //fonctionnalite delete
				button.mouseover(mouseHoverEffect); // effet a l;hover du btn delete

				li.attr( 'id', 'todo-'+data.id )
				li.append(div);
				li.append(breakLine);
				
				label.addClass( 'animate__animated animate__backInDown' ) //Effet qui fait entre l'etiquette par en haut
				todoApp.append(li);
				
			}
	}

/* ---------- Fin section Insert Post---------- */

/* ---------- Debut section Modification ---------- */

	function editPost( id, titre ){

		/* ---- Module Ajax ---- */

		$.ajax({

			'url': '/wordpress/?rest_route=/todo/todo',
			'method': 'POST',
			'data' : { 
				'titre' : titre,
				'id' : id
			},

			'success': function( data ){ console.log(data)},
			error: alertAjax

		});

		/* ---- Fin Module Ajax ---- */
	}

	/* ---- Module Sauvegarde ---- */
	
	function labelSave () {

		let post_id = $( this ).attr('post_id');
		let titre = $( this ).text();

		editPost( post_id, titre )
		
	}

/* ---------- Fin section Modification ---------- */

/* --------	Debut Section Delete -------- */

	function dltOnClick (){
		let post_id = $(this).attr( 'post_id' );
		

		/* ---- Debut Module Post Ajax ---- */

		$.ajax({
			'url': '/wordpress/?rest_route=/todo/todo&todo_id='+post_id,
			'method': 'DELETE',
			'success': deleteTodo,
			error: alertAjax
		});

		/* ---- Fin Module Post Ajax ---- */

		alertDelete();// affiche au user que son post a bel et bien ete supprime

	}

	function deleteTodo( data , status  ) {
		$( '#todo-'+data.ID).remove();
    }

	//Fonction qui ajoute un effet genre suspendu au bonton delete lors du hover
	function mouseHoverEffect(){
	$( '.delete' ).mouseover( () => $( this ).toggleClass("hvr-hang") )

}

/* --------	Fin Section Delete -------- */

/* --------	Debut Section Alerte -------- */

	//Fonction qui gere le message au user lorsquil delete un pposy
	function alertDelete( message ) {

      let alert = $('#template-alert-delete').clone();
      alert.attr('id', "");

      let alertText = alert.find('.dlt-text');
      alertText.text( message );
      
      $('#section-alert').append(alert);
      alert.show();

    }

	//fonction qui affiche a l'user si il y a un probleme avec ajax
	//Fonction separer de celle du deletepost parce que differente information son display
	function alertAjax() {

      let alert = $('#template-alert-ajax').clone();
      alert.attr('id', "");

      let alertText = alert.find('.ajax-text');
      alertText.text();
      
      $('#section-alert').append(alert);
      alert.show();
    }

/* --------	Fin Section Alerte -------- */

/* --------	Misc Function -------- */

	function selectHighlight(){
		//On click va appliquer une classe special a l'element selectionne
		$(this).toggleClass('onSelect');
	}

/*      ----   ↓ SECTION DOCUMENT READY ↓   ----        */

$(document).ready(function(){

	/* Debut section Ajax start / complete */

		//ajout la classe a tout le element un curseur en chargement
		$( document ).ajaxStart( () => $( "*" ).addClass( "onLoad" ) );
		//retire la classe a tout le element un curseur en  lorsque chargement teminer
		$( document ).ajaxComplete( () => $( "*" ).removeClass( "onLoad" ) );

	/* Debut section Ajax start / complete */
	
/* ------- Debut Fonction ajax pour upload data de la BD -------*/

	let todoApp = $('#list-items');
		//ajax GET
			$.ajax({
				'url': '/wordpress/?rest_route=/todo/todo',
				'method': 'GET',
				'success': getTodo,
				error: alertAjax
			});

/* ------- 	Fin Fonction ajax pour upload data de la BD 	 -------*/	

/*      ----    Partie pour les fonction des exemple    ----        */

//Fonction qui permet lors clique sur icone poubelle de supprimer la liste parent

	$('.delete').click(deleteTodo);
	$('.delete').mouseover(mouseHoverEffect);

//Fonction qui selectionne lors du clique

	$('.itemLine').click(selectHighlight);

/*      ----    Section de modification des element     ----        */
	
	 $('.edit').click(function(){

	 	let $div=$('.text').closest('label'), isEditable=$div.is('.editable');  //Variable selectionnant le texte dans les label

	 	$div.prop('contenteditable',!isEditable).toggleClass('editable');   //Enable le contenu des etiquette a etre modifiable

		$div.focusout(labelSave); // Sauvegarde le texte lorsque utilisateur clique sur confirmer ou sur un autre element
	
	 	$(".text").hover(function label_in(){
	 		$(this).css("cursor", "text"); //Set le curseur a texte lorseque edit active 
	 	}, 
	 	function label_out(){
	 		$(this).css("cursor", "default");// si hors du champs , set le curseur a default
	 	});

	 	$(this).val() == "Modifier" ? edit_int() : edit_reset();    //toggle valeur bouton pour confirmation user
	 });

	 edit_int = () => $('.edit').val("Confirmer") ; // Confirme
	
	 edit_reset = () => $('.edit').val("Modifier") ; // reset le bouton


/*   -------   Fonction du formulaire  -------     */

	$('form').submit(function(event){ //Initie l'envoie du texte
		
		//Variable allant fetch l'information dans le champ texte

			var addNewPost = $('#contact-form').find('input[name="message"]').val();
			$('#contact-form').find('input[name="message"]').val('');
		/* ---- Debut Module Post Ajax ---- */

			$.ajax({
				'url': '/wordpress/?rest_route=/todo/todo',
				'method': 'POST',
				'data' : { 'titre' : addNewPost },
				'success': addPost,
				error: alertAjax
			});

		/* ---- Fin Module Post Ajax ---- */

		event.preventDefault(); //Previent le raffraichissement de la pages lors de l'envoi formulaire
				
	});
   
	
});

	</script>
	</body>
</html>
