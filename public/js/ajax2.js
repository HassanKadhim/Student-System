$( document ).ready(function() {

	//start button
	$('#sQuiz').on('shown.bs.collapse', function () {
		$('#loading').show();
		$.ajax
		({ 
			url: 'view/testyourself/ajax/quiz.php',
			data: 
			{
				"state": "start"
			},
			dataType: 'json',
			type: 'post',
			success: function(result)
			{
				if (result['result'] == "bad")
				{
					showMessage("لايوجد اسئلة كافية", "danger");
					$('#sQuiz').collapse("toggle");
				}
				else
				{
					$('#answers').html("");
					$('#loading').fadeOut();
					$('#next').show();
					$('#answers').show();
					$('#question').show();
					$('#qTop').show();
					$('#aTop').hide();
					$('#result').hide();
					$('#result').html();
					
					$('#degree').html("الدرجة : " + result['degree']);
					$('#question_number').html("رقم السؤال : " + result['current_question']);
					$('#question').html(result['question']);
					$('#answers').append(radioButton(result['ans1']) + '<br>');
					$('#answers').append(radioButton(result['ans2']) + '<br>');
					$('#answers').append(radioButton(result['ans3']) + '<br>');
					$('#answers').append(radioButton(result['ans4']) + '<br>');
					takeMeTo(sQuiz);
					$('#next').removeAttr('disabled');
				}

			}
		});
	})
	
	
	//next button
	$('#next').click(function(){
		$('#next').attr('disabled');
		$('#loading').fadeIn();
		var answer = $('#qAnswer:checked').val();
		$.ajax
		({ 
			url: 'view/testyourself/ajax/quiz.php',
			data: 
			{
				"state": "next",
				"answer": answer
			},
			dataType: 'json',
			type: 'post',
			success: function(result)
			{
				$('#answers').html("");
				$('#loading').fadeOut();	
				if (result['finish']==1)
				{
					$('#next').hide();
					$('#answers').hide();
					$('#question').hide();
					$('#qTop').hide();
					$('#aTop').show();
					$('#aTop').html('<div class="col text-white"><h1>انتهى الاختبار</h1></div>');
					$('#result').show();
					$('#result').html('<div class="col"><h4>النتيجة النهائية : ' + result['degree'] + '</h4></div>');
				}
				else
				{
					$('#degree').html("الدرجة : " + result['degree']);
					$('#question_number').html("رقم السؤال : " + result['current_question']);
					$('#question').html(result['question']);
					$('#answers').append('<form>');
					$('#answers').append(radioButton(result['ans1']) + '<br>');
					$('#answers').append(radioButton(result['ans2']) + '<br>');
					$('#answers').append(radioButton(result['ans3']) + '<br>');
					$('#answers').append(radioButton(result['ans4']) + '<br>');
					$('#answers').append('</form>');
					takeMeTo(sQuiz);
					$('#next').removeAttr('disabled');
				}
			}
		});
	})
	
	//addQuestion button
	$('#addQuestion__btn').click(function(){
		$('#addQuestion__btn').attr('disabled');
		var question = $('#question_details').val();
		var answer_1 = $('#answer_1').val();
		var answer_2 = $('#answer_2').val();
		var answer_3 = $('#answer_3').val();
		var answer_4 = $('#answer_4').val();
		var answer_right = $('#answer_right:checked').val();
		var security_answer = $('#security_answer').val();
		var security_question = $('#security_question').val();
		if (question == "" ||answer_1 == "" ||answer_2 == "" ||answer_3 == "" ||answer_4 == "" ||answer_right == ""||security_answer == ""||security_question =="")
		{
			showMessage("يرجى التأكد من المدخلات","danger");
		}
		else
		{
			if (security_question !== security_answer)
			{
				showMessage("يرجى التأكد من سؤال الأمان","danger");
			}
			else
			{
				$.ajax
				({ 
					url: 'view/testyourself/ajax/addQuestion.php',
					data: 
					{
						"state": "add",
						"question": question,
						"answer_1": answer_1,
						"answer_2": answer_2,
						"answer_3": answer_3,
						"answer_4": answer_4,
						"answer_right": answer_right
					},
					dataType: 'json',
					type: 'post',
					success: function(result)
					{
						if (result['result'] == "good")
						{
							$('#question_details').val("");
							$('#answer_1').val("");
							$('#answer_2').val("");
							$('#answer_3').val("");
							$('#answer_4').val("");
							$('#security_answer').val("");
							$('#security_question').val("");
							showMessage(" تم ارسال السؤال بنجاح. شكراً لك", "success");
							$('#addQuestion').modal('hide');
						}
						else
						{
							showMessage("يوجد مشكلة اثناء ارسال السؤال .. يرجى مراجعة الادارة", "danger");
						}
						$('#addQuestion__btn').removeAttr('disabled');
						
					}
				});
			}
		}
	})
	$('#addQuestion').on('show.bs.modal', function (e) {
	  security();
	})
	function showMessage(text, mode)
	{
		if (mode == "primary")
		{
			$( "#messageText" ).removeClass( "text-danger" );
			$( "#messageText" ).removeClass( "text-success" );
			$( "#messageText" ).addClass( "text-primary" );
			$('#messageText').html("<i class='fa fa-check' aria-hidden='true'></i><br>" + text);
			$('#messageModalShow').modal('show');
		}
		if (mode == "success")
		{
			$( "#messageText" ).removeClass( "text-danger" );
			$( "#messageText" ).removeClass( "text-primary" );
			$( "#messageText" ).addClass( "text-success" );
			$('#messageText').html("<i class='fa fa-check' aria-hidden='true'></i><br>" + text);
			$('#messageModalShow').modal('show');
		}
		else if (mode == "danger")
		{
			$( "#messageText" ).removeClass( "text-primary" );
			$( "#messageText" ).removeClass( "text-success" );
			$( "#messageText" ).addClass( "text-danger" );
			$('#messageText').html("<i class='fa fa-times text-center' aria-hidden='true'></i><br>" + text);
			$('#messageModalShow').modal('show');
		}
	}
	function radioButton(answer)
	{
		var string = '<div class="input-group"><div class="input-group-prepend"><div class="input-group-text bg-secondary"><input name="radioButton" id="qAnswer" value="'+ answer +'" type="radio" aria-label="Radio button for following text input"></div></div><input type="text" style="direction:rtl;" disabled class="form-control" aria-label="Text input with radio button" value="'+ answer +'"></div>';
		return string;
	}
	function takeMeTo(id)
	{
		$('html, body').animate({
			scrollTop: $(id).offset().top
		}, 1000);	
	}
	
	function security()
	{
		var a = 1 + Math.floor(Math.random() * 10);
		var b = 1 + Math.floor(Math.random() * 10);
		$('#security_answer').val(a+b);
		$('#security_question_2').html(a + " + " + b);
	}
	
	
	
	// FAQ SEARCH
	$('#faq_search').click(function(){
		$('#faq_result').html("");
		var faq_input = $('#faq_search_input').val();
		if (faq_input == "")
		{
			$('#faq_result').append('<div class="exercies_list bg-danger text-white">لايوجد نتائج</div>');
		}
		else
		{
			$.getJSON('public/js/questions.json', function(data) {
				var results = data.filter(function(quest) {
				  return quest.question.indexOf(faq_input) > -1;
				});
				if (results == "")
				{
					$('#faq_result').append('<div class="exercies_list bg-danger text-white">لايوجد نتائج</div>');
				}
				else
				{
					$.each(results, function( index, value ) {
						$('#faq_result').append('<div id="faq_list"><div class="exercies_list" style="cursor:pointer;">'+ value.question +'</div><div class="exercies_list bg-light text-dark" style="display: none;cursor:pointer;">'+ value.answer+'</div></div>');
					});
				}
			});			
		} 
	});
	$(document).on('click', "#delete_exercise", function() {
		$( "#exercise" ).fadeOut("slow");
		$( this ).fadeOut("slow");
	});
	$(document).on('click', "#tech", function() {
		$( "#delete_exercise" ).fadeIn("slow");
	});
	$(document).on('click', "#tah", function() {
		$( "#delete_exercise" ).fadeIn("slow");
	});
	$(document).on('click', "#organic", function() {
		$( "#delete_exercise" ).fadeIn("slow");
	});
	$(document).on('click', "#faq_list", function() {
		$( this ).find(".exercies_list").slideToggle("700");       
	});
	$(document).on('click', "#ptable_show", function() {
		$( "#ptable_content" ).toggle( "slow", function() {
			if ( $("#ptable_show").hasClass('bg-danger') ) {
				$("#ptable_show").removeClass('bg-danger');
				$("#ptable_show").html('اظهار كامل الجدول الدوري');
			} else {
				$("#ptable_show").addClass('bg-danger');
				$("#ptable_show").html('اخفاء كامل الجدول الدوري');
			}
		});
		 
	});
});