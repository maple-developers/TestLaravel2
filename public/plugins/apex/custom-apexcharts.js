Apex.grid = {
    borderColor: '#191e3a'
}
Apex.track = {
    background: '#0e1726',
}
Apex.tooltip = {
    theme: 'dark'
}
// Simple Line

var sline = {
    chart: {
        height: 350,
        type: 'line',
        zoom: {
            enabled: false
        },
        toolbar: {
            show: false,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    series: [{
        name: "ALU",
        data: [300, 330, 380, 400, 450, 410, 390, 320, 290]
    }, {
        name: "BOPP",
        data: [100, 140, 110, 90, 105, 134, 158, 180, 99]
    }, {
        name: "CPP",
        data: [90, 133, 150, 140, 180, 160, 170, 120, 138]
    }, {
        name: "PET",
        data: [500, 632, 590, 500, 420, 420, 480, 500, 700]
    }],
    title: {
        text: 'Material / USD',
        align: 'left'
    },
    grid: {
        row: {
            colors: ['#3b3f5c', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
        },
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
    },
    yaxis: {
        title: {
            text: 'USD ',
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-line"),
    sline
);

chart.render();


// Simple Line Area

var sLineArea = {
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
            show: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    series: [{
        name: 'ALU',
        data: [7, 12, 9, 13, 12, 11, 6, 8, 15, 14, 9, 6, 10, 10, 8, 6, 5, 8, 9, 5, 10, 15, 7, 14, 9, 11, 15,
            8, 3, 2, 1, 3, 6, 5, 4, 8, 5, 7, 10, 8, 8, 9, 7, 6.5, 5, 4, 3.5, 3, 2, 2.75, 1.75, 1]
    }, {
        name: 'CPP',
        data: [12, 11, 10, 9, 6, 3, 5, 5, 7, 5.5, 3, 2, 1, 2, 4, 6, 8, 11, 13, 11, 10.5, 13, 9, 8,
            6, 3, 2, 1, 1, 4, 9, 10, 12, 10, 7, 5, 7, 9, 6, 4, 6, 9, 7, 5, 8, 7, 6, 5, 9, 11, 12, 15]
    }, {
        name: 'BOPP',
        data: [10, 13, 14, 12, 11, 9, 7, 6, 6, 8, 4, 1, 6, 3.5, 1, 5, 3, 6, 8, 5, 9, 11, 8.5, 7,
            9, 5.5, 4.5, 7, 10, 11.5, 12, 10, 9, 6, 4, 3.5, 3, 4, 5, 9, 7, 6, 9, 6, 5.75, 5, 8, 10, 12, 15, 13, 9]
    }, {
        name: 'PE',
        data: [4, 5, 3, 1, 2, 4, 3, 7, 9, 9, 11, 9, 12, 14, 15, 10, 8, 11, 14, 10, 9, 8, 6, 8, 6, 9,
            7, 5, 6, 5, 3, 7, 8, 6, 3, 6, 9, 11, 13, 10, 9, 8, 11, 9, 7, 5, 3, 2, 2, 2, 2, 3]
    }, {
        name: 'PET',
        data: [9, 7, 5, 2, 7, 5, 3, 4, 7, 5, 4, 5.5, 6, 5.5, 4, 3, 1, 1, 1.5, 2, 4, 6, 7, 8, 10, 12, 13,
            15, 11, 9, 8, 7, 6.5, 5, 3, 2, 1.5, 1, 4, 6, 8, 11, 15, 14, 11, 10, 11.5, 12, 9, 7.5, 5.5, 3.5]
    }, {
        name: 'PETW',
        data: [1, 3, 2.5, 2, 1.5, 1, 3, 2, 3, 4, 3, 1, 1, 2, 1, 3, 5, 4, 6, 7, 8, 8, 9, 10, 11, 11.5, 12,
            13, 13.5, 14, 13, 11, 13, 9.5, 11, 9, 8, 6, 4, 3, 3, 4, 2, 2, 1, 2, 3, 1, 1, 2.5, 2, 1]
    }

    ],

    xaxis: {
        categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17",
            "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31", "32", "33", "34",
            "35", "36", "37", "38", "39", "40", "41", "42", "43", "44", "45", "46", "47", "48", "49", "50", "51", "52"],
        title: {
            text: 'Year Weeks',
        },
    },
    yaxis: {
        title: {
            text: 'Loading Weeks',
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-line-area"),
    sLineArea
);

chart.render();

// Simple Column

var sCol = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
    }, {
        name: 'Revenue',
        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
    }],
    xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    },
    yaxis: {
        title: {
            text: '$ (thousands)'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "$ " + val + " thousands"
            }
        }
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-col"),
    sCol
);

chart.render();


// Simple Column Stacked

var sColStacked = {
    chart: {
        height: 350,
        type: 'bar',
        stacked: true,
        toolbar: {
            show: false,
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                position: 'bottom',
                offsetX: -10,
                offsetY: 0
            }
        }
    }],
    plotOptions: {
        bar: {
            horizontal: false,
        },
    },
    series: [{
        name: 'BOPP',
        data: [44, 55, 41, 67, 22, 43]
    }, {
        name: 'ALU',
        data: [13, 23, 20, 8, 13, 27]
    }, {
        name: 'CPP',
        data: [11, 17, 15, 15, 21, 14]
    }, {
        name: 'PET',
        data: [21, 7, 25, 13, 22, 8]
    }],
    xaxis: {
        type: 'datetime',
        categories: ['8/16/2021 GMT', '8/17/2021 GMT', '8/18/2021 GMT', '8/19/2021 GMT', '8/20/2021 GMT', '8/21/2021 GMT'],
    },
    legend: {
        position: 'left',
        offsetY: 40
    },
    fill: {
        opacity: 1
    },
}

var chart = new ApexCharts(
    document.querySelector("#s-col-stacked"),
    sColStacked
);

chart.render();

// Simple Bar

var sBar = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        data: [400, 430, 448, 470, 540, 580, 690, 1100, 1200, 1380]
    }],
    xaxis: {
        categories: ['South Korea', 'Canada', 'United Kingdom', 'Netherlands', 'Italy', 'France', 'Japan', 'United States', 'China', 'Germany'],
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-bar"),
    sBar
);

chart.render();


// Mixed Chart

var options = {
    chart: {
        height: 350,
        type: 'line',
        toolbar: {
            show: false,
        }
    },
    series: [{
        name: 'Canadian Dollar (Left Axis)',
        type: 'column',
        data: [0.919, 1.033, 1.035, 0.967, 0.902, 0.752, 0.743, 0.766, 0.747, 0.695, 0.691, 0.764]
    }, {
        name: 'Crude Oil Barrel (Right Axis)',
        type: 'line',
        data: [91.38, 98.83, 91.83, 98.17, 53.45, 37.13, 53.75, 60.46, 45.15, 61.14, 48.52, 63.58]
    }],
    stroke: {
        width: [0, 4]
    },
    title: {
        text: 'Curde Oil Barrel'
    },
    labels: ['31 Dec 2010', '31 Dec 2011', '31 Dec 2012', '31 Dec 2013', '31 Dec 2014', '31 Dec 2015', '31 Dec 2016', '31 Dec 2017', '31 Dec 2018', '31 Dec 2019', '31 Dec 2020', '19 Aug 2021'],
    xaxis: {
        type: 'datetime'
    },
    yaxis: [{
        title: {
            text: 'U.S. Dollar ',
        },

    }, {
        opposite: true,
        title: {
            text: 'U.S. Dollar'
        }
    }]

}

var chart = new ApexCharts(
    document.querySelector("#mixed-chart"),
    options
);

chart.render();


// Donut Chart


var donutChart = {
    chart: {
        height: 350,
        type: 'donut',
        toolbar: {
            show: false,
        }
    },
    stroke: {
        colors: '#0e1726'
    },
    series: [80, 55, 41, 17],
    labels: ['Sabic', 'Sbaf', 'Aramco', 'Afico'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
}

var donut = new ApexCharts(
    document.querySelector("#donut-chart"),
    donutChart
);

donut.render();


// Radial Chart

var radialChart = {
    chart: {
        height: 350,
        type: 'radialBar',
        toolbar: {
            show: false,
        }
    },
    plotOptions: {
        radialBar: {
            dataLabels: {
                name: {
                    fontSize: '22px',
                },
                value: {
                    fontSize: '16px',
                },
                total: {
                    show: true,
                    label: 'Total',
                    formatter: function (w) {
                        // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                        return 249
                    }
                }
            }
        }
    },
    series: [44, 55, 67, 83],
    labels: ['CPP', 'ALU', 'BOPP', 'PETW'],
}

var chart = new ApexCharts(
    document.querySelector("#radial-chart"),
    radialChart
);

chart.render();