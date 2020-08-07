<template>
	<div class="p-grid dashboard">
		<div class="p-col-12 p-md-4">
			<div class="card overview">
				<div class="overview-content clearfix">
					<span class="overview-title">Sales</span>
					<span class="overview-badge">+%90</span>
					<span class="overview-detail">$22,650 / week</span>
				</div>
				<div class="overview-footer">
					<img src="assets/layout/images/dashboard/sales.svg" style="width: 100%" alt="Sales"/>
				</div>
			</div>
		</div>
		<div class="p-col-12 p-md-4">
			<div class="card overview">
				<div class="overview-content clearfix">
					<span class="overview-title">Views</span>
					<span class="overview-badge">+%60</span>
					<span class="overview-detail">6,520 / day</span>
				</div>
				<div class="overview-footer">
					<img src="assets/layout/images/dashboard/views.svg" style="width: 100%" alt="Views"/>
				</div>
			</div>
		</div>
		<div class="p-col-12 p-md-4">
			<div class="card overview">
				<div class="overview-content clearfix">
					<span class="overview-title">Users</span>
					<span class="overview-badge">+%45</span>
					<span class="overview-detail">5,200 / day</span>
				</div>
				<div class="overview-footer">
					<img src="assets/layout/images/dashboard/progress.svg" style="width: 100%" alt="Progress"/>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="p-grid card colorbox colorbox-1">
				<div class="p-col-4">
					<i class="pi pi-check-circle"></i>
				</div>
				<div class="p-col-8">
					<span class="colorbox-name">Tasks</span>
					<span class="colorbox-count">50</span>
				</div>
			</div>
		</div>
		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="p-grid card colorbox colorbox-2">
				<div class="p-col-4">
					<i class="pi pi-shopping-cart"></i>
				</div>
				<div class="p-col-8">
					<span class="colorbox-name">Purchases</span>
					<span class="colorbox-count">1200</span>
				</div>
			</div>
		</div>
		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="p-grid card colorbox colorbox-3">
				<div class="p-col-4">
					<i class="pi pi-exclamation-circle"></i>
				</div>
				<div class="p-col-8">
					<span class="colorbox-name">Issues</span>
					<span class="colorbox-count">22</span>
				</div>
			</div>
		</div>
		<div class="p-col-12 p-md-6 p-lg-3">
			<div class="p-grid card colorbox colorbox-4">
				<div class="p-col-4">
					<i class="pi pi-envelope"></i>
				</div>
				<div class="p-col-8">
					<span class="colorbox-name">Messages</span>
					<span class="colorbox-count">10</span>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-6 p-lg-4 task-list">
			<Panel header="Tasks">
				<ul>
					<li>
						<Checkbox name="task" value="reports" v-model="tasksCheckbox"/>
						<span class="task-name">Sales Reports</span>
						<i class="pi pi-briefcase"></i>
					</li>
					<li>
						<Checkbox name="task" value="pay" v-model="tasksCheckbox"/>
						<span class="task-name">Pay Invoices</span>
						<i class="pi pi-file"></i>
					</li>
					<li>
						<Checkbox name="task" value="dinner" v-model="tasksCheckbox"/>
						<span class="task-name">Dinner with Tony</span>
						<i class="pi pi-comments"></i>
					</li>
					<li>
						<Checkbox name="task" value="meeting" v-model="tasksCheckbox"/>
						<span class="task-name">Client Meeting</span>
						<i class="pi pi-users"></i>
					</li>
					<li>
						<Checkbox name="task" value="theme" v-model="tasksCheckbox"/>
						<span class="task-name">New Theme</span>
						<i class="pi pi-palette"></i>
					</li>
					<li>
						<Checkbox name="task" value="ticket" v-model="tasksCheckbox"/>
						<span class="task-name">Flight Ticket</span>
						<i class="pi pi-ticket"></i>
					</li>
				</ul>
			</Panel>
		</div>
		<div class="p-col-12 p-md-6 p-lg-4 p-fluid contact-form">
			<Panel header="Contact Us">
				<div class="p-grid">
					<div class="p-col-12">
						<Dropdown v-model="dropdownCity" :options="dropdownCities" optionLabel="name" placeholder="Select a City"/>
					</div>
					<div class="p-col-12">
						<InputText type="text" placeholder="Name"/>
					</div>
					<div class="p-col-12">
						<InputText type="text" placeholder="Age"/>
					</div>
					<div class="p-col-12">
						<InputText type="text" placeholder="Email"/>
					</div>
					<div class="p-col-12">
						<Button type="button" label="Send" icon="pi pi-check"/>
					</div>
				</div>
			</Panel>
		</div>
		<div class="p-col-12 p-lg-4 contacts">
			<Panel header="Contacts">
				<ul>
					<li>
						<button class="p-link">
							<img src="assets/layout/images/avatar1.png" width="45" alt="avatar1"/>
							<span class="name">Joshua Williams</span>
							<span class="email">joshua@pf-ultima.com</span>
						</button>
					</li>
					<li>
						<button class="p-link">
							<img src="assets/layout/images/avatar2.png" width="45" alt="avatar2"/>
							<span class="name">Emily Clark</span>
							<span class="email">emily@pf-ultima.com</span>
						</button>
					</li>
					<li>
						<button class="p-link">
							<img src="assets/layout/images/avatar3.png" width="45" alt="avatar3"/>
							<span class="name">Susan Johnson</span>
							<span class="email">susan@pf-ultima.com</span>
						</button>
					</li>
					<li>
						<button class="p-link">
							<img src="assets/layout/images/avatar4.png" width="45" alt="avatar4"/>
							<span class="name">Kelly Stark</span>
							<span class="email">kelly@pf-ultima.com</span>
						</button>
					</li>
				</ul>
			</Panel>
		</div>

		<div class="p-col-12 p-md-4">
			<div class="card timeline p-fluid">
				<div class="p-grid">
					<div class="p-col-3">
						<span class="event-time">just now</span>
						<i class="pi pi-map-marker" style="color:#009688"></i>
					</div>
					<div class="p-col-9">
						<span class="event-owner" style="color:#009688">Katherine May</span>
						<span class="event-text">Lorem ipsun dolor amet</span>
						<div class="event-content">
							<img src="assets/layout/images/dashboard/md.png" alt="md"/>
						</div>
					</div>

					<div class="p-col-3">
						<span class="event-time">12h ago</span>
						<i class="pi pi-star-o" style="color:#E91E63"></i>
					</div>
					<div class="p-col-9">
						<span class="event-owner" style="color:#E91E63">Brandon Santos</span>
						<span class="event-text">Ab nobis, magnam sunt eum. Laudantium, repudiandae, similique!.</span>
					</div>

					<div class="p-col-3">
						<span class="event-time">15h ago</span>
						<i class="pi pi-comment" style="color:#9c27b0"></i>
					</div>
					<div class="p-col-9">
						<span class="event-owner" style="color:#9c27b0">Stephan Ward</span>
						<span class="event-text">Omnis veniam quibusdam ratione est repellat qui nam quisquam ab mollitia dolores ullam voluptates, similique, dignissimos.</span>
					</div>

					<div class="p-col-3">
						<span class="event-time">2d ago</span>
						<i class="pi pi-globe" style="color:#ff9800"></i>
					</div>
					<div class="p-col-9">
						<span class="event-owner" style="color:#ff9800">Jason Smith</span>
						<span class="event-text">Laudantium, repudiandae, similique!</span>
						<div class="event-content">
							<img src="assets/layout/images/dashboard/map.png" alt="map"/>
						</div>
					</div>

					<div class="p-col-3">
						<span class="event-time">1w ago</span>
						<i class="pi pi-heart" style="color:#607d8b"></i>
					</div>
					<div class="p-col-9">
						<span class="event-owner">Kevin Cox</span>
						<span class="event-text">Quibusdam ratione est repellat qui nam quisquam veniam quibusdam ratione.</span>
					</div>

					<div class="p-col-3">
						<span class="event-time">2w ago</span>
						<i class="pi pi-compass" style="color:#FFC107"></i>
					</div>
					<div class="p-col-9">
						<span class="event-owner" style="color:#FFC107">Walter White</span>
						<span class="event-text">I am the one who knocks!</span>
					</div>

					<div class="p-col-12">
						<Button type="button" label="Refresh" icon="pi pi-refresh"></Button>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-8">
			<div class="card">
				<DataTable :value="products" class="p-datatable-customers" :rows="5" style="margin-bottom: 20px" :paginator="true">
					<Column>
						<template #header>
							Logo
						</template>
						<template #body="slotProps">
							<img :src="'assets/demo/images/product/' + slotProps.data.image" :alt="slotProps.data.image" width="50px" />
						</template>
					</Column>
					<Column field="name" header="Name" sortable></Column>
					<Column field="category" header="Category" sortable></Column>
					<Column field="price" header="Price" sortable>
						<template #body="slotProps">
							{{formatCurrency(slotProps.data.price)}}
						</template>
					</Column>
					<Column>
						<template #header>
							View
						</template>
						<template #body>
							<Button icon="pi pi-search" type="button" class="p-button-success p-mr-2 p-mb-1"></Button>
							<Button icon="pi pi-times" type="button" class="p-button-danger p-mb-1"></Button>
						</template>
					</Column>
				</DataTable>

				<Panel header="Sales Graph">
					<Chart type="line" :data="chartData"/>
				</Panel>
			</div>
		</div>

		<div class="p-col-12 p-md-8">
			<Panel header="Calendar" style="height:100%">
				<FullCalendar  :events="events" :options="fullcalendarOptions" />
			</Panel>
		</div>
		<div class="p-col-12 p-md-4">
			<Panel header="Activity" style="height:100%">
			<div class="activity-header">
				<div class="p-grid">
					<div class="p-col-6">
						<span style="font-weight:bold">Last Activity</span>
						<p>Updated 1 minute ago</p>
					</div>
					<div class="p-col-6" style="text-align:right">
						<Button label="Update" icon="pi pi-refresh"></Button>
					</div>
				</div>
			</div>
			<ul class="activity-list">
				<li>
					<div class="p-grid">
						<div class="count">$900</div>
					</div>
					<div class="p-grid" style="margin-top:0">
						<div class="p-col-6">Income</div>
						<div class="p-col-6">95%</div>
					</div>
				</li>
				<li>
					<div class="p-grid">
						<div class="count" style="background-color:#ffc107">$250</div>
					</div>
					<div class="p-grid" style="margin-top:0">
						<div class="p-col-6">Tax</div>
						<div class="p-col-6">24%</div>
					</div>
				</li>
				<li>
					<div class="p-grid">
						<div class="count" style="background-color:#673AB7">$125</div>
					</div>
					<div class="p-grid" style="margin-top:0">
						<div class="p-col-6">Invoices</div>
						<div class="p-col-6">55%</div>
					</div>
				</li>
				<li>
					<div class="p-grid">
						<div class="count" style="background-color:#00bcd4">$250</div>
					</div>
					<div class="p-grid" style="margin-top:0">
						<div class="p-col-6">Expenses</div>
						<div class="p-col-6">15%</div>
					</div>
				</li>
				<li>
					<div class="p-grid">
						<div class="count" style="background-color:#607D8B">$350</div>
					</div>
					<div class="p-grid" style="margin-top:0">
						<div class="p-col-6">Bonus</div>
						<div class="p-col-6">5%</div>
					</div>
				</li>
				<li>
					<div class="p-grid">
						<div class="count" style="background-color:#FF5722">$500</div>
					</div>
					<div class="p-grid" style="margin-top:0">
						<div class="p-col-6">Revenue</div>
						<div class="p-col-6">25%</div>
					</div>
				</li>
			</ul>
			</Panel>
		</div>
	</div>


</template>

<script>
import ProductService from '../service/ProductService';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

export default {
	data() {
		return {
			tasksCheckbox: [],
			dropdownCities: [
				{name: 'New York', code: 'NY'},
				{name: 'Rome', code: 'RM'},
				{name: 'London', code: 'LDN'},
				{name: 'Istanbul', code: 'IST'},
				{name: 'Paris', code: 'PRS'}
			],
			dropdownCity: null,
			name: '',
			age: '',
			message: '',
			products: null,
			chartData: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [
					{
						label: 'First Dataset',
						data: [65, 59, 80, 81, 56, 55, 40],
						fill: false,
						borderColor: '#4bc0c0'
					},
					{
						label: 'Second Dataset',
						data: [28, 48, 40, 19, 86, 27, 90],
						fill: false,
						borderColor: '#565656'
					}
				]
			},
			events: [
				{
					"id": 1,
					"title": "All Day Event",
					"start": "2017-02-01"
				},
				{
					"id": 2,
					"title": "Long Event",
					"start": "2017-02-07",
					"end": "2017-02-10"
				},
				{
					"id": 3,
					"title": "Repeating Event",
					"start": "2017-02-09T16:00:00"
				},
				{
					"id": 4,
					"title": "Repeating Event",
					"start": "2017-02-16T16:00:00"
				},
				{
					"id": 5,
					"title": "Conference",
					"start": "2017-02-11",
					"end": "2017-02-13"
				},
				{
					"id": 6,
					"title": "Meeting",
					"start": "2017-02-12T10:30:00",
					"end": "2017-02-12T12:30:00"
				},
				{
					"id": 7,
					"title": "Lunch",
					"start": "2017-02-12T12:00:00"
				},
				{
					"id": 8,
					"title": "Meeting",
					"start": "2017-02-12T14:30:00"
				},
				{
					"id": 9,
					"title": "Happy Hour",
					"start": "2017-02-12T17:30:00"
				},
				{
					"id": 10,
					"title": "Dinner",
					"start": "2017-02-12T20:00:00"
				},
				{
					"id": 11,
					"title": "Birthday Party",
					"start": "2017-02-13T07:00:00"
				},
				{
					"id": 12,
					"title": "Click for Google",
					"url": "http://google.com/",
					"start": "2017-02-28"
				}
			],
			fullcalendarOptions: {
				plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
				defaultView: 'dayGridMonth',
				defaultDate: '2017-02-01',
				header: {
					left: 'prev,next',
					center: 'title',
					right: ''
				},
				editable: true
			}
		}
	},
	productService: null,
	created() {
		this.productService = new ProductService();
	},
	mounted() {
		this.productService.getProductsSmall().then(data => this.products = data);
	},
	methods: {
		formatCurrency(value) {
			return value.toLocaleString('en-US', {style: 'currency', currency: 'USD'});
		}
	}
}
</script>

<style lang="scss" scoped>
	@media screen and (max-width: 960px) {
		/deep/ .p-datatable {
			&.p-datatable-customers {
				.p-datatable-thead > tr > th,
				.p-datatable-tfoot > tr > td {
					display: none !important;
				}

				.p-datatable-tbody > tr {
					border-bottom: 1px solid #dee2e6;
					> td {
						text-align: left;
						display: flex;
						align-items: center;
						justify-content: center;
						border: 0 none !important;
						width: 100% !important;
						float: left;
						clear: left;
						border: 0 none;

						.p-column-title {
							padding: .4rem;
							min-width: 30%;
							display: inline-block;
							margin: -.4rem 1rem -.4rem -.4rem;
							font-weight: bold;
						}

						.p-progressbar {
							margin-top: .5rem;
						}
					}
				}
			}
		}
	}
</style>
