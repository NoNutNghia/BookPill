const statisticalChart = $('#statisticalChart');

new Chart(statisticalChart, {
    type: 'line',
    data: {
        labels: [1, 2, 3, 4, 5, 6 ,7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27 ,28, 29, 30],
        datasets: [{
            label: 'Product Revenue',
            data: [0, 19, 3, 5, 2, 3],
            borderWidth: 1,
            fill: true,
            tension: 0.1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
