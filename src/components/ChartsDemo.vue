<template>
	<div class="p-grid p-fluid">
		<div class="p-col-12 p-lg-6">
			<div class="card">
				<h5 class="centerText">Linear Chart</h5>
				<Chart type="line" :data="lineData" :options="chartsOptions" />
			</div>

			<div class="card">
				<h5 class="centerText">Pie Chart</h5>
				<Chart type="pie" :data="pieData" :options="chartsOptions2" />
			</div>

			<div class="card">
				<h5 class="centerText">Polar Area Chart</h5>
				<Chart type="polarArea" :data="polarData" :options="chartsOptions3" />
			</div>
		</div>
		<div class="p-col-12 p-lg-6">
			<div class="card">
				<h5 class="centerText">Bar Chart</h5>
				<Chart type="bar" :data="barData" :options="chartsOptions" />
			</div>

			<div class="card">
				<h5 class="centerText">Doughnut Chart</h5>
				<Chart type="doughnut" :data="pieData" :options="chartsOptions2" />
			</div>

			<div class="card">
				<h5 class="centerText">Radar Chart</h5>
				<Chart type="radar" :data="radarData" :options="chartsOptions3" />
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			lineData: null,
            barData: null,
            pieData: null,
            polarData: null,
            chartsOptions: null,
            chartsOptions2: null,
            chartsOptions3: null,
			radarData: {
				labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
				datasets: [
					{
						label: 'First Dataset',
						backgroundColor: 'rgba(54, 162, 235,0.2)',
						borderColor: 'rgba(54, 162, 235,1)',
						pointBackgroundColor: 'rgba(54, 162, 235,1)',
						pointBorderColor: '#fff',
						pointHoverBackgroundColor: '#fff',
						pointHoverBorderColor: 'rgba(54, 162, 235,1)',
						data: [65, 59, 90, 81, 56, 55, 40]
					},
					{
						label: 'Second Dataset',
						backgroundColor: 'rgba(255, 99, 132,0.2)',
						borderColor: 'rgba(255, 99, 132,1)',
						pointBackgroundColor: 'rgba(255, 99, 132,1)',
						pointBorderColor: '#fff',
						pointHoverBackgroundColor: '#fff',
						pointHoverBorderColor: 'rgba(255, 99, 132,1)',
						data: [28, 48, 40, 19, 96, 27, 100]
					}
				]
			}
		}
	},
	mounted() {
		this.refreshChart();
	},
    watch: {
        '$appState.isNewThemeLoaded'(isLoaded) {
            if (isLoaded) {
                this.refreshChart();
                this.$appState.isNewThemeLoaded = false;
            }
        }
    },
	methods: {
		refreshChart() {
			this.lineData = this.getLineData();
            this.barData = this.getBarData();
            this.pieData = this.getPieData();
            this.polarData = this.getPolarData();
            this.chartsOptions = this.getChartOptions();
            this.chartsOptions2 = this.getChartOptions2();
            this.chartsOptions3 = this.getChartOptions3();
		},
		getLineData() {
        const isLight = this.$appState.isNewThemeLoaded;
        const dataset1Color = isLight ? '#4DD0E1' : '#00ACC1';
        const dataset2Color = isLight ? '#FFB74D' : '#FF9800';

        return {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: 'First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    backgroundColor: dataset1Color,
                    borderColor: dataset1Color,
                },
                {
                    label: 'Second Dataset',
                    data: [28, 48, 40, 19, 86, 27, 90],
                    fill: false,
                    backgroundColor: dataset2Color,
                    borderColor: dataset2Color,
                }
            ]
        };
    },

    getBarData() {
        const isLight = this.$appState.isNewThemeLoaded;
        const dataset1Color = isLight ? '#4DD0E1' : '#00ACC1';
        const dataset2Color = isLight ? '#FFB74D' : '#FF9800';

        return {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: 'First Dataset',
                    backgroundColor: dataset1Color,
                    borderColor: dataset1Color,
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: 'Second Dataset',
                    backgroundColor: dataset2Color,
                    borderColor: dataset2Color,
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };
    },

    getPieData() {
        const { limeColor, blueColor, tealColor, orangeColor } = this.getColors();
        const borderColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';

        return {
            labels: ['A', 'B', 'C', 'D'],
            datasets: [
                {
                    data: [540, 325, 702, 421],
                    backgroundColor: [
                        blueColor,
                        tealColor,
                        limeColor,
                        orangeColor
                    ],
                    borderColor
                }]
        };
    },

    getPolarData() {
        const { limeColor, blueColor, tealColor, orangeColor } = this.getColors();
        const borderColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';

        return {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    3
                ],
                backgroundColor: [
                    blueColor,
                    tealColor,
                    limeColor,
                    orangeColor
                ],
                borderColor,
                label: 'Dataset'
            }],
            labels: [
                'A',
                'B',
                'C',
                'D'
            ]
        };
    },

    getColors() {
        const isLight = this.$appState.isNewThemeLoaded;
        return {
            pinkColor: isLight ? '#F48FB1' : '#EC407A',
            purpleColor: isLight ? '#CE93D8' : '#AB47BC',
            deeppurpleColor: isLight ? '#B39DDB' : '#7E57C2',
            indigoColor: isLight ? '#9FA8DA' : '#5C6BC0',
            blueColor: isLight ? '#90CAF9' : '#42A5F5',
            lightblueColor: isLight ? '#81D4FA' : '#29B6F6',
            cyanColor: isLight ? '#4DD0E1' : '#00ACC1',
            tealColor: isLight ? '#80CBC4' : '#26A69A',
            greenColor: isLight ? '#A5D6A7' : '#66BB6A',
            lightgreenColor: isLight ? '#C5E1A5' : '#9CCC65',
            limeColor: isLight ? '#E6EE9C' : '#D4E157',
            yellowColor: isLight ? '#FFF59D' : 'FFEE58',
            amberColor: isLight ? '#FFE082' : '#FFCA28',
            orangeColor: isLight ? '#FFCC80' : '#FFA726',
            deeporangeColor: isLight ? '#FFAB91' : '#FF7043',
            brownColor: isLight ? '#BCAAA4' : '#8D6E63'
        }
    },

    getChartOptions() {
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

    getChartOptions2() {
        const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
        const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
        return {
            legend: {
                display: true,
                labels: {
                    fontFamily,
                    fontColor: textColor,
                }
            },
            responsive: true
        }
    },

    getChartOptions3() {
        const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
        const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
        const gridLinesColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';

        return {
            legend: {
                display: true,
                labels: {
                    fontFamily,
                    fontColor: textColor,
                }
            },
            scale: {
                gridLines: {
                    color: gridLinesColor
                },
                pointLabels: {
                    fontColor: textColor
                }
            }
        }
    }
	}
}
</script>

<style scoped>

</style>
