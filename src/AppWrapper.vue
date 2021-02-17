<template>
    <Login v-if="$route.path === '/login'" />
    <Error v-else-if="$route.path === '/error'" />
    <Access v-else-if="$route.path === '/access'" />
    <NotFound v-else-if="$route.path === '/notfound'" />
    <Landing v-else-if="$route.path === '/landing'" />
    <ContactUs v-else-if="$route.path === '/contactus'" />
    <App :topbarTheme="topbarTheme" :layoutMode="layoutMode" :menuTheme="menuTheme" @menu-color-change="onMenuColorChange" @topbar-theme="onTopbarThemeChange" v-else />
</template>

<script>
    import App from './App.vue';
    import Error from './pages/Access';
    import Access from './pages/Access';
    import Login from './pages/Login';
    import NotFound from './pages/NotFound';
    import Landing from './pages/Landing';
    import ContactUs from './pages/ContactUs';

	export default {
        provide() {
		return {
			overviewChartData1: this.overviewChartData1,
			overviewChartData2: this.overviewChartData2,
			overviewChartData3: this.overviewChartData3,
			overviewChartData4: this.overviewChartData4,
			overviewChartData5: this.overviewChartData5,
			overviewChartData6: this.overviewChartData6,
			overviewChartData7: this.overviewChartData7,
			overviewChartData8: this.overviewChartData8,
			overviewChartOptions: this.overviewChartOptions,
			overviewChartOptions2: this.overviewChartOptions2,
			ordersChart: this.ordersChart,
			ordersOptions: this.getOrdersOptions(),
			chartData: this.getChartData(),
			chartOptions: this.getChartOptions(),
            chartMonthlyData: this.getChartMonthlyData(),
            chartMonthlyOptions: this.getMonthlyChartOptions(),
            doughnutData: this.getDoughnutData(),
            doughnutOptions: this.getDoughnutOptions(),
            pieData: this.getPieData(),
            pieOptions: this.getPieOptions(),
		}
	},
    mounted() {
		this.refreshChart();
	},
        data() {
            return {
                theme: 'blue',
                layoutMode: 'light',
                topbarTheme: 'blue',
                menuTheme: 'light',
                overviewChartData1: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
				datasets: [
					{
						data: [50, 64, 32, 24, 18, 27, 20, 36, 30],
						borderColor: [
							'#4DD0E1',
						],
						backgroundColor: [
							'rgba(77, 208, 225, 0.8)',
						],
						borderWidth: 2,
						fill: true
					}
				]
			},
			overviewChartData2: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
				datasets: [
					{
						data: [11, 30, 52, 35, 39, 20, 14, 18, 29],
						borderColor: [
							'#4DD0E1',
						],
						backgroundColor: [
							'rgba(77, 208, 225, 0.8)',
						],
						borderWidth: 2,
						fill: true
					}
				]
			},
			overviewChartData3: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
				datasets: [
					{
						data: [20, 29, 39, 36, 45, 24, 28, 20, 15],
						borderColor: [
							'#4DD0E1',
						],
						backgroundColor: [
							'rgba(77, 208, 225, 0.8)',
						],
						borderWidth: 2,
						fill: true
					}
				]
			},
			overviewChartData4: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
				datasets: [
					{
						data: [30, 39, 50, 21, 33, 18, 10, 24, 20],
						borderColor: [
							'#4DD0E1',
						],
						backgroundColor: [
							'rgba(77, 208, 225, 0.8)',
						],
						borderWidth: 2,
						fill: true
					}
				]
			},
			overviewChartOptions: {
				legend: {
					display: false
				},
				responsive: true,
				scales: {
					yAxes: [{
						display: false
					}],
					xAxes: [{
						display: false
					}]
				},
				tooltips: {
					enabled: false
				},
				elements: {
					point: {
						radius: 0
					}
				},
			},
			ordersChart: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                label: 'New Orders',
                data: [31, 83, 69, 29, 62, 25, 59, 26, 46],
                borderColor: [
                    '#4DD0E1',
                ],
                backgroundColor: [
                    'rgba(77, 208, 225, 0.8)',
                ],
                borderWidth: 2,
                fill: true
            }, {
                label: 'Completed Orders',
                data: [67, 98, 27, 88, 38, 3, 22, 60, 56],
                borderColor: [
                    '#3F51B5',
                ],
                backgroundColor: [
                    'rgba(63, 81, 181, 0.8)',
                ],
                borderWidth: 2,
                fill: true,
            }]
			},
			overviewChartData5: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [50,64,32,24,18,27,20,36,30],
                borderColor: [
                    '#4DD0E1',
                ],
                backgroundColor: [
                    'rgba(77, 208, 225, 0.8)',
                ],
                borderWidth: 2,
                fill: true
            }
			]},
			overviewChartData6: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [11,30,52,35,39,20,14,18,29],
                borderColor: [
                    '#4DD0E1',
                ],
                backgroundColor: [
                    'rgba(77, 208, 225, 0.8)',
                ],
                borderWidth: 2,
                fill: true
            }
			]},
			overviewChartData7: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [20,29,39,36,45,24,28,20,15],
                borderColor: [
                    '#4DD0E1',
                ],
                backgroundColor: [
                    'rgba(77, 208, 225, 0.8)',
                ],
                borderWidth: 2,
                fill: true
            }
			]},
			overviewChartData8: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [30,39,50,21,33,18,10,24,20],
                borderColor: [
                    '#4DD0E1',
                ],
                backgroundColor: [
                    'rgba(77, 208, 225, 0.8)',
                ],
                borderWidth: 2,
                fill: true
            }
			]},
			overviewChartOptions2: {
            legend: {
                display: false
            },
            responsive: true,
            scales: {
                yAxes: [{
                    display: false
                }],
                xAxes: [{
                    display: false
                }]
            },
            tooltips: {
                enabled: false
            },
            elements: {
                point:{
                    radius: 0
                }
            },
			},
            }
        },
        methods: {
            onThemeChange(theme) {
                this.theme = theme;
            },
            onLayoutChange(layout) {
                this.layout = layout;
            },
            onTopbarThemeChange(theme) {
                this.topbarTheme = theme.name;

                const logo = document.getElementById('logo');
    
                if (theme.name == 'white' || theme.name == 'yellow' || theme.name == 'amber'  || theme.name == 'orange' || theme.name == 'lime') {
                    logo.src = 'assets/layout/images/logo-dark.svg';
                }
                else {
                    logo.src = 'assets/layout/images/logo-light.svg';
                }
            },
            onMenuTheme(menuTheme) {
                this.menuTheme = menuTheme.name;
            },
            onMenuColorChange(menuColor) {
                this.layoutMode = menuColor;

                this.$appState.inputStyle = menuColor === 'dark' ? 'filled' : 'outlined';

                if (menuColor === 'dark') {
                    this.menuTheme = 'dark';
                    this.topbarTheme = 'dark';
                }
                else {
                    this.menuTheme = 'light';
                    this.topbarTheme = 'blue';
                }

                const layoutLink = document.getElementById('layout-css');
                const layoutHref = 'assets/layout/css/layout-' + this.layoutMode + '.css';
                this.replaceLink(layoutLink, layoutHref);

                const themeLink = document.getElementById('theme-css');
                const urlTokens = themeLink.getAttribute('href').split('/');
                urlTokens[urlTokens.length - 1] = 'theme-' + this.layoutMode + '.css';
                const newURL = urlTokens.join('/');

                this.replaceLink(themeLink, newURL);
                this.refreshChart();
            },
            refreshChart() {
                this.ordersOptions = this.getOrdersOptions();

                this.chartData = this.getChartData();
                this.chartOptions = this.getChartOptions();

                this.chartMonthlyData = this.getChartMonthlyData();
                this.chartMonthlyOptions =this.getMonthlyChartOptions();

                this.doughnutData = this.getDoughnutData();
                this.doughnutOptions = this.getDoughnutOptions();

                this.pieData = this.getPieData();
                this.pieOptions = this.getPieOptions();

                this.setOverviewColors();
            },
            replaceLink(linkElement, href) {
                const id = linkElement.getAttribute('id');
                const cloneLinkElement = linkElement.cloneNode(true);

                cloneLinkElement.setAttribute('href', href);
                cloneLinkElement.setAttribute('id', id + '-clone');

                linkElement.parentNode.insertBefore(cloneLinkElement, linkElement.nextSibling);

                cloneLinkElement.addEventListener('load', () => {
                    linkElement.remove();
                    cloneLinkElement.setAttribute('id', id);
                });
            },
            setOverviewColors() {
                const { pinkBorderColor, pinkBgColor, tealBorderColor, tealBgColor } = this.getOverviewColors();

                this.overviewChartData1.datasets[0].borderColor[0] = tealBorderColor;
                this.overviewChartData1.datasets[0].backgroundColor[0] = tealBgColor;

                this.overviewChartData2.datasets[0].borderColor[0] = tealBorderColor;
                this.overviewChartData2.datasets[0].backgroundColor[0] = tealBgColor;

                this.overviewChartData3.datasets[0].borderColor[0] = pinkBorderColor;
                this.overviewChartData3.datasets[0].backgroundColor[0] = pinkBgColor;

                this.overviewChartData4.datasets[0].borderColor[0] = tealBorderColor;
                this.overviewChartData4.datasets[0].backgroundColor[0] = tealBgColor;

                const { whiteBgColor, whiteBorderColor} = this.getOverviewColors();

                this.overviewChartData5.datasets[0].borderColor[0] = whiteBorderColor;
                this.overviewChartData5.datasets[0].backgroundColor[0] = whiteBgColor;

                this.overviewChartData6.datasets[0].borderColor[0] = whiteBorderColor;
                this.overviewChartData6.datasets[0].backgroundColor[0] = whiteBgColor;

                this.overviewChartData7.datasets[0].borderColor[0] = whiteBorderColor;
                this.overviewChartData7.datasets[0].backgroundColor[0] = whiteBgColor;

                this.overviewChartData8.datasets[0].borderColor[0] = whiteBorderColor;
                this.overviewChartData8.datasets[0].backgroundColor[0] = whiteBgColor;
            },
            getOverviewColors() {
                const isLight = this.layoutMode === 'light';
                return {
                    pinkBorderColor: isLight ? '#E91E63' : '#EC407A',
                    pinkBgColor: isLight ? '#F48FB1' : '#F8BBD0',
                    tealBorderColor: isLight ? '#009688' : '#26A69A',
                    tealBgColor: isLight ? '#80CBC4' : '#B2DFDB',
                    whiteBorderColor: isLight ? '#ffffff' : '#ffffff',
                    whiteBgColor: isLight ? 'rgba(255,255,255,.35)' : 'rgba(255,255,255,.35)',
                }
            },
            getOrdersOptions() {
                const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
                const gridLinesColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';
                const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
                return {
                    legend: {
                        display: true,
                        labels: {
                            fontFamily,
                            fontColor: textColor,
                        }
                    },
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontFamily,
                                fontColor: textColor
                            },
                            gridLines: {
                                color: gridLinesColor
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontFamily,
                                fontColor: textColor
                            },
                            gridLines: {
                                color: gridLinesColor
                            }
                        }]
                    }
                }
            },
            getChartData() {
                const isLight = this.layoutMode === 'light';
                const completedColors = {
                    borderColor: isLight ? '#00ACC1' : '#4DD0E1',
                    backgroundColor: isLight ? 'rgb(0, 172, 193, .3)' : 'rgb(77, 208, 225, .3)'
                };
                const canceledColors = {
                    borderColor: isLight ? '#FF9800' : '#FFB74D',
                    backgroundColor: isLight ? 'rgb(255, 152, 0, .3)' : 'rgb(255, 183, 77, .3)'
                };

                return {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [
                        {
                            label: 'Completed',
                            data: [65, 59, 80, 81, 56, 55, 40],
                            borderColor: completedColors.borderColor,
                            backgroundColor: completedColors.backgroundColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: 'Cancelled',
                            data: [28, 48, 40, 19, 86, 27, 90],
                            borderColor: canceledColors.borderColor,
                            backgroundColor: canceledColors.backgroundColor,
                            borderWidth: 2,
                            fill: true
                        }
                    ]
                };
            },
            getChartOptions() {
                const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
                const gridLinesColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';
                return {
                    legend: {
                        display: true,
                        labels: {
                            fontColor: textColor
                        }
                    },
                    responsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: textColor
                            },
                            gridLines: {
                                color: gridLinesColor
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontColor: textColor
                            },
                            gridLines: {
                                color: gridLinesColor
                            }
                        }]
                    }
                }
            },
            getChartMonthlyData() {
                const { limeColor, amberColor, orangeColor, blueColor, lightblueColor,
                    cyanColor, tealColor, greenColor, lightgreenColor } = this.getColors();

                return {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [
                        {
                            label: '2012',
                            data: [6, 25, 97, 12, 7, 70, 42],
                            borderColor: blueColor,
                            backgroundColor: blueColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2013',
                            data: [81, 3, 5, 11, 59, 47, 99],
                            borderColor: lightblueColor,
                            backgroundColor: lightblueColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2014',
                            data: [68, 47, 46, 46, 61, 70, 94],
                            borderColor: cyanColor,
                            backgroundColor: cyanColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2015',
                            data: [31, 9, 18, 76, 6, 11, 79],
                            borderColor: tealColor,
                            backgroundColor: tealColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2016',
                            data: [85, 37, 47, 29, 2, 10, 54],
                            borderColor: greenColor,
                            backgroundColor: greenColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2017',
                            data: [28, 48, 40, 19, 86, 27, 90],
                            borderColor: lightgreenColor,
                            backgroundColor: lightgreenColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2018',
                            data: [89, 18, 95, 18, 97, 61, 54],
                            borderColor: limeColor,
                            backgroundColor: limeColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2019',
                            data: [18, 36, 39, 58, 41, 50, 72],
                            borderColor: amberColor,
                            backgroundColor: amberColor,
                            borderWidth: 2,
                            fill: true
                        },
                        {
                            label: '2020',
                            data: [31, 4, 35, 74, 47, 35, 46],
                            borderColor: orangeColor,
                            backgroundColor: orangeColor,
                            borderWidth: 2,
                            fill: true
                        }
                    ]
                };
            },
            getMonthlyChartOptions() {
                const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
                const gridLinesColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';
                const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
                return {
                    legend: {
                        display: true,
                        labels: {
                            fontFamily,
                            fontColor: textColor
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontFamily,
                                fontColor: textColor
                            },
                            gridLines: {
                                color: gridLinesColor
                            }
                        }],
                        xAxes: [{
                            categoryPercentage: .9,
                            barPercentage: .8,
                            ticks: {
                                fontFamily,
                                fontColor: textColor
                            },
                            gridLines: {
                                color: gridLinesColor
                            }
                        }]
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            },
            getColors() {
                const isLight = this.layoutMode === 'light';
                return {
                    pinkColor: isLight ? '#EC407A' : '#F48FB1',
                    purpleColor: isLight ? '#AB47BC' : '#CE93D8',
                    deeppurpleColor: isLight ? '#7E57C2' : '#B39DDB',
                    indigoColor: isLight ? '#5C6BC0' : '#9FA8DA',
                    blueColor: isLight ? '#42A5F5' : '#90CAF9',
                    lightblueColor: isLight ? '#29B6F6' : '#81D4FA',
                    cyanColor: isLight ? '#00ACC1' : '#4DD0E1',
                    tealColor: isLight ? '#26A69A' : '#80CBC4',
                    greenColor: isLight ? '#66BB6A' : '#A5D6A7',
                    lightgreenColor: isLight ? '#9CCC65' : '#C5E1A5',
                    limeColor: isLight ? '#D4E157' : '#E6EE9C',
                    yellowColor: isLight ? 'FFEE58' : '#FFF59D',
                    amberColor: isLight ? '#FFCA28' : '#FFE082',
                    orangeColor: isLight ? '#FFA726' : '#FFCC80',
                    deeporangeColor: isLight ? '#FF7043' : '#FFAB91',
                    brownColor: isLight ? '#8D6E63' : '#BCAAA4'
                }
            },
            getPieData() {
                const { limeColor, blueColor, tealColor } = this.getColors();
                const borderColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';
                return {
                    labels: ['O', 'D', 'R'],
                    datasets: [
                        {
                            data: [300, 50, 100],
                            backgroundColor: [
                                blueColor,
                                tealColor,
                                limeColor
                            ],
                            borderColor
                        }
                    ]
                }
            },
            getPieOptions() {
                const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
                const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
                return {
                    responsive: true,
                    aspectRatio: 1,
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily,
                            fontColor: textColor
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                };
            },
            getDoughnutData() {
                const { blueColor, lightblueColor, cyanColor, tealColor, greenColor,
                    lightgreenColor, orangeColor } = this.getColors();
                const borderColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';

                return {
                    labels: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    datasets: [
                        {
                            data: [11, 29, 71, 33, 28, 95, 6],
                            backgroundColor: [blueColor, lightblueColor, cyanColor, tealColor, greenColor, lightgreenColor, orangeColor],
                            borderColor
                        }
                    ]
                };
            },
            getDoughnutOptions() {
                const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
                const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
                return {
                    responsive: true,
                    legend: {
                        position: 'top',
                        labels: {
                            fontFamily,
                            fontColor: textColor
                        }
                    },
                    circumference: Math.PI,
                    rotation: -Math.PI,
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                };
            }
        },
        components: {
            "App": App,
            "Error": Error,
            "Access": Access,
            "Login": Login,
            "NotFound": NotFound,
            "Landing": Landing,
            "ContactUs": ContactUs
        }
	}
</script>

<style scoped>
</style>
