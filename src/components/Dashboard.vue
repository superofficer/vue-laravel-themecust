<template>
<div class="dashboard">
	<div class="p-grid dashboard-grid">
		<div class="p-col-12 p-sm-6 p-xl-4 overview-box monthly-sales">
			<div class="card">
				<div class="card-title">Monthly Sales</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam sed purus non
					porta. </p>
				<img src="assets/layout/images/dashboard/asset-stats.svg" alt="sapphire"/>
			</div>
		</div>
		<div class="p-col-12 p-sm-6 p-xl-4 overview-box total-views">
			<div class="card">
				<div class="card-title">Total Views</div>
				<div class="overview-numbers">26520 / day</div>
				<img src="assets/layout/images/dashboard/asset-graph.svg" alt="sapphire"/>
			</div>
		</div>

		<div class="p-col-12 p-xl-4 overview-box connections">
			<div class="card">
				<div class="card-title">Connections</div>
				<div class="overview-numbers">2,449,570</div>
				<div class="p-grid">
					<div class="p-col-4 connection-chart">
						<img src="assets/layout/images/dashboard/asset-connectiongraph.svg" alt="sapphire"/>
					</div>
					<div class="p-col-8 connection-chart-legend">
						<div class="p-grid">
							<div class="p-col-6"><span class="dot dot-green"></span>Online</div>
							<div class="p-col-6"><span>644,421</span> <i class="legend-arrow material-icons">arrow_drop_up</i></div>

							<div class="p-col-6"><span class="dot dot-red"></span>Offline</div>
							<div class="p-col-6">537,777 <i class="legend-arrow material-icons">arrow_drop_up</i></div>

							<div class="p-col-6"><span class="dot dot-orange"></span>Pending</div>
							<div class="p-col-6">570,099 <i class="legend-arrow material-icons">arrow_drop_up</i></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-md-3 summary-box summary-box-messages">
			<div class="card">
				<div class="summary-box-title">Messages</div>
				<p>152</p>
				<img src="assets/layout/images/dashboard/icon-messages.svg" alt="sapphire" class="summary-box-icon"/>
				<img src="assets/layout/images/dashboard/graph-messages.svg" alt="sapphire" class="summary-box-graph"/>
			</div>
		</div>

		<div class="p-col-12 p-md-3 summary-box summary-box-checkins">
			<div class="card">
				<div class="summary-box-title">Checkins</div>
				<p>532</p>
				<img src="assets/layout/images/dashboard/icon-checkins.svg" alt="sapphire" class="summary-box-icon"/>
				<img src="assets/layout/images/dashboard/graph-checkins.svg" alt="sapphire" class="summary-box-graph"/>
			</div>
		</div>

		<div class="p-col-12 p-md-3 summary-box summary-box-filessynced">
			<div class="card">
				<div class="summary-box-title">Files Synced</div>
				<p>28</p>
				<img src="assets/layout/images/dashboard/icon-filessynced.svg" alt="sapphire" class="summary-box-icon"/>
				<img src="assets/layout/images/dashboard/graph-filessynced.svg" alt="sapphire" class="summary-box-graph"/>
			</div>
		</div>

		<div class="p-col-12 p-md-3 summary-box summary-box-usersonline">
			<div class="card">
				<div class="summary-box-title">Users Online</div>
				<p>256</p>
				<img src="assets/layout/images/dashboard/icon-usersonline.svg" alt="sapphire" class="summary-box-icon"/>
				<img src="assets/layout/images/dashboard/graph-usersonline.svg" alt="sapphire" class="summary-box-graph"/>
			</div>
		</div>

		<div class="p-col-12 p-lg-6">
			<div class="tasks card">
				<div class="tasks-progress">
					<div class="tasks-progress-value"></div>
				</div>
				<div class="tasks-header">
					You have <span class="task-number">4</span> Pending Tasks.
				</div>
				<ul>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<Checkbox name="task" value="reports" v-model="tasksCheckbox" />
							</div>
							<div class="p-col">
								<div class="task-content">
									<div class="task-name">Sales Report</div>
									<div class="tasks-detail">Assigned by James Harrison</div>

								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<i class="material-icons">favorite</i>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<Checkbox name="task" value="invoices" v-model="tasksCheckbox" />
							</div>
							<div class="p-col">
								<div class="task-content">
									<div class="task-name">Pay Invoices</div>
									<div class="tasks-detail">Assigned by Jane Davidson</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<i class="material-icons">favorite</i>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<Checkbox name="task" value="meeting" v-model="tasksCheckbox" />
							</div>
							<div class="p-col">
								<div class="task-content">
									<div class="task-name">Customer Meeting</div>
									<div class="tasks-detail">Assigned by Sarah Williams</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<i class="material-icons">favorite</i>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<Checkbox name="task" value="expense" v-model="tasksCheckbox" />
							</div>
							<div class="p-col">
								<div class="task-content">
									<div class="task-name">Expense Reports</div>
									<div class="tasks-detail">Assigned by James Harrison</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<i class="material-icons">favorite</i>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="p-col-12 p-lg-6">
			<div class="team card">
				<div class="card-title">Team Members</div>
				<ul>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<img src="assets/layout/images/dashboard/avatar-1.jpg" alt="sapphire"/>
							</div>
							<div class="p-col">
								<div class="member-content">
									<div class="member-name">Anne-Marije Marking</div>
									<div class="member-status">
										<div class="dot dot-red"></div>
										<span>In a meeting</span>
									</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<Button icon="pi-md-check" class="blue-btn"/>
								<Button icon="pi-md-refresh" class="orange-btn"/>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<img src="assets/layout/images/dashboard/avatar-2.jpg" alt="sapphire"/>
							</div>
							<div class="p-col">
								<div class="member-content">
									<div class="member-name">Gabriel Soares</div>
									<div class="member-status">
										<div class="dot dot-green"></div>
										<span>Online</span>
									</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<Button icon="pi-md-check" class="blue-btn"/>
								<Button icon="pi-md-refresh" class="orange-btn"/>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<img src="assets/layout/images/dashboard/avatar-3.jpg" alt="sapphire"/>
							</div>
							<div class="p-col">
								<div class="member-content">
									<div class="member-name">Hector Mariano</div>
									<div class="member-status">
										<div class="dot dot-green"></div>
										<span>Online</span>
									</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<Button icon="pi-md-check" class="blue-btn"/>
								<Button icon="pi-md-refresh" class="orange-btn"/>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-center">
								<img src="assets/layout/images/dashboard/avatar-4.jpg" alt="sapphire"/>
							</div>
							<div class="p-col">
								<div class="member-content">
									<div class="member-name">Paulina Gayoso</div>
									<div class="member-status">
										<div class="dot dot-orange"></div>
										<span>Commuting</span>
									</div>
								</div>
							</div>
							<div class="p-col-fixed p-col-align-center">
								<Button icon="pi-md-check" class="blue-btn"/>
								<Button icon="pi-md-refresh" class="orange-btn"/>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="p-col-12 p-lg-4">
			<div class="userprofile card">
				<img src="assets/layout/images/dashboard/asset-profile.jpg" alt="sapphire" class="userprofile-bg"/>
				<img src="assets/layout/images/avatar.png" alt="sapphire" class="userprofile-avatar"/>
				<div class="userprofile-name">Helena Brauer</div>
				<div class="userprofile-role">Business Management</div>

				<div class="p-grid p-nogutter userprofile-legend">
					<div class="p-col-12 p-lg-4 userprofile-completed">
						<div class="userprofile-circle"></div>
						<div class="userprofile-status">COMPLETED</div>
						<div class="userprofile-value">190</div>
					</div>
					<div class="p-col-12 p-lg-4 userprofile-snoozed">
						<div class="userprofile-circle"></div>
						<div class="userprofile-status">SNOOZED</div>
						<div class="userprofile-value">64</div>
					</div>
					<div class="p-col-12 p-lg-4 userprofile-overdue">
						<div class="userprofile-circle"></div>
						<div class="userprofile-status">OVERDUE</div>
						<div class="userprofile-value">28</div>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-8">
			<div class="quarterreport card">
				<div class="card-title">Quarter Report</div>
				<div class="dashboard-chart-container">
					<Chart type="line" :data="chartData" :options="chartOptions" style="height: 325px"/>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-6">
			<div class="p-grid controlpanel">
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">Wireless Status</div>
						<span class="switch-status">Stable</span>
						<InputSwitch v-model="checked1" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">Cooling Systems</div>
						<span class="switch-status">Stable</span>
						<InputSwitch v-model="checked2" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">HQ Security</div>
						<span class="switch-status">Offline</span>
						<InputSwitch v-model="checked3" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">Help Desk Load</div>
						<span class="switch-status">Stable</span>
						<InputSwitch v-model="checked4" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card switchpanel-off">
						<div class="switch-name">Meeting Intensity</div>
						<span class="switch-status">Critical</span>
						<InputSwitch v-model="checked5" :disabled="true"/>
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">Energy Backup</div>
						<span class="switch-status">Stable</span>
						<InputSwitch v-model="checked6" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card switchpanel-off">
						<div class="switch-name">Coffee Machine</div>
						<span class="switch-status">Offline</span>
						<InputSwitch v-model="checked7" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">Game Console</div>
						<span class="switch-status">Stable</span>
						<InputSwitch v-model="checked8" />
					</div>
				</div>
				<div class="p-col-6 p-lg-4">
					<div class="switchpanel card">
						<div class="switch-name">Network</div>
						<span class="switch-status">Stable</span>
						<InputSwitch v-model="checked9" />
					</div>
				</div>
				<div class="p-col-12">
					<div class="location card">
						<img src="assets/layout/images/dashboard/puebla.jpg" alt="sapphire"/>
						<div class="location-content">
							<div class="p-grid">
								<div class="p-col-fixed p-col-align-top">
									<div class="icon-container">
										<i class="material-icons">navigation</i>
									</div>
								</div>
								<div class="p-col">
									<div class="location-name">Puebla</div>
									<div class="location-subtitle">Where the magic happens</div>
								</div>
							</div>

							<p>Earum porro tenetur consequuntur veritatis eos vel natus quisquam.</p>
							<button class="p-link">READ MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-6">
			<div class="timeline card">
				<div class="card-title">Recent Activities</div>
				<ul>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-top">
								<div class="icon-container">
									<i class="material-icons">location_on</i>
								</div>
							</div>
							<div class="p-col">
								<div class="event-owner">Katherine May</div>
								<div class="event-detail">Lorem ipsun dolor amet</div>
								<div class="p-grid p-nogutter">
									<div class="p-col-4">
										<img src="assets/layout/images/dashboard/timeline-1.jpg" alt="sapphire"/>
									</div>
									<div class="p-col-4">
										<img src="assets/layout/images/dashboard/timeline-2.jpg" alt="sapphire"/>
									</div>
									<div class="p-col-4">
										<img src="assets/layout/images/dashboard/timeline-3.jpg" alt="sapphire"/>
									</div>
								</div>
								<span class="timeline-clock"><i class="material-icons">timer</i><span>12:30</span></span>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-top">
								<div class="icon-container">
									<i class="material-icons">airplanemode_on</i>
								</div>
							</div>
							<div class="p-col">
								<div class="event-owner">Brandon Williams</div>
								<div class="event-detail">Ab nobis, magnam sunt eum. Laudantium,
									repudiandae, similique!.
								</div>
								<span class="timeline-clock"><i class="material-icons">timer</i><span>14:39</span></span>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter">
							<div class="p-col-fixed p-col-align-top">
								<div class="icon-container">
									<i class="material-icons">verified_user</i>
								</div>
							</div>
							<div class="p-col">
								<div class="event-owner">Stephan Ward</div>
								<div class="event-detail">Omnis veniam quibusdam ratione est repellat qui
									nam quisquam ab mollitia dolores ullam voluptates, similique, dignissimos.
								</div>
								<img src="assets/layout/images/dashboard/timeline-4.jpg" alt="sapphire"/>
								<span class="timeline-clock"><i class="material-icons">timer</i><span>14:52</span></span>
							</div>
						</div>
					</li>
					<li>
						<div class="p-grid p-nogutter location">
							<div class="p-col-fixed p-col-align-top">
								<div class="icon-container">
									<i class="material-icons">image</i>
								</div>
							</div>
							<div class="p-col">
								<div class="event-owner">Lara Cohen</div>
								<div class="event-detail">Quibusdam ratione est repellat qui nam quisquam
									veniam quibusdam ratione..
								</div>
								<span class="timeline-clock"><i
										class="material-icons">timer</i><span>16:24</span></span>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="p-col-12 p-lg-4">
			<div class="weather card">
				<div class="weather-image">
					<div class="city-name">Prime City</div>
					<div class="weather-today">Snow</div>
					<div class="weather-degree">11 <span>&#8451;</span></div>
				</div>
				<div class="p-grid weekdays">
					<div class="p-col-6">Monday</div>
					<div class="p-col-6 weather-degree-col">-2
						<span>&#8451;</span><img src="assets/layout/images/dashboard/asset-weathericon-2.svg" alt="sapphire"/>
					</div>
					<div class="p-col-6">Tuesday</div>
					<div class="p-col-6 weather-degree-col">--7
						<span>&#8451;</span><img src="assets/layout/images/dashboard/asset-weathericon-3.svg" alt="sapphire"/>
					</div>
					<div class="p-col-6">Wednesday</div>
					<div class="p-col-6 weather-degree-col">2
						<span>&#8451;</span><img src="assets/layout/images/dashboard/asset-weathericon-4.svg" alt="sapphire"/>
					</div>
					<div class="p-col-6">Thursday</div>
					<div class="p-col-6 weather-degree-col">4
						<span>&#8451;</span><img src="assets/layout/images/dashboard/asset-weathericon-2.svg" alt="sapphire"/>
					</div>
					<div class="p-col-6">Friday</div>
					<div class="p-col-6 weather-degree-col">0
						<span>&#8451;</span><img src="assets/layout/images/dashboard/asset-weathericon-3.svg" alt="sapphire"/>
					</div>
				</div>

			</div>
		</div>


		<div class="p-col-12 p-lg-8">
			<div class="inventory card">
				<DataTable :value="cars" class="p-datatable-responsive" :selection.sync="selectedCar" selectionMode="single" dataKey="vin" :paginator="true" paginatorPosition="both" :rows="10">
					<template #header>
						Inventory
					</template>
					<Column field="vin" header="Vin" :sortable="true"></Column>
					<Column field="year" header="Year" :sortable="true"></Column>
					<Column field="brand" header="Brand" :sortable="true"></Column>
					<Column field="color" header="Color" :sortable="true"></Column>
				</DataTable>
			</div>
		</div>
	</div>
</div>
	
	
	

</template>

<script>
import CarService from '../service/CarService';

export default {
	data() {
		return {
			checked1: true,
			checked2: true,
			checked3: true,
			checked4: true,
			checked5: true,
			checked6: true,
			checked7: false,
			checked8: false,
			checked9: false,
			tasksCheckbox: [],
			cars: null,
			selectedCar: null,
			chartData: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: [12, 19, 3, 5, 2, 3, 9],
                    borderColor: [
                        '#4CAF50',
                    ],
                    borderWidth: 3,
                    borderDash:[5, 5],
                    fill: false,
                    pointRadius: 3
                }, {
                    label: 'Income',
                    data: [1, 2, 5, 3, 12, 7, 15],
                    backgroundColor: [
                        'rgba(187,222,251,0.2)',
                    ],
                    borderColor: [
                        '#00BCD4',
                    ],
                    borderWidth: 3,
                    fill: true
                },
                {
                    label: 'Expenses',
                    data: [7, 12, 15, 5, 3, 13, 21],
                    borderColor: [
                        '#e91e63',
                    ],
                    borderWidth: 3,
                    fill: false,
                    pointRadius: [4, 6, 4, 12, 8, 0, 4]
                },
                {
                    label: 'New Users',
                    data: [3, 7, 2, 17, 15, 13, 19],
                    borderColor: [
                        '#FF8F00',
                    ],
                    borderWidth: 3,
                    fill: false
                }]
			},
			chartOptions: {
                maintainAspectRatio: false,
                responsive: true,
                hover: {
                    mode: 'index'
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
			}
		}
	},
	carService: null,
	created() {
		this.carService = new CarService();
	},
	mounted() {
		this.carService.getCarsLarge().then(data => this.cars = data);
	},
}
</script>

<style scoped>

</style>