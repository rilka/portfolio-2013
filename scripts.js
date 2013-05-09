$(window).load(function() {
    // show proper page on load
    var page = window.location.hash.substring(1);
    if (page != "")
        $("#" + page + "_section").show();
    else
        $("#home_section").show();
    $("#footer").show();

    // page transitions
    $("#title a, #navigation a").click(function(e) {
        $("#main > div").hide();
        target = $(this).attr("href") + "_section";
        $(target).fadeIn();        
    });

    // courses tooltip 
    $("#courses_link").bind("mousemove", function(event) {
        $(".courses").css({
            top: event.pageY - $("#wrapper").offset().top + 7 + "px",
            left: event.pageX - $("#wrapper").offset().left + 7 + "px"
        }).show();
    }).bind("mouseout", function() {
        $(".courses").hide();
    });    

    // contact form validation
    $(".error").hide();  
    $("#response").hide();  
    $(".button").click(function() {                         
        var form = true;
        $(".error").hide();  

        var message = $("textarea#message").val();  
        if (message == "") {  
            $("[for='message']").fadeIn(300);  
            $("textarea#message").focus();  
            form = false;
        }

        var email = $("input#email").val();  
        if (email == "") {  
            $("[for='email']").fadeIn(300);  
            $("input#email").focus();  
            form = false;  
        }            

        var name = $("input#name").val();  
        if (name == "") {  
            $("[for='name']").fadeIn(300);  
            $("input#name").focus(); 
            form = false;  
        }        
        
        if (form == false) {
            return false;
        }
      
        var form_data = 'name=' + name + '&email=' + email + '&message=' + message;   
        $.ajax({  
            type: "POST",  
            url: "process.php",  
            data: form_data,  
            success: function() {  
                $("input, textarea").prop("disabled", "true");
                $("#response").hide();
                $("#response").html("Thanks, I'll be in touch soon!");  
                $("#response").fadeIn(300);  
            },
            error: function() {
                $("#response").hide();
                $("#response").addClass("broken");
                $("#response").html("Sorry, something went wrong! Try submitting your message again?");  
                $("#response").fadeIn(300);                
            }
        });  

        return false;             
    }); 
});