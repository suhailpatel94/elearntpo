
			var data = {
			labels: ["Java", "C", "C++", "PHP", "Python", "Javascript", "C#"],
				datasets: [
				
				{
					label: "My Second dataset",
					fillColor: "rgba(51, 255, 174,0.7)",
					strokeColor: "rgba(151,187,205,0.8)",
					highlightFill: "rgba(151,187,205,0.75)",
					highlightStroke: "rgba(151,187,205,1)",
					data: [85, 59, 80, 81, 56, 55, 40]
				}
				]
			};

		var ctx = document.getElementById("myChart").getContext("2d");
		var myBarChart = new Chart(ctx).Bar(data,{
		responsive:true});
