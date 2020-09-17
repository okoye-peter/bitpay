$(function() {

	(function() {
		$("input[type='number']").keypress(function(e) {
		if (e.which != 8 && e.which != 0 && e.which != 46 && e.which != 44 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});

	$("input[type='number']").keyup( function() {
    var max = parseInt($(this).attr('max'));
    var min = parseInt($(this).attr('min'));
    if ($(this).val() > max)
    {
      $(this).val(max);
    }
    else if ($(this).val() < min)
    {
      $(this).val(min);
    }
    if(!$(this).val()) {
      $(this).val(min);
    }
  });

	var percentage1 = 10,
  		percentage2 = 12,
  		percentage3 = 15;

  var min1 = 0.001,
		  min2 = 5.001,
		  min3 = 25.001;

  var max1 = 5,
      max2 = 25,
  		max3 = 250;

  var percent = percentage1;



  $('#deposit_text').text(min1 + ' BTC');
  $('#percent_text').text(percentage1 + '%');
  $('#day_text').text(1);
  $('#profit_text').text(0.0001 + ' BTC');

  $('#day-calc').val(1);
  $("#deposit-calc").val(min1);


  $("#deposit-calc").on('click keyup', function() {

      var summ = parseFloat($(this).val()); //сумма вложения
      $('#deposit_text').text(summ + ' BTC');

      if (min1 <= summ && summ <= max1) {
      	$('#percent_text').text(percentage1 + '%');
      	$('.plans-item').removeClass('active');
      	$('#plan1').addClass('active');
      	percent = percentage1;
      } else if (min2 <= summ && summ <= max2) {
      	$('#percent_text').text(percentage2 + '%');
      	$('.plans-item').removeClass('active');
      	$('#plan2').addClass('active');
      	percent = percentage2;
      } else if (min3 <= summ && summ <= max3) {
      	$('#percent_text').text(percentage3 + '%');
      	$('.plans-item').removeClass('active');
      	$('#plan3').addClass('active');
      	percent = percentage3;
      } else{
      	percent = 0;
      	$('#profit_text').text(0 + ' BTC');
      	$('#deposit_text').text(0 + ' BTC');
      	$('.plans-item').removeClass('active');
      	$('#plan1').addClass('active');
      }


      var days = parseInt($("#day-calc").val());

      if(!$('#deposit-calc').val() || !$('#day-calc').val()){
  		$('#profit_text').text(0 + ' BTC');
  		$('#day_text').text(0);
  	} else{
  		var percent_sum = summ / 100;
  		var daily = percent * percent_sum;
  		var profitTotal = (daily * days).toFixed(8);

  		$('#profit_text').text(profitTotal + " " + " BTC");
  	}
    });

  $("#day-calc").on('click keyup', function() {

  	var days = parseInt($(this).val());
  	$('#day_text').text(days);

  	var summ = parseFloat($('#deposit-calc').val());

  	if(!$('#deposit-calc').val() || !$('#day-calc').val()){
  		$('#profit_text').text(0 + ' BTC');
  		$('#day_text').text(0);
  	} else{
  		var percent_sum = summ / 100;
  		var daily = percent * percent_sum;
  		var profitTotal = (daily * days).toFixed(8);

  		$('#profit_text').text(profitTotal + " " + " BTC");
  	}
  });

  $('.plans-item').click(function() {
  	$('.plans-item').removeClass('active');
  	$(this).addClass('active');
  	if($(this).is('#plan1')) {
  		$('#deposit-calc').val(min1);
  		percent = percentage1;
  		$('#percent_text').text(percentage1 + '%');
  	}
  	else if($(this).is('#plan2')) {
  		$('#deposit-calc').val(min2);
  		percent = percentage2;
  		$('#percent_text').text(percentage2 + '%');
  	}
  	else if($(this).is('#plan3')) {
  		$('#deposit-calc').val(min3);
  		percent = percentage3;
  		$('#percent_text').text(percentage3 + '%');
  	}

  	var summ = parseFloat($('#deposit-calc').val());
  	var days = parseInt($("#day-calc").val());

  	if(!$('#deposit-calc').val() || !$('#day-calc').val()){
  		$('#profit_text').text(0 + ' BTC');
  		$('#day_text').text(0);
  	} else{
  		var percent_sum = summ / 100;
  		var daily = percent * percent_sum;
  		var profitTotal = (daily * days).toFixed(8);

  		$('#profit_text').text(profitTotal + " " + " BTC");
  	}

  });



})();

});