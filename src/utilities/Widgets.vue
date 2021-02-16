<template>
	<div class="p-grid dashboard">
		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="card overview-box p-d-flex p-flex-column p-pt-2 cyan-bgcolor solid-surface-text-color">
				<div class="p-d-flex p-ai-center muted-text">
					<i class="pi pi-shopping-cart"></i>
					<h6 class="p-m-0" :class="{'p-pl-2': !isRTL, 'p-pr-2': isRTL}">Orders</h6>
					<div :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">
						<Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text solid-surface-text-color" @click="toggleMenu"></Button>
						<Menu ref="menu" :popup="true" :model="items"></Menu>
					</div>
				</div>
				<div class="p-d-flex p-jc-between p-mt-3 p-flex-wrap">
					<div class="p-d-flex p-flex-column">
						<span class="p-mb-1 fs-xlarge">640</span>
						<span class="overview-status p-p-1 teal-bgcolor fs-small">1420 Completed</span>
					</div>
					<div class="p-d-flex p-ai-end">
						<Chart type="line" :data="overviewChartData5" :options="overviewChartOptions2" responsive="true" :height="60" :width="160"></Chart>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="card overview-box p-d-flex p-flex-column p-pt-2 orange-bgcolor solid-surface-text-color">
				<div class="p-d-flex p-ai-center muted-text">
					<i class="pi pi-dollar"></i>
					<h6 class="p-m-0" :class="{'p-pl-2': !isRTL, 'p-pr-2': isRTL}">Revenue</h6>
					<div :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">
						<Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text solid-surface-text-color" @click="toggleMenu"></Button>
						<Menu ref="menu" :popup="true" :model="items"></Menu>
					</div>
				</div>
				<div class="p-d-flex p-jc-between p-mt-3 p-flex-wrap">
					<div class="p-d-flex p-flex-column">
						<span class="p-mb-1 fs-xlarge">$57K</span>
						<span class="overview-status p-p-1 teal-bgcolor fs-small">$9,640 Income</span>
					</div>
					<div class="p-d-flex p-ai-end">
						<Chart type="line" :data="overviewChartData6" :options="overviewChartOptions2" responsive="true" :height="60" :width="160"></Chart>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="card overview-box p-d-flex p-flex-column p-pt-2 pink-bgcolor solid-surface-text-color">
				<div class="p-d-flex p-ai-center muted-text">
					<i class="pi pi-users"></i>
					<h6 class="p-m-0" :class="{'p-pl-2': !isRTL, 'p-pr-2': isRTL}">Customers</h6>
					<div :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">
						<Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text solid-surface-text-color" @click="toggleMenu"></Button>
						<Menu ref="menu" :popup="true" :model="items"></Menu>
					</div>
				</div>
				<div class="p-d-flex p-jc-between p-mt-3 p-flex-wrap">
					<div class="p-d-flex p-flex-column">
						<span class="p-mb-1 fs-xlarge">8572</span>
						<span class="overview-status p-p-1 pink-bgcolor fs-small">25402 Registered</span>
					</div>
					<div class="p-d-flex p-ai-end">
						<Chart type="line" :data="overviewChartData7" :options="overviewChartOptions2" responsive="true" :height="60" :width="160"></Chart>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="card overview-box p-d-flex p-flex-column p-pt-2 purple-bgcolor solid-surface-text-color">
				<div class="p-d-flex p-ai-center muted-text">
					<i class="pi pi-comments"></i>
					<h6 class="p-m-0" :class="{'p-pl-2': !isRTL, 'p-pr-2': isRTL}">Comments</h6>
					<div :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">
						<Button icon="pi pi-ellipsis-h" class="p-button-rounded p-button-text solid-surface-text-color" @click="toggleMenu"></Button>
						<Menu ref="menu" :popup="true" :model="items"></Menu>
					</div>
				</div>
				<div class="p-d-flex p-jc-between p-mt-3 p-flex-wrap">
					<div class="p-d-flex p-flex-column">
						<span class="p-mb-1 fs-xlarge">805</span>
						<span class="overview-status p-p-1 teal-bgcolor fs-small">85 Responded</span>
					</div>
					<div class="p-d-flex p-ai-end">
						<Chart type="line" :data="overviewChartData8" :options="overviewChartOptions2" responsive="true" :height="60" :width="160"></Chart>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-4">
			<div class="card height-100 p-d-flex p-flex-column">
				<div class="p-d-flex p-jc-center p-p-3 rounded-normal content-alt-bgcolor">
					<img src="assets/layout/images/widgets/feature-faq.svg" alt="feature-faq">
				</div>
				<div class="p-d-flex p-flex-column p-ai-center p-mt-3">
					<h5 class="p-mb-2">Frequently Asked Questions</h5>
					<p class="muted-text">We answer all your burning questions about Ultima, and some probably never even thought to ask.</p>
				</div>
				<div class="p-d-flex p-jc-between p-ai-center p-pt-3 p-mt-auto">
					<small class="muted-text">46 Questions</small>
					<Button label="VIEW FAQ"></Button>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-4">
			<div class="card height-100 p-d-flex p-flex-column">
				<div class="p-d-flex p-jc-center p-p-3 rounded-normal content-alt-bgcolor">
					<img src="assets/layout/images/widgets/feature-onboarding.svg" alt="feature-onboarding">
				</div>
				<div class="p-d-flex p-flex-column p-ai-center p-mt-3">
					<h5 class="p-mb-2">Onboarding</h5>
					<p class="muted-text">Follow the steps to start your Ultima adventure within a few days.</p>
				</div>
				<div class="p-d-flex p-jc-between p-ai-center p-pt-3 p-mt-auto">
					<small class="muted-text">3 Steps Left</small>
					<Button label="VIEW STEPS"></Button>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-4">
			<div class="card height-100 p-d-flex p-flex-column">
				<div class="p-d-flex p-jc-center p-p-3 rounded-normal content-alt-bgcolor">
					<img src="assets/layout/images/widgets/feature-security.svg" alt="feature-security">
				</div>
				<div class="p-d-flex p-flex-column p-ai-center p-mt-3">
					<h5 class="p-mb-2">Security Center</h5>
					<p class="muted-text">Security surveillance management and threat protection for your Ultima cloud workloads.</p>
				</div>
				<div class="p-d-flex p-jc-between p-ai-center p-pt-3 p-mt-auto">
					<small class="muted-text">3 Steps Left</small>
					<Button label="VIEW CENTER"></Button>
				</div>
			</div>
		</div>


		<div class="p-col-12 p-lg-4">
        <div class="card height-100">
            <div class="card-header">
                <h5>Documents</h5>
            </div>

            <ul class="widget-list">
                <li class="p-d-flex p-py-3">
                    <div class="p-d-flex p-ai-center">
                        <i class="pi pi-star p-p-2 lightblue-bgcolor white-color widget-list-item-radius"></i>
                        <div :class="{'p-ml-2': !isRTL, 'p-mr-2': isRTL}">
                            <div>Design Team | Sprint 021</div>
                            <small class="muted-text">21MB</small>
                        </div>
                    </div>
                    <Button type="button" icon="pi pi-copy" class="p-button-outlined" :class="{'p-ml-auto p-mr-1': !isRTL, 'p-mr-auto p-ml-1': isRTL}"></Button>
                    <Button type="button" icon="pi pi-arrow-down" class="p-button-outlined"></Button>
                </li>

                <li class="p-d-flex p-py-3">
                    <div class="p-d-flex p-ai-center">
                        <i class="pi pi-file-excel p-p-2 yellow-bgcolor text-color widget-list-item-radius"></i>
                        <div :class="{'p-ml-2': !isRTL, 'p-mr-2': isRTL}">
                            <div>Elite Report 2020-Q4</div>
                            <small class="muted-text">56.00MB</small>
                        </div>
                    </div>
                    <Button type="button" icon="pi pi-copy" class="p-button-outlined" :class="{'p-ml-auto p-mr-1': !isRTL, 'p-mr-auto p-ml-1': isRTL}"></Button>
                    <Button type="button" icon="pi pi-arrow-down" class="p-button-outlined"></Button>
                </li>

                <li class="p-d-flex p-py-3">
                    <div class="p-d-flex p-ai-center">
                        <i class="pi pi-image p-p-2 teal-bgcolor white-color widget-list-item-radius"></i>
                        <div :class="{'p-ml-2': !isRTL, 'p-mr-2': isRTL}">
                            <div>Ultima Marketing Assets</div>
                            <small class="muted-text">1.29GB</small>
                        </div>
                    </div>
                    <Button type="button" icon="pi pi-copy" class="p-button-outlined" :class="{'p-ml-auto p-mr-1': !isRTL, 'p-mr-auto p-ml-1': isRTL}"></Button>
                    <Button type="button" icon="pi pi-arrow-down" class="p-button-outlined"></Button>
                </li>

                <li class="p-d-flex p-py-3">
                    <div class="p-d-flex p-ai-center">
                        <i class="pi pi-file p-p-2 bluegrey-bgcolor white-color widget-list-item-radius"></i>
                        <div :class="{'p-ml-2': !isRTL, 'p-mr-2': isRTL}">
                            <div>Ultima Remastered Docs</div>
                            <small class="muted-text">26.54KB</small>
                        </div>
                    </div>
                    <Button type="button" icon="pi pi-copy" class="p-button-outlined" :class="{'p-ml-auto p-mr-1': !isRTL, 'p-mr-auto p-ml-1': isRTL}"></Button>
                    <Button type="button" icon="pi pi-arrow-down" class="p-button-outlined"></Button>
                </li>

                <li class="p-d-flex p-py-3">
                    <div class="p-d-flex p-ai-center">
                        <i class="pi pi-key p-p-2 purple-bgcolor white-color widget-list-item-radius"></i>
                        <div :class="{'p-ml-2': !isRTL, 'p-mr-2': isRTL}">
                            <div>Keychain</div>
                            <small class="muted-text">320.09KB</small>
                        </div>
                    </div>
                    <Button type="button" icon="pi pi-copy" class="p-button-outlined" :class="{'p-ml-auto p-mr-1': !isRTL, 'p-mr-auto p-ml-1': isRTL}"></Button>
                    <Button type="button" icon="pi pi-arrow-down" class="p-button-outlined"></Button>
                </li>

                <li class="p-d-flex p-py-3">
                    <div class="p-d-flex p-ai-center">
                        <i class="pi pi-th-large p-p-2 pink-bgcolor white-color widget-list-item-radius"></i>
                        <div :class="{'p-ml-2': !isRTL, 'p-mr-2': isRTL}">
                            <div>U03 - Feedback Session</div>
                            <small class="muted-text">128.45KB</small>
                        </div>
                    </div>
                    <Button type="button" icon="pi pi-copy" class="p-button-outlined" :class="{'p-ml-auto p-mr-1': !isRTL, 'p-mr-auto p-ml-1': isRTL}"></Button>
                    <Button type="button" icon="pi pi-arrow-down" class="p-button-outlined"></Button>
                </li>
            </ul>

            <Button type="button" label="Download All" icon="pi pi-cloud-download" class="p-button-text p-button-plain p-mt-4"></Button>
        </div>
    </div>

    <div class="p-col-12 p-lg-8">
        <div class="p-grid p-m-0 widget-pricing">
            <div class="p-col-12 p-xl-4">
                <div class="card p-p-0">
                    <div class="p-d-flex p-flex-column p-ai-center indigo-bgcolor white-color p-p-6 fs-large">
                        <span>BASIC</span>
                        <h1 class="p-text-bold">$5</h1>
                        <span>Monthly</span>
                    </div>
                    <ul class="options">
                        <li><i class="pi pi-check"></i><span>Responsive</span></li>
                        <li><i class="pi pi-check"></i><span>Push Messages</span></li>
                    </ul>
                </div>
            </div>
            <div class="p-col-12 p-xl-4">
                <div class="card p-p-0">
                    <div class="p-d-flex p-flex-column p-ai-center pink-bgcolor white-color p-p-6 fs-large">
                        <span>STANDARD</span>
                        <h1 class="p-text-bold">$25</h1>
                        <span>Monthly</span>
                    </div>
                    <ul class="options">
                        <li><i class="pi pi-check"></i><span>Responsive</span></li>
                        <li><i class="pi pi-check"></i><span>Push Messages</span></li>
                        <li><i class="pi pi-check"></i><span>7/24 Support</span></li>
                    </ul>
                </div>
            </div>
            <div class="p-col-12 p-xl-4 pricing-box pricing-professional">
                <div class="card p-p-0">
                    <div class="p-d-flex p-flex-column p-ai-center cyan-bgcolor white-color p-p-6 fs-large">
                        <span>PROFESSIONAL</span>
                        <h1 class="p-text-bold">$50</h1>
                        <span>Monthly</span>
                    </div>
                    <ul class="options">
                        <li><i class="pi pi-check"></i><span>Responsive</span></li>
                        <li><i class="pi pi-check"></i><span>Push Messages</span></li>
                        <li><i class="pi pi-check"></i><span>7/24 Support</span></li>
                        <li><i class="pi pi-check"></i><span>Free Shipping</span></li>
                        <li><i class="pi pi-check"></i><span>Unlimited Bandwidth</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-lg-4">
        <div class="card height-100 widget-map">
            <div class="map-container p-p-3">
                <span class="p-input-icon-left p-d-block p-fluid">
                    <i class="pi pi-search"></i>
                    <InputText type="text" placeholder="Search for delivery" />
                </span>
            </div>
            <div class="p-mt-3 p-d-flex p-ai-center">
                <div class="actions">
                    <Button type="button" icon="pi pi-share-alt" class="p-button-rounded p-button-text"></Button>
                    <Button type="button" icon="pi pi-compass" class="p-button-rounded p-button-text"></Button>
                    <Button type="button" icon="pi pi-heart" class="p-button-rounded p-button-text"></Button>
                </div>
                <span class="muted-text" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}">View on </span>
                <Button type="button" label="Google Maps" class="p-button-text p-button-plain p-px-1"></Button>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-lg-4">
        <div class="card height-100">
            <div class="card-header">
                <h5 class="p-mb-0">Overview</h5>
            </div>
            <div class="muted-text fs-small p-my-2">Last 7 Months</div>
            <hr class="p-mt-0" />

            <ul class="widget-list">
                <li class="p-mb-3">
                    <div class="p-d-flex p-jc-between p-mb-2">
                        <span>W1</span>
                        <small class="muted-text">41/100</small>
                    </div>
                    <ProgressBar :value="41" :showValue="false"></ProgressBar>
                </li>
                <li class="p-mb-3">
                    <div class="p-d-flex p-jc-between p-mb-2">
                        <span>W2</span>
                        <small class="muted-text">23/100</small>
                    </div>
                    <ProgressBar :value="23" :showValue="false"></ProgressBar>
                </li>
                <li class="p-mb-3">
                    <div class="p-d-flex p-jc-between p-mb-2">
                        <span>W3</span>
                        <small class="muted-text">81/100</small>
                    </div>
                    <ProgressBar :value="81" :showValue="false"></ProgressBar>
                </li>
                <li class="p-mb-3">
                    <div class="p-d-flex p-jc-between p-mb-2">
                        <span>W4</span>
                        <small class="muted-text">33/100</small>
                    </div>
                    <ProgressBar :value="33" :showValue="false"></ProgressBar>
                </li>
                <li class="p-mb-3">
                    <div class="p-d-flex p-jc-between p-mb-2">
                        <span>W5</span>
                        <small class="muted-text">37/100</small>
                    </div>
                    <ProgressBar :value="37" :showValue="false"></ProgressBar>
                </li>
                <li class="p-mb-3">
                    <div class="p-d-flex p-jc-between p-mb-2">
                        <span>W6</span>
                        <small class="muted-text">12/100</small>
                    </div>
                    <ProgressBar :value="12" :showValue="false"></ProgressBar>
                </li>
            </ul>
        </div>
    </div>

    <div class="p-col-12 p-lg-4">
        <div class="card height-100 p-d-flex p-flex-column p-ai-center">
            <img class="p-mt-3" src="assets/layout/images/widgets/asset-profile.png" alt="profile">
            <h5 class="p-mb-1">John Doe</h5>

            <div class="location p-d-flex p-ai-center p-mb-5">
                <i class="pi pi-map-marker p-mr-1" :class="{'p-mr-1': !isRTL, 'p-ml-1': isRTL}"></i>
                <span>London UK</span>
            </div>

            <div class="p-d-flex p-jc-between p-as-stretch p-px-3 p-mt-6 p-mb-3">
                <div class="p-d-flex p-flex-column p-ai-center">
                    <span>FRIENDS</span>
                    <span class="fs-large p-text-bold indigo-color p-mt-2">660</span>
                </div>
                <div class="p-d-flex p-flex-column p-ai-center">
                    <span>COMMENTS</span>
                    <span class="fs-large p-text-bold indigo-color p-mt-2">98K</span>
                </div>
                <div class="p-d-flex p-flex-column p-ai-center">
                    <span>PROJECTS</span>
                    <span class="fs-large p-text-bold indigo-color p-mt-2">51</span>
                </div>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-6 p-mb-4">
        <div class="card widget-overlay p-mt-5 height-100">
            <div class="overlay-header p-p-3">
                <Chart type="line" :data="chartData" :options="chartOptions" responsive="true"></Chart>
            </div>
            <div class="p-d-flex p-flex-column p-jc-center p-ai-center">
                <span class="fs-xlarge p-mb-1 cyan-color p-text-bold">5.758</span>
                <span class="p-mb-3 muted-text">Daily Users</span>
                <i class="pi pi-users p-p-3 cyan-bgcolor white-color rounded-circle fs-xlarge"></i>
            </div>
        </div>
    </div>

    <div class="p-col-12 p-md-6 p-mb-4">
        <div class="card widget-overlay p-mt-5 height-100">
            <div class="overlay-header">
                <img src="assets/layout/images/widgets/image-blog.jpg" alt="image-blog" style="width: 100%; height: 100%;">
            </div>
            <div class="p-d-flex p-flex-column p-jc-center p-ai-center">
                <h4>A New Headquarters</h4>
                <span class="p-mb-3 cyan-bgcolor white-color p-p-2">Corporate News</span>
                <span class="p-text-center muted-text description">The decision has been made. To mark the beginning of a new chapter in its history, Ultima will move from the Quartier in Tokyo to a new location in Hong Kong. The new location – near the airport – reflects the requirements of an internationally active brand. New Office concepts provide modern way of close collaboration.</span>
            </div>
            <div class="p-d-flex p-ai-center p-mt-4">
                <Button type="button" label="Learn More" icon="pi pi-plus-circle" class="p-button-text p-button-plain"></button>
                <Button type="button" icon="pi pi-share-alt" class="p-button-rounded p-button-text" :class="{'p-ml-auto': !isRTL, 'p-mr-auto': isRTL}"></button>
                <Button type="button" icon="pi pi-heart" class="p-button-rounded p-button-text"></button>
            </div>
        </div>
    </div>

	</div>
</template>

<script>
	export default {
		name: "Widgets",
        inject: ['overviewChartData5', 'overviewChartData6', 'overviewChartData7', 'overviewChartData8', 'overviewChartOptions2', 'chartData', 'chartOptions'],
		data() {
			return {
				items: [
					{label: 'Update', icon: 'pi pi-fw pi-refresh'},
					{label: 'Edit', icon: 'pi pi-fw pi-pencil'}
				],
			}
		},
		methods: {
			toggleMenu(event) {
				this.$refs.menu.toggle(event);
			},
		},
        computed: {
            isRTL() {
				return this.$appState.RTL;
			}
        }
	}
</script>

<style scoped>

</style>
