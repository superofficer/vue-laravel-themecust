<template>
<div class="p-grid dashboard">
    <div class="p-col-12 p-md-8">
        <div class="card height-100">
            <div class="card-header">
                <h5>Monthly Comparison</h5>
                <Button label="Vertical/Stacked Data" class="p-button-text" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}" @click="changeMonthlyDataView()"></Button>
            </div>

            <Chart type="bar" :data="chartMonthlyData" :options="chartMonthlyOptions" responsive="true" height="400px"></Chart>
        </div>
    </div>

    <div class="p-col-12 p-md-4">
        <div class="card widget-insights height-100">
            <div class="card-header p-mb-2">
                <h5>Insights</h5>
                <div>
                    <Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text p-button-plain" @click="toggle"></Button>
                    <Menu ref="menu" :popup="true" :model="items"></Menu> 
                </div>
            </div>
            <div class="card-subheader p-mb-2 p-d-flex p-ai-center">
                <span>November 22 - November 29</span>
                <Button label="Semi/Full Data" class="p-button-text" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}" @click="changeDoughnutDataView()"></Button>
            </div>
            <Chart type="doughnut" :data="doughnutData" :options="doughnutOptions" responsive="true"></Chart>
            <div class="p-d-flex p-flex-column p-jc-center">
                <div class="p-d-flex p-flex-row p-ai-center p-mt-4 p-px-3">
                    <i class="pi pi-thumbs-up p-p-3 rounded-circle lightgreen-bgcolor solid-surface-text-color"></i>
                    <div class="p-d-flex p-flex-column" :class="{'p-ml-3': !isRTL, 'p-mr-3': isRTL}">
                        <span>Best Day of the Week</span>
                        <small>Friday</small>
                    </div>
                    <span class="indigo-color" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">95</span>
                </div>
                <div class="p-d-flex p-flex-row p-ai-center p-my-4 p-px-3">
                    <i class="pi pi-thumbs-down rounded-circle p-p-3 orange-bgcolor solid-surface-text-color"></i>
                    <div class="p-d-flex p-flex-column" :class="{'p-ml-3': !isRTL, 'p-mr-3': isRTL}">
                        <span>Worst Day of the Week</span>
                        <small>Saturday</small>
                    </div>
                    <span class="indigo-color" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">6</span>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-4">
        <div class="card widget-social">
            <div class="p-d-flex p-jc-between p-ai-center p-p-3">
                <div class="social-icon">
                    <i class="pi pi-twitter blue-color fs-xxlarge"></i>
                </div>
                <div class="info p-d-flex p-flex-column">
                    <span class="value">44.995</span>
                    <span class="subtext p-mt-2">Retweets</span>
                </div>
            </div>

            <div class="stats p-d-flex p-jc-between p-mt-3">
                <div class="left p-d-flex p-flex-column ">
                    <span class="title">Target</span>
                    <span class="value p-mb-2">10.000</span>
                    <ProgressBar :value="50" :showValue="false"></ProgressBar>
                </div>
                <div class="right p-d-flex p-flex-column">
                    <span class="title">All Time Record</span>
                    <span class="value p-mb-2">50.702</span>
                    <ProgressBar :value="24" :showValue="false"></ProgressBar>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-4">
        <div class="card widget-social">
            <div class="p-d-flex p-jc-between p-ai-center p-p-3">
                <div class="social-icon">
                    <i class="pi pi-facebook indigo-color fs-xxlarge"></i>
                </div>
                <div class="info p-d-flex p-flex-column">
                    <span class="value">44.995</span>
                    <span class="subtext p-mt-2">Facebook Interactions</span>
                </div>
            </div>

            <div class="stats p-d-flex p-jc-between p-mt-3">
                <div class="left p-d-flex p-flex-column ">
                    <span class="title">Target</span>
                    <span class="value p-mb-2">10.000</span>
                    <ProgressBar :value="23" :showValue="false"></ProgressBar>
                </div>
                <div class="right p-d-flex p-flex-column">
                    <span class="title">All Time Record</span>
                    <span class="value p-mb-2">99.028</span>
                    <ProgressBar :value="38" :showValue="false"></ProgressBar>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-4">
        <div class="card widget-social">
            <div class="p-d-flex p-jc-between p-ai-center p-p-3">
                <div class="social-icon">
                    <i class="pi pi-github text-color fs-xxlarge"></i>
                </div>
                <div class="info p-d-flex p-flex-column">
                    <span class="value">81.002</span>
                    <span class="subtext p-mt-2">Star</span>
                </div>
            </div>

            <div class="stats p-d-flex p-jc-between p-mt-3">
                <div class="left p-d-flex p-flex-column ">
                    <span class="title">Target</span>
                    <span class="value p-mb-2">10.000</span>
                    <ProgressBar :value="62" :showValue="false"></ProgressBar>
                </div>
                <div class="right p-d-flex p-flex-column">
                    <span class="title">All Time Record</span>
                    <span class="value p-mb-2">162.550</span>
                    <ProgressBar :value="14" :showValue="false"></ProgressBar>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-12">
        <div class="card p-grid p-nogutter widget-sales p-d-block p-d-sm-flex">
            <div class="p-lg-3 p-md-6 p-sm-12 p-p-0">
                <div class="sales-info p-d-flex p-flex-column p-p-4">
                    <span class="muted-text">Store A Sales</span>
                    <span class="fs-large p-mt-2">
                        <i v-if="storeADiff !== 0" class="fw-700 fs-large pi" :class="{'p-pr-1': !isRTL, 'p-pl-1': isRTL, 'pi-arrow-up green-color': storeADiff > 0, 'pi-arrow-down pink-color': storeADiff < 0}"></i>
                        ${{storeATotalValue}}
                        <span v-if="storeADiff !== 0" class="fw-500 fs-normal" :class="{'p-ml-1': !isRTL, 'p-mr-1': isRTL, 'green-color': storeADiff > 0, 'pink-color': storeADiff < 0}">
                            {{storeADiff > 0 ? '+' : ''}}{{storeADiff}}
                        </span>
                    </span>
                </div>
                <div class="p-px-4">
                    <Chart type="line" :data="storeAData" :options="storeOptions" responsive="true"></Chart>
                </div>
            </div>
            <div class="p-lg-3 p-md-6 p-sm-12 p-p-0">
                <div class="sales-info p-d-flex p-flex-column p-p-4">
                    <span class="muted-text">Store B Sales</span>
                    <span class="fs-large p-mt-2">
                        <i v-if="storeBDiff !== 0" class="fw-700 fs-large pi" :class="{'p-pr-1': !isRTL, 'p-pl-1': isRTL, 'pi-arrow-up green-color': storeBDiff > 0, 'pi-arrow-down pink-color': storeBDiff < 0}"></i>
                        ${{storeBTotalValue}}
                        <span v-if="storeBDiff !== 0" class="fw-500 fs-normal" :class="{'p-ml-1': !isRTL, 'p-mr-1': isRTL,'green-color': storeBDiff > 0, 'pink-color': storeBDiff < 0}">
                            {{storeBDiff > 0 ? '+' : ''}}{{storeBDiff}}
                        </span>
                    </span>
                </div>
                <div class="p-px-4">
                    <Chart type="line" :data="storeBData" :options="storeOptions" responsive="true"></Chart>
                </div>
            </div>
            <div class="p-lg-3 p-md-6 p-sm-12 p-p-0">
                <div class="sales-info p-d-flex p-flex-column p-p-4">
                    <span class="muted-text">Store C Sales</span>
                    <span class="fs-large p-mt-2">
                        <i v-if="storeCDiff !== 0" class="fw-700 fs-large pi" :class="{'p-pr-1': !isRTL, 'p-pl-1': isRTL, 'pi-arrow-up green-color': storeCDiff > 0, 'pi-arrow-down pink-color': storeCDiff < 0}"></i>
                        ${{storeCTotalValue}}
                        <span v-if="storeCDiff !== 0" class="fw-500 fs-normal" :class="{'p-ml-1': !isRTL, 'p-mr-1': isRTL, 'green-color': storeCDiff > 0, 'pink-color': storeCDiff < 0}">
                            {{storeCDiff > 0 ? '+' : ''}}{{storeCDiff}}
                        </span>
                    </span>
                </div>
                <div class="p-px-4">
                    <Chart type="line" :data="storeCData" :options="storeOptions" responsive="true"></Chart>
                </div>
            </div>
            <div class="p-lg-3 p-md-6 p-sm-12 p-p-0">
                <div class="sales-info p-d-flex p-flex-column p-p-4">
                    <span class="muted-text">Store D Sales</span>
                    <span class="fs-large p-mt-2">
                        <i v-if="storeDDiff !== 0" class="fw-700 fs-large pi" :class="{'p-pr-1': !isRTL, 'p-pl-1': isRTL, 'pi-arrow-up green-color': storeDDiff > 0, 'pi-arrow-down pink-color': storeDDiff < 0}"></i>
                        ${{storeDTotalValue}}
                        <span v-if="storeDDiff !== 0" class="fw-500 fs-normal" :class="{'p-ml-1': !isRTL, 'p-mr-1': isRTL, 'green-color': storeDDiff > 0, 'pink-color': storeDDiff < 0}">
                            {{storeDDiff > 0 ? '+' : ''}}{{storeDDiff}}
                        </span>
                    </span>
                </div>
                <div class="p-px-4">
                    <Chart type="line" :data="storeDData" :options="storeOptions" responsive="true"></Chart>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-6">
        <div class="card height-100 widget-topsearchs">
            <div class=card-header>
                <h5>Top Searchs</h5>
                <div>
                    <Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text p-button-plain" @click="toggle"></Button>
                    <Menu ref="menu" :popup="true" :model="items"></Menu>
                </div>
            </div>
            <div class="p-d-flex p-jc-between item">
                <span>Mat Orange Case</span>
                <span class="value type-green">82% CONV RATE</span>
            </div>
            <div class="p-d-flex p-jc-between item">
                <span>Space T-Shirt</span>
                <span class="value type-green">78% CONV RATE</span>
            </div>
            <div class="p-d-flex p-jc-between item">
                <span>Orange Black Hoodie</span>
                <span class="value type-green">61% CONV RATE</span>
            </div>
            <div class="p-d-flex p-jc-between item">
                <span>Wonders Notebook</span>
                <span class="value type-yellow">48 CONV RATE</span>
            </div>
            <div class="p-d-flex p-jc-between item">
                <span>Robots T-Shirt</span>
                <span class="value type-yellow">34% CONV RATE</span>
            </div>
            <div class="p-d-flex p-jc-between item">
                <span>Green Portal Sticker</span>
                <span class="value type-pink">11% CONV RATE</span>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-6">
        <div class="card">
            <DataTable :value="products" class="p-datatable-customers" :rows="4" style="margin-bottom: 20px" :paginator="true">
					<Column>
						<template #header>
							Logo
						</template>
						<template #body="slotProps">
							<img :src="'assets/demo/images/product/' + slotProps.data.image" :alt="slotProps.data.image" width="50" />
						</template>
					</Column>
					<Column field="name" header="Name" :sortable="true">
						<template #body="slotProps">
							<span class="p-column-title">Name</span>
							{{slotProps.data.name}}
						</template>
					</Column>
					<Column field="category" header="Category" :sortable="true">
						<template #body="slotProps">
							<span class="p-column-title">Category</span>
							{{slotProps.data.category}}
						</template>
					</Column>
					<Column field="price" header="Price" :sortable="true">
						<template #body="slotProps">
							<span class="p-column-title">Price</span>
							{{formatCurrency(slotProps.data.price)}}
						</template>
					</Column>
					<Column>
						<template #header>
							View
						</template>
						<template #body>
							<Button icon="pi pi-search" class="p-button-rounded p-button-text p-mb-1"></Button>
						</template>
					</Column>
				</DataTable>
        </div>
    </div>

    <div class="p-col-12 p-md-4">
        <div class="card widget-expenses">
            <div class=card-header>
                <h5>Expenses</h5>
                <div>
                    <Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text p-button-plain" @click="toggle"></Button>
                    <Menu ref="menu" :popup="true" :model="items"></Menu>
                </div>
            </div>
            <div class="card-subheader p-mb-2 p-pb-3">
                November 22 - November 29
            </div>

            <div class="p-d-flex p-jc-between p-ai-center p-my-2 item">
                <div class="p-d-flex p-flex-column">
                    <i class="pi pi-cloud type p-mb-2"></i>
                    <span class="value p-mb-1">$30.247</span>
                    <span class="subtext">Cloud Infrastructure</span>
                </div>
                <span class="item-button"><a href="#"><i class="pi pi-chevron-right"></i></a></span>
            </div>
            <div class="p-d-flex p-jc-between p-ai-center p-my-2 item">
                <div class="p-d-flex p-flex-column">
                    <i class="pi pi-tag type p-mb-2"></i>
                    <span class="value p-mb-1">$29.550</span>
                    <span class="subtext">General Goods</span>
                </div>
                <span class="item-button"><a href="#"><i class="pi pi-chevron-right"></i></a></span>
            </div>
            <div class="p-d-flex p-jc-between p-ai-center p-my-2 item">
                <div class="p-d-flex p-flex-column">
                    <i class="pi pi-desktop type p-mb-2"></i>
                    <span class="value p-mb-1">$16.660</span>
                    <span class="subtext">Consumer Electronics</span>
                </div>
                <span class="item-button"><a href="#"><i class="pi pi-chevron-right"></i></a></span>
            </div>
            <div class="p-d-flex p-jc-between p-ai-center p-my-2 item">
                <div class="p-d-flex p-flex-column">
                    <i class="pi pi-compass type p-mb-2"></i>
                    <span class="value p-mb-1">$5.801</span>
                    <span class="subtext">Incalculables</span>
                </div>
                <span class="item-button"><a href="#"><i class="pi pi-chevron-right"></i></a></span>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-8">
        <div class="card widget-traffic height-100">
            <div class="card-header">
                <h5>All Traffic Channels</h5>
                <Button label="Pie/Doughnut Data" class="p-button-text" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}" @click="togglePieDoughnut()"></Button>
                <Button label="Semi/Full Data" class="p-button-text p-mx-2" @click="changePieDoughnutDataView()"></Button>
            </div>
            <div class="p-d-flex p-grid">
                <div class="p-col-12 p-md-6 left p-d-flex p-flex-column p-jc-evenly">
                    <div class="total p-d-flex p-flex-column">
                        <span class="title p-mb-2">Total</span>
                        <span class="value p-mb-5">66.761</span>
                    </div>

                    <div class="info p-d-flex p-jc-between">
                        <div class="organic p-d-flex p-flex-column">
                            <span class="title p-mb-1">Organic</span>
                            <span class="value">51.596</span>
                        </div>
                        <div class="direct p-d-flex p-flex-column">
                            <span class="title p-mb-1">Direct</span>
                            <span class="value">11.421</span>
                        </div>
                        <div class="referral p-d-flex p-flex-column">
                            <span class="title p-mb-1">Referral</span>
                            <span class="value">3.862</span>
                        </div>
                    </div>
                </div>
                <div class="p-col-12 p-md-6 right p-d-flex p-jc-center">
                    <Chart type="pie" :data="pieData" :options="pieOptions"></Chart>
                </div>
            </div>
        </div>
    </div>
</div>

</template>

<script>
import ProductService from '../service/ProductService';

export default {
    data() {
        return {
            products: null,
            items: [
                {label: 'Update', icon: 'pi pi-fw pi-refresh'},
                {label: 'Edit', icon: 'pi pi-fw pi-pencil'}
            ],
            storeAData: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [55, 3, 45, 6, 44, 58, 84, 68, 64],
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
        storeBData: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [81, 75, 63, 100, 69, 79, 38, 37, 76],
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
        storeCData: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [99, 55, 22, 72, 24, 79, 35, 91, 48],
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
        storeDData: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September'],
            datasets: [{
                data: [5, 51, 68, 82, 28, 21, 29, 45, 44],
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
        storeOptions: {
            legend: {
                display: false
            },
            responsive: true,
            aspectRatio: 4,
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
        }
        }
    },
    productService: null,
	created() {
		this.productService = new ProductService();
	},
	mounted() {
		this.productService.getProducts().then(data => this.products = data);
	},
	methods: {
		formatCurrency(value) {
			return value.toLocaleString('en-US', {style: 'currency', currency: 'USD'});
		},
        toggle(event) {
            this.$refs.menu.toggle(event);
        }
    },
    computed: {
        isRTL() {
			return this.$appState.RTL;
		}
    }
}
</script>