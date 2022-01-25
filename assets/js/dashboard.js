$(".counter-up").counterUp({
    delay: 10,
    time: 1000
});

let dateArr = ['sep 12', 'sep 13', 'sep 14', 'sep 15', 'sep 16', 'sep 17', 'sep 18 ', 'sep 19', 'sep 20', 'sep 21', 'sep 22'];
let orderCountArr = [2,4,8,12,13,9,12,10,7,10,5] ;
let viewerCountArr = [12,20,14,18,12,14,13,16,23,15,23]; 


let ov = document.getElementById('ov').getContext('2d');

let ovChart = new Chart(ov, {
    type: 'line',
    data: {
        labels: dateArr,
        datasets: [
            {
                label: 'Order Count',
                data: orderCountArr,
                backgroundColor: [
                    '#007bff30',
                    
                ],
                borderColor: [
                    '#007bff',
                    
                ],
                borderWidth: 1,
                tension : 0
                
            },
            {
                label: 'Viewer Count',
                data: viewerCountArr,
                backgroundColor: [
                    '#28a74530',
                    
                ],
                borderColor: [
                    '#28a745',
                    
                ],
                borderWidth: 1,
                tension : 0
                
            }
        ]
    },
    options: {
        scales: {
            yAxes: [
                {
                display: false,
                beginAtZero: true,
               
            }
        ],
            xAxes:[
                {
                    display: false,
                    gridLines: {
                    display: false,
                },
            }],
        },
        legend: {
            display: true,
          position: 'top',
            labels: {
                fontColor: '#333',
                usePointStyle: true
            }
        }
    }
});



let orderFromPlace = [5,15,4,9,7];
let place = ["YGN", "MDY", "NPT", "SHAN", "MGW"];

let op = document.getElementById('op').getContext('2d');
let opChart = new Chart(op, {
    type: 'doughnut',
    data: {
        labels: place,
        datasets: [{
            label: '# of Votes',
            data: orderFromPlace,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [
                {
                display: false,
                beginAtZero: true
            }],
            xAxes: [{
                display: false,
                beginAtZero: true
            }]
        },
        legend: {
            display: true,
          position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle: true
            }
        }
    }
});
