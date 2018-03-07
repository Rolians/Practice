/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// @koala-prepend "jquery.min.js"
// @koala-prepend "bootstrap.min.js"
// @koala-prepend "jquery.timelinr-0.9.52.js"
// @koala-prepend "lightbox.min.js"
// @koala-prepend "jquery.validate.min.js"
// @koala-prepend "masonry.pkgd.min.js"

//CUSTOM CODE
function toggle_visibility(id) { var e = document.getElementById(id); $(e).slideToggle( "fast" ); }
$(document).ready(function(){$('.dropdown').hover(function(){ $(this).addClass('open') },function(){ $(this).removeClass('open') }); $(".navbar-scroll .nav li a[href^='#']").on('click', function(e) { e.preventDefault(); $('html, body').animate({ scrollTop: $(this.hash).offset().top - $('.navbar').height() }, $('body').attr("data-ease"), function(){ window.location.hash = this.hash; }); }); });
$(document).ready(function(){$('#tabpanel a').click(function (e) { e.preventDefault(); $(this).tab('show'); }); });
$(document).ready(function(){$().timelinr({arrowKeys: 'true'}); });
$(document).ready(function(){$('#event-calender #calender li').width($('#event-calender').width());});
$(window).on('resize', function(){ $('#event-calender #calender li').width($('#event-calender').width()); });
<<<<<<< HEAD
$(document).ready(function(){$('.scroll').click(function(e) {e.preventDefault();$('body').animate({ scrollTop: $('#' + $(this).attr('target')).offset().top }, 1000);});});
$(document).ready(function(){
var baseUrl = location.protocol + "//" + location.host;                
    $.ajax({
        'url': baseUrl+'/wp-content/themes/ievents-chitown/load/popup.php',
        'success': function (data) {$('#exitModal').empty().append(data); }
    });
});
$(document).ready(function(){
    var closingWindow = true;
    $(document).on('click', function (e) {
      closingWindow = false;
    });        
    window.onbeforeunload = function (e) {        
        if(closingWindow){            
            e = e || window.event;

            closingWindow = false;
            $('#exitModal').modal('show'); 
            if (e) { e.returnValue = 'Did you see our next event?'; }
            return 'Did you see our next event?';                      
        }
    };    
});
=======
$(document).ready(function(){$('.scroll').click(function(e) {e.preventDefault();$('body').animate({ scrollTop: $('#' + $(this).attr('target')).offset().top }, 1000);});});
>>>>>>> origin/master