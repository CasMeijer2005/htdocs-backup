var formFooter = document.getElementById("form-contact");

formFooter.addEventListener("submit", function(evt) {
    evt.preventDefault();
    formFooter.classList.add("form-submit");

    var input_name = document.getElementById("input_name");
    var input_email = document.getElementById("input_email");
    var input_subject = document.getElementById("input_subject");
    var input_message = document.getElementById("input_message");

    var data = 'name=' + input_name.value + '<br>' +
        'email=' + input_email.value + '<br>' 
        'subject=' + input_subject.value + '<br>' +
        'message=' + input_message.value

    
    document.getElementById('data-form').innerHTML = data;
    formFooter.classList.remove("form-submit");
});