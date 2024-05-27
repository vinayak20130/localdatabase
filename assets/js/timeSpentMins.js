// tab change of time spent mins . 

function changeTabTimeSpentMin(tabNumber) {
    // Hide all content divs
    document.querySelectorAll('.content').forEach(content => {
        content.classList.remove('active');
    });

    // Show the selected content
    document.getElementById('tabContentTimeSpentMin' + tabNumber).classList.add('active');
}







// total user chart 
const Utils = {
	months: ({
		count
	}) => {
		return ['Sun','Mon', 'Tue', 'Web', 'Thu', 'Fri', 'Sat'];
	}
};

const labels = Utils.months({
	count: 9
});
const data = {
	labels: labels,
	datasets: [{
		label: '',
		data: [100, 120, 100, 65, 59, 35],
		fill: false,
		borderColor: '#003344',
		tension: 0.1
	}]
};

const config = {
	type: 'line',
	data: data,
	options: {
		scales: {
			x: {
				ticks: {
					color: '#3C5D68',
					font: {
						size: 12,
						weight: 400,
					},
				},
			},
			y: {
				ticks: {
					color: '#3C5D68',
					font: {
						size: 12,
						weight: 600,
					},
				},
			},
		},
		elements: {
			line: {
				borderWidth: 2,
			},
			point: {
				radius: 2,
			},
		},
		plugins: {
			legend: {
				display: false,
			},
			tooltip: {
				enabled: false,
			},
		},
	},


};

// Get the canvas element and initialize the chart
document.addEventListener('DOMContentLoaded', () => {
	const ctx = document.getElementById('myChartTimeSpentMin').getContext('2d');
	new Chart(ctx, config);
});



// chart month tab1 

const UtilsMonth = {
	months: ({ count }) => {
		return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'];
	}
};

const labelsMonth = UtilsMonth.months({ count: 9 }); // Corrected the variable name
const dataMonth = {
	labels: labelsMonth, // Corrected the variable name
	datasets: [{
		label: '',
		data: [300, 120, 100, 65, 59, 35, 54, 54, 32, 23, 23, 24],
		fill: false,
		borderColor: '#003344',
		tension: 0.1
	}]
};

const configMonth = {
	type: 'line',
	data: dataMonth, // Corrected the variable name
	options: {
		scales: {
			x: {
				ticks: {
					color: '#3C5D68',
					font: {
						size: 12,
						weight: 400,
					},
				},
			},
			y: {
				ticks: {
					color: '#3C5D68',
					font: {
						size: 12,
						weight: 600,
					},
				},
			},
		},
		elements: {
			line: {
				borderWidth: 2,
			},
			point: {
				radius: 2,
			},
		},
		plugins: {
			legend: {
				display: false,
			},
			tooltip: {
				enabled: false,
			},
		},
	},
};

// Get the canvas element and initialize the chart
document.addEventListener('DOMContentLoaded', () => {
	const ctx = document.getElementById('myChartMonthTimeSpentMin').getContext('2d');
	new Chart(ctx, configMonth); // Corrected the variable name
});


const UtilsYear = {
	years: ({ count }) => {
		// Replace this with your actual yearly data
		const currentYear = new Date().getFullYear();
		return Array.from({ length: count }, (_, index) => currentYear - index);
	}
};

const labelsYear = UtilsYear.years({ count: 5 }); // Adjust the count as needed
const dataYear = {
	labels: labelsYear,
	datasets: [{
		label: '',
		data: [600, 400, 300, 200, 100], // Replace with your actual yearly data
		fill: false,
		borderColor: '#003344', // Adjust the color as needed
		tension: 0.1
	}]
};

const configYear = {
	type: 'line',
	data: dataYear,
	options: {
		scales: {
			x: {
				ticks: {
					color: '#3C5D68',
					font: {
						size: 12,
						weight: 400,
					},
				},
			},
			y: {
				ticks: {
					color: '#3C5D68',
					font: {
						size: 12,
						weight: 600,
					},
				},
			},
		},
		elements: {
			line: {
				borderWidth: 2,
			},
			point: {
				radius: 2,
			},
		},
		plugins: {
			legend: {
				display: false,
			},
			tooltip: {
				enabled: false,
			},
		},
	},
};

// Get the canvas element and initialize the chart
document.addEventListener('DOMContentLoaded', () => {
	const ctx = document.getElementById('myChartYearTimeSpentMin').getContext('2d'); // Change the ID as needed
	new Chart(ctx, configYear);
});

