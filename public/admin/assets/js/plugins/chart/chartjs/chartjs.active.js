(function ($) {
    "use strict";
    
        /*Example Line CHart*/
        var ECL = document.getElementById('example-chartjs-line').getContext('2d');
        ECL.height = 200;
        var ECLconfig = {
            type: 'line',
            data: {
                labels: ['0', '5', '10','15', '20','25', '30','35', '40','45', '50'],
                datasets: [{
                    label: 'Total Sale',
                    data: [10,20,27,50,60,55,65,90,70,85,90],
                    backgroundColor: '#fb7da4',
                    borderColor: '#fb7da4',
                    pointBorderColor: '#fb7da4',
                    fill: false,
                },
                {
                    label: 'Total View',
                    data: [20,15,8,60,68,35,60,80,65,60,85],
                    backgroundColor: '#3B50E1',
                    borderColor: '#3B50E1',
                    pointBorderColor: '#3B50E1',
                    fill: false,
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
                    labels: {
                        fontColor: '#999999',
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }]
                }
            }
        };
        var ECLchartjs = new Chart(ECL, ECLconfig);
        
        /*Example Line Area CHart*/
        var ECLA = document.getElementById('example-chartjs-lineArea').getContext('2d');
        var ECLAconfig = {
            type: 'line',
            data: {
                labels: ['0', '5', '10','15', '20','25', '30','35', '40','45', '50'],
                datasets: [{
                    label: 'Total View',
                    data: [20,35,30,60,68,35,60,80,65,60,85],
                    backgroundColor: 'rgba(59,80,225, 0.3)',
                    borderColor: '#3B50E1',
                    pointBorderColor: '#3B50E1',
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
                    labels: {
                        fontColor: '#999999',
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }]
                }
            }
        };
        var ECLAchartjs = new Chart(ECLA, ECLAconfig);
        
        /*Example Bar Vertical CHart*/
        var ECBV = document.getElementById('example-chartjs-barV').getContext('2d');
        var ECBVconfig = {
            type: 'bar',
            data: {
                labels: ['0', '5', '10','15', '20','25', '30','35', '40'],
                datasets: [{
                    label: 'Total Sale',
                    data: [10,20,27,50,60,90,70,85,90],
                    backgroundColor: '#fb7da4',
                    fill: false,
                },
                {
                    label: 'Total View',
                    data: [20,15,8,60,68,80,65,60,85],
                    backgroundColor: '#3B50E1',
                    fill: false,
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
                    labels: {
                        fontColor: '#999999',
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }]
                }
            }
        };
        var ECBVchartjs = new Chart(ECBV, ECBVconfig);
        
        /*Example Bar Horizontal CHart*/
        var ECBH = document.getElementById('example-chartjs-barH').getContext('2d');
        var ECBHconfig = {
            type: 'horizontalBar',
            data: {
                labels: ['0', '5', '10','15', '20','25', '30','35', '40'],
                datasets: [{
                    label: 'Total Sale',
                    data: [10,20,27,50,60,90,70,85,90],
                    backgroundColor: '#fb7da4',
                    fill: false,
                },
                {
                    label: 'Total View',
                    data: [20,15,8,60,68,80,65,60,85],
                    backgroundColor: '#3B50E1',
                    fill: false,
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
                    labels: {
                        fontColor: '#999999',
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }]
                }
            }
        };
        var ECBHchartjs = new Chart(ECBH, ECBHconfig);
        
        /*Example Scatter CHart*/
        var ECSC = document.getElementById('example-chartjs-scatter').getContext('2d');
        var ECSCconfig = {
            data: {
                datasets: [{
                    label: 'Total Sale',
                    data: [{
                        x: 5,
                        y: 15
                    }, {
                        x: 15,
                        y: 55
                    }, {
                        x: 30,
                        y: 40
                    }, {
                        x: 55,
                        y: 70
                    }, {
                        x: 80,
                        y: 45
                    }],
                    backgroundColor: 'rgba(251, 125, 164, 0.3)',
                    borderColor: '#fb7da4',
                    borderWidth: 1,
                    pointRadius: 4,
                },
                {
                    label: 'Total View',
                    data: [{
                        x: 15,
                        y: 10
                    }, {
                        x: 25,
                        y: 45
                    }, {
                        x: 35,
                        y: 45
                    }, {
                        x: 50,
                        y: 85
                    }, {
                        x: 85,
                        y: 55
                    }],
                    backgroundColor: 'rgba(59,80,225, 0.3)',
                    borderColor: '#3B50E1',
                    borderWidth: 1,
                    pointRadius: 4,
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
                    labels: {
                        fontColor: '#999999',
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#999999',
                        },
                    }]
                }
            }
        };
        var ECSCchartjs = new Chart.Scatter(ECSC, ECSCconfig);
        
        /*Example Doughnut CHart*/
        var ECDU = document.getElementById('example-chartjs-doughnut').getContext('2d');
        var ECDUconfig = {
            type: 'doughnut',
            data: {
                labels: ["Desktops", "Tablets", "Mobiles", "Mobiles"],
                datasets: [{
                    data: [300, 200, 200, 400],
                    backgroundColor: [
                        '#fb7da4',
                        '#7dfb9b',
                        '#ff9666',
                        '#3B50E1',
                    ],
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
					position: 'left',
                    labels: {
                        boxWidth: 30,
                        padding: 20,
                        fontColor: '#999999',
                    }
                },
                tooltips: {
                    mode: 'point',
                    intersect: false,
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                    cornerRadius: 4,
                    titleFontSize: 0,
                    titleMarginBottom: 2,
                },
				animation: {
					animateScale: true,
					animateRotate: true
				}
            }
        };
        var ECDUchartjs = new Chart(ECDU, ECDUconfig);
        
        /*Example Pie CHart*/
        var ECPIE = document.getElementById('example-chartjs-pie').getContext('2d');
        var ECPIEconfig = {
            type: 'pie',
            data: {
                labels: ["Desktops", "Tablets", "Mobiles", "Mobiles"],
                datasets: [{
                    data: [20, 23, 30, 27],
                    backgroundColor: ["#3B50E1", "#fb7da4", "#ff9666", "#17a2b8"],
                    hoverBackgroundColor: ["#3B50E1", "#fb7da4", "#ff9666", "#17a2b8"],
                    hoverBorderColor: "#fff"
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
					position: 'left',
                    labels: {
                        fontColor: '#999999',
                    }
				},
                tooltips: {
                    mode: 'point',
                    intersect: false,
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                    cornerRadius: 4,
                    titleFontSize: 0,
                    titleMarginBottom: 2,
                    displayColors: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
            }
		};
        var ECPIEchartjs = new Chart(ECPIE, ECPIEconfig);
        
        /*Example Polar CHart*/
        var ECPolar = document.getElementById('example-chartjs-polar').getContext('2d');
        var ECPolarconfig = {
            type: 'pie',
            data: {
                labels: ["Desktops", "Tablets", "Mobiles", "Mobiles"],
                datasets: [{
					data: ['80', '55', '45', '20', '30'],
					backgroundColor: ['#3B50E1', '#fb7da4', '#29db2d', '#ff9666', '#17a2b8'],
				}],
            },
            options: {
                maintainAspectRatio: false,
				legend: {
					position: 'left',
                    labels: {
                        fontColor: '#999999',
                    }
				},
                scale: {
                    gridLines: {
                        color: 'rgba(136,136,136,0.1)',
                        zeroLineColor: 'rgba(136,136,136,0.1)',
                    },
					ticks: {
						beginAtZero: true
					}
				},
				animation: {
					animateRotate: false,
					animateScale: true
				}
            }
		};
        var ECPolarchartjs = new Chart.PolarArea(ECPolar, ECPolarconfig);
        
        /*Example Radar CHart*/
        var ECRadarr = document.getElementById('example-chartjs-radar').getContext('2d');
        var ECRadarrconfig = {
			type: 'radar',
			data: {
				labels: ['Today', '7 Days', '15 Days', '30 Days', '90 Days', '180 Days', '360 Days'],
				datasets: [{
					label: 'Bitcoin',
					backgroundColor: 'rgba(251,125,164,0.3)',
					borderColor: '#fb7da4',
					pointBackgroundColor: '#fb7da4',
					data: [80,70,75,15,85,90,100]
				},{
					label: 'Ethereum',
					backgroundColor: 'rgba(59,80,225,0.3)',
					borderColor: '#3B50E1',
					pointBackgroundColor: '#3B50E1',
					data: [70,30,30,90,95,50,15]
				}]
			},
			options: {
                maintainAspectRatio: false,
				legend: {
					position: 'left',
                    labels: {
                        fontColor: '#999999 ',
                    }
				},
                tooltips: {
                    mode: 'point',
                    intersect: false,
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10,
                    cornerRadius: 4,
                    titleFontSize: 0,
                    titleMarginBottom: 2,
                },
                scale: {
                    gridLines: {
                        color: '#eeeeee',
                        zeroLineColor: '#eeeeee',
                    },
					ticks: {
						beginAtZero: true
					}
				},
			}
		};
        var ECRadarrchartjs = new Chart(ECRadarr, ECRadarrconfig);
        
    
})(jQuery);