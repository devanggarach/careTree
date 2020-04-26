    	$(document).ready(function () {
    		$("#sidebar").mCustomScrollbar({
    			theme: "minimal"
    		});

    		$('#dismiss, .overlay').on('click', function () {
    			$('#sidebar').removeClass('active');
    			$('.overlay').removeClass('active');
    		});

    		$('#sidebarCollapse').on('click', function () {
    			$('#sidebar').addClass('active');
    			$('.overlay').addClass('active');
    			$('.collapse.in').toggleClass('in');
    			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
    		});
    	});

        // scroll functions
        $(window).scroll(function(e) {

            // add/remove class to navbar when scrolling to hide/show
            var scroll = $(window).scrollTop();
            if (scroll >= 150) {
                $('.navbar').addClass("navbar-hide");
            } else {
                $('.navbar').removeClass("navbar-hide");
            }

        });
        mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

$(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });


// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

