let weeklyChart = document.getElementById('weekly-forecast').getContext('2d');
let monthlyChart = document.getElementById('monthly-forecast').getContext('2d');
let arrChart = document.getElementById('arr-chart').getContext('2d');

let xhr = new XMLHttpRequest();
xhr.open('POST',"./Classes/dash.php ");
xhr.onload = function()
{
    let jsvar = this.response;
    jsvar = JSON.parse(jsvar); //Converts data to an array. The jsvar now has two objects
    console.log(jsvar);

    let outputData = [];
    let dataDate = []; 
    let dataMonth = [];
    let newARR = [];
    let arrReason = [];
    
    // jsvar loops through the dash object
    jsvar.dash.forEach(d => {
        outputData.push(d.totalforecast);
        dataDate.push(d.forecastdate);
        dataMonth.push(d.forecastmonth);
    });

    // JSVAR brings in the arr object
    jsvar.arr.forEach(d =>{
        newARR.push(d.arr);
        arrReason.push(d.explanation);
    });

// Weekly Forecast Chart
    new Chart(weeklyChart, 
    {
        type: 'pie',
        data: 
        {
            labels: dataDate,
            datasets: 
            [{
                label: dataDate,
                data: outputData,
                backgroundColor: 
                [
                    'green',
                    'orange',
                    'red',
                ],
                hoverOffset: 25
            }]
        },
        options: 
        {
            plugins: 
            {
               legend: 
               {
                display: true,
                labels: {dataDate},
                position: 'top',
               },
            },
            responsive: true,
            maintainAspectRatio: false
        },
    });

// Monthly Forecast Chart
    new Chart(monthlyChart, 
        {
            type: 'line',
            data: 
            {
                labels: dataMonth,
                datasets: 
                [{
                    label: 'Month',
                    data: outputData,
                    backgroundColor: 
                    [
                        'green',
                        'orange',
                        'red',
                    ],
                    borderColor: ['green'],
                    hoverOffset: 25
                }]
            },
            options: 
            {
                plugins: 
                {
                   legend: 
                   {
                    display: true,
                    labels: {dataMonth},
                    position: 'top',
                   },
                },

                responsive: true,
                maintainAspectRatio: false,
               
            },
        });

        // New ARR Charts
        new Chart(arrChart, 
            {
                type: 'line',
                data: 
                {
                    labels: arrReason,
                    datasets: 
                    [{
                        label: 'Stats',
                        data: newARR,
                        backgroundColor: 
                        [
                            'purple',
                            'red',
                            'green',
                        ],
                        hoverOffset: 25
                    }]
                },
                options: 
                {
                    plugins: 
                    {
                       legend: 
                       {
                        display: true,
                        labels: {dataDate},
                        position: 'top',
                       },
                    },
                    responsive: true,
                    maintainAspectRatio: false
                },
            });
};

window.addEventListener("load", () => {
    xhr.send();
});