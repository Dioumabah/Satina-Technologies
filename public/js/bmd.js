/**
 *
 */

	//Catégorie
	$(document).ready(function() {
		$('.nBtn').on('click', function(event) {
			event.preventDefault();
				$('.myForm #myModal').modal();
			});
		});
	$(document).ready(function() {
		$('.table .eBtn').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			var text=$(this).text();
			if (text==' Modifier') {
				$.get(href, function(cat, status) {
					$('.myFormEdit #idCategorie').val(cat.idCategorie);
					$('.myFormEdit #nomCategorie').val(cat.nomCategorie);
					$('.myFormEdit #description').val(cat.description);
				});
				$('.myFormEdit #myModalEdit').modal();
				}
		});

	$('.table .delBtn').on('click', function(event) {
		event.preventDefault();
		var href=$(this).attr('href');
		$('#myModal1 #delRef').attr('href', href);
		$('#myModal1').modal();
	});
});
	//Produit

	$(document).ready(function() {
		$('.nBtnProd').on('click', function(event) {
			event.preventDefault();
				$('.myFormProd #myModalProd').modal();
			});
		});
	$(document).ready(function() {
		$('.table .eBtnProd').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			var text=$(this).text();
				$.get(href, function(prod, status) {
					$('.myFormProdEdit #idProduit').val(prod.idProduit);
					$('.myFormProdEdit #designation').val(prod.designation);
					$('.myFormProdEdit #description').val(prod.description);
					$('.myFormProdEdit #prix').val(prod.prix);
					$('.myFormProdEdit #quantite').val(prod.quantite);
					$('.myFormProdEdit #categorie').val(prod.categorie);
				});
				$('.myFormProdEdit #myModalProdEdit').modal();

		});

	$('.table .delBtnProd').on('click', function(event) {
		event.preventDefault();
		var href=$(this).attr('href');
		$('#myModalProdDel #delRefProd').attr('href', href);
		$('#myModalProdDel').modal();
	})
});
//Client
	$(document).ready(function() {
		$('.nBtnClt').on('click', function(event) {
			event.preventDefault();
				$('.myFormClt #myModalClt').modal();
			});
		});


	$(document).ready(function() {
		$('.table .delBtnClt').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalCltDel #delRefClt').attr('href', href);
			$('#myModalCltDel').modal();
		});
		});

	$(document).ready(function() {
		$('#submitClt').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalCltEmail #emailRefClt').attr('href', href);
			$('#myModalCltEmail').modal();
		});
		});

	//Commande
	$(document).ready(function() {
		$('.table .delBtnCmd').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalCmdDel #delRefCmd').attr('href', href);
			$('#myModalCmdDel').modal();
		});
		});

	$(document).ready(function() {
		$('.byBtnCmd').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalLgCmdVal #bayRefCmd').attr('href', href);
			$('#myModalLgCmdVal').modal();
		});
		});

	//Prod
	$(document).ready(function() {
		$('.table .delBtnProd').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalProdDel #delRefProd').attr('href', href);
			$('#myModalProdDel').modal();
		});
		});

	//Categorie
	$(document).ready(function() {
		$('.table .delBtnCat').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalCatDel #delRefCat').attr('href', href);
			$('#myModalCatDel').modal();
		});
		});


	//LigneCommande
	$(document).ready(function() {
		$('.table .delBtnLgCmd').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalLgCmdDel #delRefLgCmd').attr('href', href);
			$('#myModalLgCmdDel').modal();
		});
		});

	//reglement
	$(document).ready(function() {
		$('.bmdReglement ').on('click', function(event) {
			event.preventDefault();
			$('#myModalBmd').modal();
		});
		});
	//Users
	$(document).ready(function() {
		$('.btnUserCreate').on('click', function(event) {
			event.preventDefault();
			$('.myFormUser #myModalUser').modal();
		});
		});
	//Users
	$(document).ready(function() {
		$('.btnUserCon').on('click', function(event) {
			event.preventDefault();
			$('.myFormUserCon #myModalUserCon').modal();
		});
		});

	//LigneCommande
	$(document).ready(function() {
		$('.table .delBtnLgCmd').on('click', function(event) {
			event.preventDefault();
			var href=$(this).attr('href');
			$('#myModalLgCmdDel #delRefLgCmd').attr('href', href);
			$('#myModalLgCmdDel').modal();
		});
		});
	//Confirm
//	$(document).ready(function() {
//		$('#bmdConfirm').on('click', function(event) {
//			event.preventDefault();
//			$('#myModalConfirm').modal();
//		});
//		});


	//Login
	$(document).ready(function() {
		$('.btnLogin').on('click', function(event) {
			event.preventDefault();
			$('#myModalLogin').modal();
		});
        });

//Filiere
$(document).ready(function() {
    $('.table .delBtnFiliere').on('click', function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        $('#myModalFiliereDelete #deleteReferenceFiliere').attr('href', href);
        $('#myModalFiliereDelete').modal();
    });
    });

    //Classe
$(document).ready(function() {
    $('.table .delBtnClasse').on('click', function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        $('#myModalClasseDelete #deleteReferenceClasse').attr('href', href);
        $('#myModalClasseDelete').modal();
    });
    });
