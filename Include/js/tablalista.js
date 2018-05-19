
// from http://www.mediacollege.com/internet/javascript/number/round.html
function roundNumber(number,decimals) {
  var newString;// The new rounded number
  decimals = Number(decimals);
  if (decimals < 1) {
    newString = (Math.round(number)).toString();
  } else {
    var numString = number.toString();
    if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
      numString += ".";// give it one at the end
    }
    var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
    var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
    var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
    if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
      if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
        while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
          if (d1 != ".") {
            cutoff -= 1;
            d1 = Number(numString.substring(cutoff,cutoff+1));
          } else {
            cutoff -= 1;
          }
        }
      }
      d1 += 1;
    } 
    if (d1 == 10) {
      numString = numString.substring(0, numString.lastIndexOf("."));
      var roundedNum = Number(numString) + 1;
      newString = roundedNum.toString() + '.';
    } else {
      newString = numString.substring(0,cutoff) + d1.toString();
    }
  }
  if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
    newString += ".";
  }
  var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
  for(var i=0;i<decimals-decs;i++) newString += "0";
  //var newNumber = Number(newString);// make it a number if you like
  return newString; // Output the result to the form field (change for your purposes)
}

function update_total() {
  var total = 0;
  var sumtax = 0;
  $('.price').each(function(i){
    price = $(this).html().replace("$","");
    if (!isNaN(price)) total += Number(price);
  });

  total = roundNumber(total,2);

  $('.ctax').each(function(i){
    subtax = $(this).html().replace("$","");
    if (!isNaN(subtax)) sumtax += Number(subtax);
  });

  vtax = roundNumber(sumtax,2);

  $('#subtotal').html("$"+total);
  $('#total').html("$"+total);
  $('#sumtax').html("$"+vtax);
  
  update_balance();
}

function update_balance() {
  var due = $("#total").html().replace("$","") - $("#paid").val().replace("$","");
  due = roundNumber(due,2);
  
  $('.due').html("$"+due);
}

function update_price() {
  var row = $(this).parents('.item-row');
  var price = row.find('.cost').val().replace("$","") * row.find('.qty').val();
  var tax = row.find('.tax').val()/100;
  var subtax = price  * tax;
  price = roundNumber(price,2);
  subtax = roundNumber(subtax,2);
  isNaN(price) ? row.find('.price').html("N/A") : row.find('.price').html("$"+price);
  isNaN(price) ? row.find('.ctax').html("N/A") : row.find('.ctax').html("$"+subtax);
  
  update_total();
}

function bind() {
  $(".cost").blur(update_price);
  $(".qty").blur(update_price);
  $(".tax").blur(update_price);
}

$(document).ready(function() {

  $('input').click(function(){
    $(this).select();
  });

  $("#paid").blur(update_balance);
   
  $("#addrow").click(function(){
    $(".item-row:last").after('<tr class="item-row"> <td class="description"><input placeholder="Descripción" id="" type="text" name="descripcion[]"></td><td><input type="text" name="cantidad[]" class="cost" value=""></td><td><input type="number" name="cantidad[]" class="qty"></td><td><input type="text" name="cantidad[]" class="tax"></td><td><span class="price"></span></td><td><span class="ctax"></span></td></tr>');
    if ($(".deleterow").length > 0) $(".deleterow").show();
    bind();
  });
  
  bind();
  
  $(".deleterow").live('click',function(){
    $(this).parents('.item-row').remove();
    update_total();
    if ($(".deleterow").length < 2) $(".deleterow").hide();
  });
  

  
});