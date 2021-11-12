$( document ).ready(function() {

	seconds_remaining = $('.timeRemaining').val();
	seconds_remaining_m_temp = Math.trunc(seconds_remaining/60);
	seconds_remaining_s_temp = seconds_remaining%60;
	$('.remainingTimeSpan').html(seconds_remaining_m_temp + " دقائق و " + seconds_remaining_s_temp + " ثانية");

	if (seconds_remaining > 0)
		window.setInterval(function(){
			if (seconds_remaining == 0)
				location.reload();
			seconds_remaining_m_temp = Math.trunc(seconds_remaining/60);
			seconds_remaining_s_temp = seconds_remaining%60;
			$('.remainingTimeSpan').html(seconds_remaining_m_temp + " دقائق و " + seconds_remaining_s_temp + " ثانية");
			seconds_remaining--;
		}, 1000);
	

	

	$('.printGoalButton').on('click',function(){
		var newWin=window.open('','Print-Window');

		newWin.document.open();

		newWin.document.write('<html><link rel="stylesheet"  href="public/css/style.css" /><link rel="stylesheet" href="public/css/bootstrap.min.css"><link href="public/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" /><link href="public/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" /><link href="public/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" /><style>@media print {th, td { visibility: hidden;} }</style><body dir="rtl" onload="window.print()">'+ $('.printGoal').html() +'</body></html>');

		newWin.document.close();
		setTimeout(function(){newWin.close();},10);
	})

	$('.printGoalButton2').on('click',function(){
		var newWin=window.open('','Print-Window');

		newWin.document.open();

		newWin.document.write('<html><link rel="stylesheet"  href="public/css/style.css" /><link rel="stylesheet" href="public/css/bootstrap.min.css"><link href="public/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" /><link href="public/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" /><link href="public/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" /><style>section {height: 100vh; page-break-after: always;}</style><body dir="rtl" onload="window.print()">'+ $('.printGoal').html() +'</body></html>');

		newWin.document.close();
		setTimeout(function(){newWin.close();},10);
	})
	


	$('.search').on('keyup paste', function(e){
		if($('.search').val().length >= 3){
			$.ajax
			({ 
				url: 'generalInfo',
				data: 
				{
					"search_text": $('.search').val()
				},
				dataType: 'json',
				cache: false,
				type: 'post',
				beforeSend: function() {
					// console.log("search_text : " + $('.search').val());
				},
				success: function(result)
				{
					$('.listShow').slideDown('slow');
					$('.listShow').html("");
					$('.listShow').append(result.html);
					return false;
				}
			});
		}
	});


	$('.searchManage').on('keyup paste', function(e){
		$(".searchManageA").attr("href", "?f-" + $('.searchManage').val());

		if(e.which == 13) {
			$(".searchManageA")[0].click();
		}
	});
	
	
	
	$('.username').on('keyup paste', function(e){
		if(e.which == 13) {
			$(".login")[0].click();
		}
	});
	$('.login').on('click', function(e){
		if($('.username').val().length >= 3 && $('.section').val().length >= 3){
			console.log( $('.section').val());
			$.ajax
			({ 
				url: 'login_page',
				data: 
				{
					"username": $('.username').val(),
					"section": $('.section').val(),
				},
				dataType: 'json',
				cache: false,
				type: 'post',
				beforeSend: function() {
					$('.username-invalid').hide();
				},
				success: function(result)
				{
					if (result.data == 0){
						$('.login-success-text').html("مرحباً بك مرة أخرى .. جاري الان تحويلك");
					} else {
						$('.login-success-text').html("تم الإنضمام .. جاري الان تحويلك ...");
					}
					$('.login').attr("disabled", true);
					$('.login-success').fadeIn();
					$(function () {
						setTimeout(function() {
							window.location.replace(result.redirection);
						}, 3000);
					});
				}
			});
		} else {
			$('.username-invalid').fadeIn();
		}
	});




	$(".group_name").on('change', function() {
		tr_element = $(this).parent().parent();
		group_value = $(this).val();
		
		$.ajax
		({ 
			url: 'unattendedStudent_model',
			data: 
			{
				"value": group_value,
				"id": $('.std_id').val()
			},
			dataType: 'json',
			cache: false,
			type: 'post',
			success: function(result)
			{
				if (result.data == 1){
					tr_element.addClass("bg-success");
					setTimeout(function() {
						tr_element.removeClass("bg-success");
					}, 2000);
				} else {
					
				}

			}
		});
	});

	$(".confirmQuestions").on('click', function() {
		$.ajax
		({ 
			url: 'generateQuestions',
			data: 
			{
				"qids": $('.qIds').val(),
				"examTime": $('.examTime').val(),
			},
			dataType: 'json',
			cache: false,
			type: 'post',
			success: function(result)
			{
				if (result.result == 1){
					alert("Exam has started!");	
					location.reload();
				}
			}
		});
	});


	

	$(".btn-question-modal").on('click', function() {
		question_id = $(this).parent().find(".question_id").val();
		$.ajax
		({ 
			url: 'questions_model',
			data: 
			{
				"question_id": question_id,
			},
			dataType: 'json',
			cache: false,
			type: 'post',
			success: function(result)
			{
				dataRes = result.data;
				$('.modal-body').html('<h1 dir="ltr" class="text-center">'+dataRes.question+'</h1>');
				$('.modal-body').append('<ul class="list-group">');

				$('.modal-body').append('<li class="list-group-item '+(dataRes.answer1 == dataRes.correct ? 'list-group-item-success' : '') + '">'+dataRes.answer1+'</li>');

				$('.modal-body').append('<li class="list-group-item '+(dataRes.answer2 == dataRes.correct ? 'list-group-item-success' : '') + '">'+dataRes.answer2+'</li>');

				$('.modal-body').append('<li class="list-group-item '+(dataRes.answer3 == dataRes.correct ? 'list-group-item-success' : '') + '">'+dataRes.answer3+'</li>');

				$('.modal-body').append('<li class="list-group-item '+(dataRes.answer4 == dataRes.correct ? 'list-group-item-success' : '') + '">'+dataRes.answer4+'</li>');

				
				$('.modal-body').append('</ul>');
			}
		});
	});



	

	$(".generateQuestions").on('click', function() {
		$('.generateQuestions').prop('disabled', true);

		selected_moad_ids = $('.moadCheckboxes:checked').map(function(_, el) {
			return $(el).val();
		}).get();

		selected_moad = $('.moadCheckboxes:checked').next().map(function(_, el) {
			return $(el).html();
		}).get();

		$.ajax
		({ 
			url: 'generateQuestions',
			data: 
			{
				"moad_ids": selected_moad_ids,
				"moad": selected_moad,
				"questionsCount": $('.questionsCount').val(),
				"examTime": $('.examTime').val()
			},
			dataType: 'json',
			cache: false,
			type: 'post',
			success: function(result)
			{
				questions = result.questions;
				counter = 1;
				
				$('.result').append("<input type='hidden' class='qIds' value='"+result.qIds+"' />");
				
				$('.resultTable').html("");
				$.each(questions, function(index, item){
					madaSplit = index.split('$');
					$(".resultTable").append('<tr><td colspan="3" class="text-center text-white bg-default">'+madaSplit[0]+'</td></tr>');
					$.each(item, function(i, question){
						$(".resultTable").append('<tr><td class="text-right">'+counter+'</td><td class="text-right" dir="ltr">'+question.question+'</td><td class="text-right" dir="rtl">'+madaSplit[1]+'-'+question.id+'</td></tr>');
						counter++;
					});
				});

				$('.result').slideDown("slow");
			}
		});
	});




	$('.editDisbursementsBTN').on('click', function(){
		$.ajax
		({ 
			url: 'disbursements_getInfo',
			data: 
			{
				"edit_id": $(this).parent().children('input')[0]['defaultValue']
			},
			dataType: 'json',
			type: 'post',
			success: function(result)
			{
				$('[name="titleSarafia_edit"]').val(result.result.title);
				$('[name="priceSarafia_edit"]').val(result.result.value);
				$('[name="dateSarafia_edit"]').val(result.result.date);
				$('[name="detailsSarafia_edit"]').html(result.result.description);
				$('[name="id_edit"]').val(result.result.id);

			}
		});
	});
	
	$('.editwaridatBTN').on('click', function(){
		$.ajax
		({ 
			url: 'waridat_getInfo',
			data: 
			{
				"edit_id": $(this).parent().children('input')[0]['defaultValue']
			},
			dataType: 'json',
			type: 'post',
			success: function(result)
			{
				$('[name="titleSarafia_edit"]').val(result.result.title);
				$('[name="priceSarafia_edit"]').val(result.result.value);
				$('[name="dateSarafia_edit"]').val(result.result.date);
				$('[name="detailsSarafia_edit"]').html(result.result.description);
				$('[name="id_edit"]').val(result.result.id);

			}
		});
	});
	
	$('.editwasilBTN').on('click', function(){
		$.ajax
		({ 
			url: 'wasil_getInfo',
			data: 
			{
				"edit_id": $(this).parent().children('input')[0]['defaultValue']
			},
			dataType: 'json',
			type: 'post',
			success: function(result)
			{
				$('[name="titlePerson_edit"]').val(result.result.taken);
				$('[name="priceWasil_edit"]').val(result.result.value);
				$('[name="dateWasil_edit"]').val(result.result.date);
				$('[name="detailsWasil_edit"]').html(result.result.description);
				$('[name="typeWasil_edit"]').removeAttr('checked');
				$("input[name=typeWasil_edit][value=" + result.result.type + "]").prop('checked', true);
				//typeWasil_edit
				$('[name="id_edit"]').val(result.result.id);

			}
		});
	});
	
});