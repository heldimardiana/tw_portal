function form_user(){
    $("#button_add").hide('slow');
    $("#form_add").show('slow');
}

function hide_form_user(){
    $("#form_add").hide('slow');
    $("#button_add").show('slow');
}

function save_edit(){
    var nik       = $("#nik").val();
    var fname     = $("#f_name").val();
    var l_name    = $("#l_name").val();
    var email     = $("#email").val();
    var divisi    = $("#divisi").val();
    var dataString = 'p_nik=' + nik + '&p_fname=' + fname + '&p_lname=' + l_name + '&email=' + email + '&divisi=' + divisi;

    $.ajax({
          type: "POST",
          url: url_edit_user,
          dataType: "json",
          data: dataString,
          succes : function(data){
                
          }
    });
}