$(function(){

    // DELETE/ADD TAG UNIT

    $("li span.closeTag").on('click', function(){
        $(this).parent().remove();
    })


    $("span.unitTagSrc").on('click', function(){
      $("span.unitTagSrc.active").removeClass("active");
      $(this).addClass("active");
    })

    $("span.like").on('click', function(){
        $(this).children("img").attr('src', (_, attr) => attr == 'img/icon_like.png' ? 'img/icon_like_red.png?2107042006' : 'img/icon_like.png')
        $(this).css('background', '#F2EFEC');
    })


    $(".owl-results").each(function() {
        $(this).owlCarousel({
            mouseDrag: false,
            // touchDrag: false,
            dots:false,
            // nav: true,
            responsive: {
                0: {
            
                    items: 1
                },
                600: {

                    items: 3
                },
                1100: {
                    items: 4
                }
            }
        });

        
    });

    $('.prevItem').click(function() {
        $(this).closest('.container').find('.listItem').trigger('prev.owl.carousel');
    })

    $('.nextItem').click(function() {
        $(this).closest('.container').find('.listItem').trigger('next.owl.carousel');
    })

    $(".testaCarousel").each(function() {
        $(this).owlCarousel({
            mouseDrag: false,
            touchDrag: false,
            rewind:true,
            loop:false,
            items: 1,
            nav:true,
            navText:['<span class="prev"><img src="img/arrow_left_F2EFEC.png" alt=""></span>','<span class="next"><img src="img/arrow_right_F2EFEC.png" alt=""></span>'],
            dots: true,
            onInitialized: function(e) {
                $(this).find('p.counter').text('1/' + this.items().length)
                console.log();
              }
            
        });

        $(this).on('changed.owl.carousel', function(e) {
            $(this).closest('.wrpResults').find('p.counter').text(e.item.index + 1 + '/' + e.item.count)

            // $(this).find('span.trash').on('click', function(){

            
            //     $(this).closest('.testaCarousel').trigger('remove.owl.carousel',1).trigger('refresh.owl.carousel');
            // })
        });

        

    });




})
  



// SELECT CUSTOM

var x, i, j, l, ll, selElmnt, a, b, c;

/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;

  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");

  for (j = 0; j < ll; j++) {

      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      
      c.addEventListener("click", function(e) {

          /*when an item is clicked, update the original select box,
          and the selected item:*/
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

      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });

}
function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
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

/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);