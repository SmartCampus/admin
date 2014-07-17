function suppr(path){
    document.getElementById("supp-message").style.visibility="visible";
    $( "#supp-message" ).dialog({
      resizable: false,
      height:200,
      modal: true,
      buttons: {
        "Supprimer": function() {
            $(location).attr('href',path);
            $( this ).dialog( "close" );
        },
        "annuler": function() {
          $( this ).dialog( "close" );
        }
      }
    });
}