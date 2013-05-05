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
            top: event.pageY + 7 + "px",
            left: event.pageX + 7 + "px"
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

    // janky
    /*$("*").filter(function() { return $(this).css("color") == "rgb(97, 210, 214)" }).css("color", "#F00");
    $("*").filter(function() { return $(this).css("background-color") == "rgb(97, 210, 214)" }).css("background-color", "#F00");
    var new_color = String(shadeColor("FF0000", -10));
    $("*").filter(function() { return $(this).css("background-color") == "rgb(57, 198, 203)" }).css("background-color", "#" + new_color);*/
});


// thanks to "Pimp Trizkit" of stackoverflow <3
function shadeColor(color, percent) { 
    function parse(P) { return (P < 255 ? P < 1 ? 0 : P : 255) }
    var num = parseInt(color,16),
    amt = Math.round(2.55 * percent),
    R = (num >> 16) + amt,
    B = (num >> 8 & 0x00FF) + amt,
    G = (num & 0x0000FF) + amt;
    return (0x1000000 + parse(R) * 0x10000 + parse(B) * 0x100 + parse(G)).toString(16).slice(1);
}