/*==
    Progress Graph Chart
============================================*/
var progressGraphOptions = function (data, colors, colorMarker, labels) {
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
            width: 5,
        },
        markers: {
            size: 7,
            colors: colorMarker,
            strokeColors: 'transparent',
            strokeWidth: 0,
            strokeOpacity: 0,
            hover: {
                size: 9
            }
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
            tickAmount: 4,
            labels: {
                align: 'left',
                style: {
                    colors: ['#202442'],
                    fontSize: '14px',
                    fontFamily: 'Titillium Web',
                    cssClass: 'apexcharts-yaxis-label',
                },
                formatter: (val) => { return val + 'per' },
            }
        }
    }
};

var progressGraphDataSet1 = {
    data: [{
        name: 'Infected',
        data: [100, 260, 330, 300, 280, 370, 500,]
    }],
    colors: ['#AEBEFF'],
    colorMarker: ['#7886FF'],
    labels: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri',]
},
    { data, colors, colorMarker, labels } = progressGraphDataSet1,
    progressGraphChart1 = new ApexCharts(document.querySelector(".covid-graph-chart"), progressGraphOptions(data, colors, colorMarker, labels));
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