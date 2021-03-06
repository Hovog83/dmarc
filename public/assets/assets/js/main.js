/**
* Template Name: Siimple - v2.0.1
* Template URL: https://bootstrapmade.com/free-bootstrap-landing-page/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Toggle nav menu
  $(document).on('click', '.nav-toggle', function(e) {
    $('.nav-menu').toggleClass('nav-menu-active');
    $('.nav-toggle').toggleClass('nav-toggle-active');
    $('.nav-toggle i').toggleClass('bx-x bx-menu');

  });

  // Toogle nav menu drop-down items
  $(document).on('click', '.nav-menu .drop-down > a', function(e) {
    e.preventDefault();
    $(this).next().slideToggle(300);
    $(this).parent().toggleClass('active');
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  $(document).on('click', '.nav-menu a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      e.preventDefault();
      var target = $(this.hash);
      if (target.length) {

        var scrollto = target.offset().top;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .active').removeClass('active');
          $(this).closest('li').addClass('active');
          $('.nav-menu').removeClass('nav-menu-active');
          $('.nav-toggle').removeClass('nav-toggle-active');
          $('.nav-toggle i').toggleClass('bx-x bx-menu');
        }
        return false;
      }
    }
  });
  $("#getDns").on('submit', function(e) {
      e.preventDefault();
    $.ajax({
      url: $(this).attr("action"),
      headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'post',
      dataType: 'json',
      data: $(this).serialize(),
      error: function(jqXhr, json, errorThrown){
        $("#selectotValidate").text("");
        $("#domenValidate").text("");
        if(jqXhr.responseJSON.errors.selectot){
          $("#selectotValidate").text(jqXhr.responseJSON.errors.selectot.toString())
        } 
        if(jqXhr.responseJSON.errors.domen){
          $("#domenValidate").text(jqXhr.responseJSON.errors.domen.toString())
        }
      },
      success:function(data) {
        console.log(data);
        $("#tableDmarc tbody").html("")
         let html = "<tr>"
        $.each(data.dmarc, function(i, item) {
          html += "<td>";
            html += item.host;
          html += "</td>";

          html += "<td>"; 
            html += item.type;
          html += "</td>";

          html += "<td>";
            html += item.ttl;
          html += "</td>";

          html += "<td>";
            html += item.txt;
          html += "<td>";
        });
        $("#tableDmarc tbody").html(html);

        $("#spfInfo").html(data.spf)

        $("#tableDkim tbody").html("")
         let dkim = "<tr>"
        $.each(data.dkim, function(i, item) {
          dkim += "<td>";
            dkim += item.host;
          dkim += "</td>";

          dkim += "<td>"; 
            dkim += item.type;
          dkim += "</td>";

          dkim += "<td>";
            dkim += item.ttl;
          dkim += "</td>";

          dkim += "<td>";
            dkim += item.txt;
          dkim += "<td>";
        });
          dkim += "</tr>";
        $("#tableDkim tbody").html(dkim);

        $("#info").css("display","block");
      }
    })
  })  
     $(".xmlRow").each(function(index) {
        var dkum = $(this).children('.dkum').text();
        var spf = $(this).children('.spf').text();

        if(dkum == "pass" && spf == "pass"){
          $(this).css("background","#80bb80")
        }else if( dkum == "fail" && spf == "fail" ){
          $(this).css("background","#ff7575")
        }else{
          $(this).css("background","#fdd375")
        }


     });

})(jQuery);