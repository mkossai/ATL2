$(function() {
$('#sending').hide();
$('#sending_news').hide();

	$("#publicate_atl")
			.submit(
					"submit",
					function() {
						$.ajax( {
									url : $(this).attr('action'),
									type : 'POST',
									data : $(this).serializeArray(),
									success : function(data) {
										$('#success').html(data);
										effacer();
									},
									error : function(data) {

									},
									beforeSend : function() {
										$('#sending').show();
										
										if($('#atl_pseudo').val()=='')
											{
												$('#atl_pseudo').focus();
												$('#errorPseudo').html('<div class="alert alert-error" style="width:104px;"><font size="2px" face="calibri" color="red">Le champ PSEUDO est obligatoire </font></div>');
												return false;
											}
										else
										{
											$('#errorPseudo').html('');	
										}
										if($('#sex_atl').val()=='Choisir')
											{
												$('#sex_atl').focus();
												$('#errorSex').html('<div class="alert alert-error" style="width:104px;"><font size="2px" face="calibri" color="red">Le champ SEXE est obligatoire </font></div>');
												return false;
											}
										else
										{
											$('#errorSex').html('');	
										}
										if($('#frontend_backendbundle_achtraliktype_category').val()=='Choisir')
										{
											$('#frontend_backendbundle_achtraliktype_category').focus();
											$('#errorCat').html('<div class="alert alert-error" style="width:104px;"><font size="2px" face="calibri" color="red">Le champ CATEGORIE est obligatoire </font></div>');
											return false;
										}
										else
										{
											$('#errorCat').html('');	
										}
										if($('#frontend_backendbundle_achtraliktype_content').val().length < 36)
										{
											$('#frontend_backendbundle_achtraliktype_content').focus();
											$('#errorCont').html('<div class="alert alert-error" style="width:170px;"><font size="2px" face="calibri" color="red">Votre ATL est trés courte, P.S : 36 caractéres au minimum </font></div>');
											return false;
										}
										else
										{
											$('#errorCont').html('');	
										}
	


										$('#success').html('<div class="progress progress-striped active"><div class="bar" style="width: 100%;" id="sending"></div></div>');
										$('#sending').hide();
										effacerPublicate();
										$('#ATL').toggle();

									},
									complete : function() {
										$('#sending').hide();
									}
								});
						return false;
					});

});

function effacer () {
  $(':input','#contactForm')
   .not(':button, :submit, :reset, :hidden')
   .val('')
   .removeAttr('checked')
   .removeAttr('selected');
}

function effacerPublicate () {
  $(':input','#publicate_atl')
   .not(':button, :submit, :reset, :hidden')
   .val('')
   .removeAttr('checked')
   .removeAttr('selected');
}

function effacernewsletter () {
  $(':input','#form_psa_news_x154')
   .not(':button, :submit, :reset, :hidden')
   .val('')
   .removeAttr('checked')
   .removeAttr('selected');
}