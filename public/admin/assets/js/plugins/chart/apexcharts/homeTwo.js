/*==
    Progress Graph Chart
============================================*/
var progressGraphOptions = function (data, colors, labels) {
    return {
        series: data,
        chart: {
            height: 360,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            parentHeightOffset: 0
        },
        dataLabels: {
            enabled: false
        },
        colors: colors,
        stroke: {
            curve: 'smooth',
            width: 3,
        },
        xaxis: {
            categories: labels,
            tooltip: {
                enabled: false,
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            labels: {
                style: {
                    colors: ['#202442'],
                    fontSize: '14px',
                    fontFamily: 'Titillium Web',
                    cssClass: 'apexcharts-yaxis-label',
                }
            },
        },
        yaxis: {
            max: 10000,
            min: 2000,
            tickAmount: 4,
            labels: {
                align: 'left',
                style: {
                    colors: ['#202442'],
                    fontSize: '14px',
                    fontFamily: 'Titillium Web',
                    cssClass: 'apexcharts-yaxis-label',
                },
                formatter: (val) => { return '$' + val },
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            offsetY: -40,
        },
        responsive: [{
            breakpoint: 1199,
            options: {
                legend: {
                    offsetY: 0,
                },
            },
        }, {
            breakpoint: 991,
            options: {
                legend: {
                    offsetY: -40,
                },
            },
        }, {
            breakpoint: 767,
            options: {
                legend: {
                    offsetY: 0,
                },
            },
        }]
    }
};

var progressGraphDataSet1 = {
    data: [{
        name: 'Sale stat',
        data: [3000, 2500, 5500, 7000, 5500, 4000, 5500, 8200, 6500, 5000, 7800, 7000]
    }, {
        name: 'Conversion stat',
        data: [5000, 5500, 4000, 2500, 4000, 6500, 5500, 2800, 5500, 7000, 5000, 5500]
    }],
    colors: ['#FEB5CE', '#3B50E1'],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jly', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
},
    { data, colors, labels } = progressGraphDataSet1,
    progressGraphChart1 = new ApexCharts(document.querySelector(".progress-graph-chart"), progressGraphOptions(data, colors, labels));
progressGraphChart1.render();

/*==
    RadialBar Chart
============================================*/
var radialBarOptions = function (data, colors, labels) {
    return {
        series: data,
        chart: {
            height: 350,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '30%',
                },
                track: {
                    margin: 15,
                },
                dataLabels: {
                    name: {
                        show: false
                    },
                    value: {
                        fontSize: '16px',
                        offsetY: 5,
                        color: colors,
                    },
                    total: {
                        show: false
                    }
                }
            }
        },
        colors: colors,
        fill: {
            colors: colors,
            opacity: 1,
            type: 'solid',
        },
        legend: {
            position: 'top',
            horizontalAlign: 'center',
            show: true
        },
        stroke: {
            lineCap: 'round'
        },
        labels: labels,
    }
};
var radialBarDataSet1 = {
    data: [75, 65, 55],
    colors: ['#3B50E1', '#FEB5CE', '#45EEDD'],
    labels: ['Conversion stat', 'Sale stat', 'Conversion stat']
},
    { data, colors, labels } = radialBarDataSet1,
    radialBarChart1 = new ApexCharts(document.querySelector(".radialBar-chart"), radialBarOptions(data, colors, labels));
radialBarChart1.render();

/*==
    Conversion Rate Chart
============================================*/
var conversionRateOptions = function (data, colors, labels) {
    return {
        series: data,
        chart: {
            type: 'area',
            height: 369,
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false
            },
            parentHeightOffset: 0
        },
        colors: colors,
        dataLabels: {
            enabled: false
        },
        labels: labels,
        stroke: {
            curve: 'smooth',
            width: 2
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val
                }
            },
            marker: {
                show: false
            }
        },
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            tooltip: {
                enabled: false
            }
        },
        yaxis: {
            tooltip: {
                enabled: false
            }
        }
    }
};

var conversionRateDataSet1 = {
    data: [{
        name: 'Conversion',
        data: [50, 87, 175, 45, 85, 75]
    }],
    colors: ['#372EED'],
    labels: ['Jan', 'Feb', 'Mar', 'Apl', 'May', 'Jun'],
},
    { data, colors, labels } = conversionRateDataSet1,
    conversionRateChart1 = new ApexCharts(document.querySelector(".conversion-rate-chart"), conversionRateOptions(data, colors, labels));
conversionRateChart1.render();