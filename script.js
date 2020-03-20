$('.top-line').after('<div class="mobile-menu d-xl-none">');
	$('.top-menu').clone().appendTo('.mobile-menu');
	$('.mobile-menu-btn').click(function(){
		$('.mobile-menu').stop().slideToggle();
	});

  $('#myCarousel').carousel({
   interval: 3000,
})

script>function calcpayments()

{

//The five variables we are going to use in the formula

var nprice=document.forms[0].nprice.value*1;
var salestax=document.forms[0].tax.value*1;
var interest=document.forms[0].rate.value*1;
var dpayment=document.forms[0].payment.value*1;

var t;

//We used a loop to select the term for the payments

for (i=0; i<document.forms[0].term.options.length; i++)

{

if (document.forms[0].term.options[i].selected)
t = document.forms[0].term.options[i].value*1;
}
var result=(nprice*(salestax/100 +1)-dpayment)*((interest/100)/12) / (1-Math.pow((1+(interest/100)/12),(-t)));

result=Math.round(result*100) /100;
document.getElementById(“monthlypayment”).innerHTML=result;

}

</script>
