/*==
    Top Report Chart
============================================*/
var topReportOptions = function (data, strokeColor) {
    return {
        series: [{
            data: data
        }],
        chart: {
            height: 40,
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
        stroke: {
            curve: 'smooth',
            width: 3,
            colors: strokeColor
        },
        grid: {
            padding: {
                left: -7,
                right: 0,
                bottom: -12,
                top: -25
            }
        },
        tooltip: {
            enabled: false
        },
        xaxis: {
            labels: {
                show: false
            },
            tooltip: {
                enabled: false,
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
        },
        yaxis: {
            min: 0,
            max: 20,
            tickAmount: 2,
            labels: {
                show: false
            },
        },
    }
};

var topReportChart1 = new ApexCharts(document.querySelector(".top-report-chart-1"), topReportOptions([0, 20, 5, 20, 5, 10], '#372EED'));
topReportChart1.render();
var topReportChart2 = new ApexCharts(document.querySelector(".top-report-chart-2"), topReportOptions([0, 2, 15, 3, 20], '#FEB5CE'));
topReportChart2.render();
var topReportChart3 = new ApexCharts(document.querySelector(".top-report-chart-3"), topReportOptions([0, 15, 5, 20], '#3B50E1'));
topReportChart3.render();
var topReportChart4 = new ApexCharts(document.querySelector(".top-report-chart-4"), topReportOptions([10, 0, 20, 10], '#C693FE'));
topReportChart4.render();

/*==
    Weekly Statistics Chart
============================================*/
var weeklyStatisticsOptions = function (data, colors, labels) {
    return {
        series: data,
        chart: {
            type: 'bar',
            height: 270,
            toolbar: {
                show: false
            },
            parentHeightOffset: 0
        },
        colors: colors,
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: 8,
                startingShape: 'rounded',
                endingShape: 'rounded',
                colors: {
                    backgroundBarColors: ['#EEEEFE'],
                },
            },
        },
        grid: {
            xaxis: {
                lines: {
                    show: false
                }
            },
            yaxis: {
                lines: {
                    show: false
                }
            }
        },
        tooltip: {
            x: {
                formatter: function (val) {
                    return val + ' Week'
                }
            },
            y: {
                formatter: function (val) {
                    return '$' + val
                }
            }
        },
        xaxis: {
            categories: labels,
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
            crosshairs: {
                show: false
            },
        },
        yaxis: {
            max: 10000,
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
        }
    }
};

var weeklyStatisticsDataSet1 = {
    data: [{
        name: 'Sale',
        data: [7500, 5500, 9500, 2500, 9500, 5500, 7500, 5500, 9500]
    }],
    colors: ['#45EEDD'],
    labels: ['1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th']
},
    { data, colors, labels } = weeklyStatisticsDataSet1,
    weeklyStatisticsChart1 = new ApexCharts(document.querySelector(".weekly-statistics-chart"), weeklyStatisticsOptions(data, colors, labels));
weeklyStatisticsChart1.render();

/*==
    Progress Graph Chart
============================================*/
var progressGraphOptions = function (data, colors, labels) {
    return {
        series: data,
        chart: {
            height: 270,
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
            min: 2500,
            tickAmount: 3,
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
        data: [3500, 6500, 6000, 8000, 6200, 6800, 6200, 9000, 7000, 8000, 6500, 6000]
    }, {
        name: 'Conversion stat',
        data: [5500, 5800, 7000, 5700, 6200, 6600, 7500, 5500, 4500, 5500, 4800, 5000]
    }],
    colors: ['#372EED', '#45EEDD'],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jly', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
},
    { data, colors, labels } = progressGraphDataSet1,
    progressGraphChart1 = new ApexCharts(document.querySelector(".progress-graph-chart"), progressGraphOptions(data, colors, labels));
progressGraphChart1.render();


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