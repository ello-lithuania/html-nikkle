var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

// A $( document ).ready() block.
$( document ).ready(function() {
    $('.top-aside-dropdown').click(function(e) {
        e.preventDefault();
        //$(this).closest('button').css('background','red');
        if ($(".list-item-active")[0]){
            if($(this).closest('button').is(".list-item-active")) {
                $('.list-item-active').removeClass('list-item-active');
                $('.bot-active-radius').removeClass('bot-active-radius');
                $('.top-active-radius').removeClass('top-active-radius');
            } else {
                $('.list-item-active').removeClass('list-item-active');
                $('.bot-active-radius').removeClass('bot-active-radius');
                $('.top-active-radius').removeClass('top-active-radius');
                $(this).closest('button').addClass('list-item-active');
                $(this).closest('button').prev('.aside-list-item').addClass('bot-active-radius');
                $(this).closest('button').next('.aside-list-item').addClass('top-active-radius');
            }
        } else {
            $(this).closest('button').addClass('list-item-active');
            $(this).closest('button').prev('.aside-list-item').addClass('bot-active-radius');
            $(this).closest('button').next('.aside-list-item').addClass('top-active-radius');
        }
    });

    $('.popup-btn').click(function(e) {
      e.preventDefault();
      $('.popup-btn-body').removeClass('hidden');
    }); 
    $('.popup-close').click(function(e) {
      e.preventDefault();
      $('.popup-btn-body').addClass('hidden');
    }); 

    $('.tab-btn').click(function(e) {
      e.preventDefault();
      let attrid = $('.tab-btn-active').attr('data-showtab');
      $(`#${attrid}`).addClass('hidden');
      $('.tab-btn-active').removeClass('tab-btn-active');

      $(this).addClass('tab-btn-active');
      let newid = $('.tab-btn-active').attr('data-showtab');
      $(`#${newid}`).removeClass('hidden');

    }); 

    $('.next-tab-btn').click(function(e) {
      e.preventDefault();
      let idattr = $('.active-tab-btn').attr('data-showid');
      $(`#${idattr}`).addClass('hidden');
      $('.active-tab-btn').removeClass('active-tab-btn').next('.tab-btn-choose').addClass('active-tab-btn');
      let id = idattr.split( 'tab');
      console.log(Number(id['1']) +1);
      $(`#tab${Number(id['1']) +1}`).removeClass('hidden');
    }); 


    $('.tab-btn-choose').click(function(e) {
      e.preventDefault();
      let idattr = $('.active-tab-btn').attr('data-showid');
      $(`#${idattr}`).addClass('hidden');
      $('.active-tab-btn').removeClass('active-tab-btn');

      $(this).addClass('active-tab-btn');
      let idattr2 = $('.active-tab-btn').attr('data-showid');
      $(`#${idattr2}`).removeClass('hidden');
    }); 



    $('.popup-btn2').click(function(e) {
      e.preventDefault();
      $('.popup-btn-body2').removeClass('hidden');
    }); 
    $('.popup-close2').click(function(e) {
      e.preventDefault();
      $('.popup-btn-body2').addClass('hidden');
    }); 
    // 
    $('.mobile-menu-close').click(function(e) {
        $('.mobile-menu').addClass('hidden');
    });
    $('.mobile-menu-btn').click(function(e) {
        $('.mobile-menu').removeClass('hidden');
    });

    $('.thumbnail-btn').click(function(e) {
        if($('.thumbnail-menu').hasClass('hidden')) {
            $('.thumbnail-btn .thumbnail-btn-inner').removeClass('border-transparent').addClass('border-[#408FEF1A]');
            $('.thumbnail-menu').removeClass('hidden');
        } else {
            $('.thumbnail-btn .thumbnail-btn-inner').removeClass('border-[#408FEF1A]').addClass('border-transparent');
            $('.thumbnail-menu').addClass('hidden');
        }
    });

    $('.input-check-all').click(function(e) {
        if($(this).attr('checked')) {
          $('input[type="checkbox"]').each(function( index ) {
            $(this).attr('checked', false);
          });
        } else {
              $('input[type="checkbox"]').each(function( index ) {
                $(this).attr('checked', true);
              });
        }
    });

    $('.action-btn').click(function(e) {
        if($(this).is('.active')) {
            $(this).removeClass('active');
            $(this).next('.action-btn-controls').addClass('hidden');
        } else {
            $(this).addClass('active');
            $(this).next('.action-btn-controls').removeClass('hidden');
        }
    });
    $('.show-password').click(function() {
        $(this).prev('input').attr('type', 'text');
    });

    //
    $('.input-datepicker').daterangepicker();

      $('.input-datepicker').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });

      $('.input-datepicker-normal').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
      }, function(start, end, label) {
      });

});