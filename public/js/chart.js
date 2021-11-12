$( document ).ready(function() {


function waridat(){
	return $.ajax ({
		url: 'charts',
		data: 
		{
			"getWaridat": 1
		},
		dataType: "json",
        async: !1,
		type: 'post'
	});
}
var waridat = waridat();
var ctx = document.getElementById("waridatChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: waridat.responseJSON.months,
        datasets: [{
            label: 'صافي الواردات',
            data: waridat.responseJSON.values,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 69, 0, 0.2)',
                'rgba(24, 0, 80, 0.2)',
				'rgba(33, 237, 67, 0.2)',
				'rgba(102, 17, 17, 0.2)',
				'rgba(186, 114, 20, 0.2)',
				'rgba(0, 67, 255, 0.2)',

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
				'rgba(255, 69, 0, 1)',
                'rgba(24, 0, 80, 1)',
				'rgba(33, 237, 67, 1)',
				'rgba(102, 17, 17, 1)',
				'rgba(186, 114, 20, 1)',
				'rgba(0, 67, 255, 1)',
			],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

function sarafiat(){
	return $.ajax ({
		url: 'charts',
		data: 
		{
			"getSarafiat": 1
		},
		dataType: "json",
        async: !1,
		type: 'post'
	});
}
var sarafiat = sarafiat();
var ctx2 = document.getElementById("SarafiatChart");
var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: sarafiat.responseJSON.months,
        datasets: [{
            label: 'الصرفيات',
            data: sarafiat.responseJSON.values,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 69, 0, 0.2)',
                'rgba(24, 0, 80, 0.2)',
				'rgba(33, 237, 67, 0.2)',
				'rgba(102, 17, 17, 0.2)',
				'rgba(186, 114, 20, 0.2)',
				'rgba(0, 67, 255, 0.2)',

            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
				'rgba(255, 69, 0, 1)',
                'rgba(24, 0, 80, 1)',
				'rgba(33, 237, 67, 1)',
				'rgba(102, 17, 17, 1)',
				'rgba(186, 114, 20, 1)',
				'rgba(0, 67, 255, 1)',
			],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

	
function sarafiatPerMonth(){
	return $.ajax ({
		url: 'charts',
		data: 
		{
			"getMoneyThisMonth": 1
		},
		dataType: "json",
        async: !1,
		type: 'post'
	});
}
var sarafiatPerMonth = sarafiatPerMonth();
console.log(sarafiatPerMonth.responseJSON.days)
new Chart(document.getElementById("moneyThisMonth"), {
    type: 'horizontalBar',
    data: {
      labels: sarafiatPerMonth.responseJSON.days,
      datasets: [
        {
          label: "الأموال المصروفة",
          backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 69, 0, 0.2)',
                'rgba(24, 0, 80, 0.2)',
				'rgba(33, 237, 67, 0.2)',
				'rgba(102, 17, 17, 0.2)',
				'rgba(186, 114, 20, 0.2)',
				'rgba(0, 67, 255, 0.2)',
				
				'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
				
				'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
				'rgba(255, 69, 0, 1)',
                'rgba(24, 0, 80, 1)',
				'rgba(33, 237, 67, 1)',
				'rgba(102, 17, 17, 1)',
				'rgba(186, 114, 20, 1)',
				'rgba(0, 67, 255, 1)',
            ],
          data: sarafiatPerMonth.responseJSON.values
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'المصروفات بدون الاستقطاعات خلال الشهر الحالي بحسب الأيام'
      }
    }
});
	
	
});