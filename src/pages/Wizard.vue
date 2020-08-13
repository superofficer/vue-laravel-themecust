<template>
	<div class="wizard-body">
		<div class="wizard-wrapper">
			<div class="wizard-topbar">
				<div class="logo"></div>
				<div class="profile">
					<div class="profile-text">
						<h1>Welcome to Ultima</h1>
						<p>Please complete steps to register</p>
					</div>
					<img class="profile-image" src="assets/layout/images/extensions/flag-us@2x.png" alt="ultima-layout"/>
				</div>
			</div>

			<div class="wizard-content">
				<div class="wizard-card">
					<div class="wizard-card-header">
						<div class="p-grid p-col">
							<div :class="['p-col-4 tab register-tab', {'selected-tab': activeTab === 'register'}]" @click="activeTab = 'register'">
								<div class="icon">
									<i class="pi pi-sign-in"></i>
								</div>
								<div class="title">REGISTER</div>
							</div>
							<div :class="['p-col-4 tab tier-tab', {'selected-tab': activeTab === 'tier'}]" @click="activeTab = 'tier'">
								<div class="icon">
									<i class="pi pi-clone"></i>
								</div>
								<div class="title">CHOOSE TIER</div>
							</div>
							<div :class="['p-col-4 tab payment-tab', {'selected-tab': activeTab === 'payment'}]" @click="activeTab = 'payment'">
								<div class="icon">
									<i class="pi pi-shopping-cart"></i>
								</div>
								<div class="title">PAYMENT</div>
							</div>
							<div :class="['tab-bar', {'tab-bar-register': activeTab === 'register', 'tab-bar-tier': activeTab === 'tier', 'tab-bar-payment': activeTab === 'payment'}]"></div>
						</div>
					</div>

					<div :class="['wizard-card-content register', {'active-content': activeTab === 'register'}]">
						<div class="p-grid">
							<div class="p-col-12 p-lg-6">
								<h1>ESSENTIAL INFORMATION</h1>
								<div class="forms">
									<div class="p-inputgroup">
										<span class="p-inputgroup-addon">
											<i class="pi pi-user"></i>
										</span>
										<InputText placeholder="Username" v-model="name"/>
									</div>
									<div class="p-inputgroup">
										<span class="p-inputgroup-addon">
											<i class="pi pi-user"></i>
										</span>
										<InputText placeholder="Email" v-model="email"/>
									</div>
									<div class="p-inputgroup">
										<span class="p-inputgroup-addon">
											<i class="pi pi-sign-in"></i>
										</span>
										<InputText placeholder="Password" v-model="password"/>
									</div>
								</div>
							</div>
							<div class="p-col-12 p-lg-6">
								<h1>OPTIONAL</h1>
								<div class="forms">
									<Dropdown id="timezone" optionLabel="label" placeholder="Select Time Zone" style="margin-bottom: 10px" :options="dropdownOptions" v-model="dropdownTime"></Dropdown>

									<div class="calendar">
										<Calendar id="calendar" appendTo="body" placeholder="Birthdate" :showIcon="true" v-model="date"></Calendar>
									</div>

									<Dropdown id="ultima" optionLabel="label" placeholder="Where did you hear Ultima?" appendTo="body" :options="dropdownOptions2" v-model="dropdownHear"></Dropdown>
								</div>
							</div>

							<div class="p-col-12">
								<Button class="continue-button" label="CONTINUE" @click="activeTab = 'tier'"/>
							</div>
						</div>
					</div>

					<div :class="['wizard-card-content tier', {'active-content': activeTab === 'tier'}]">
						<div class="p-grid">
							<div class="p-col-12 p-md-6 p-lg-4">
								<div class="card basic">
									<div class="card-header">
										<div class="p-grid">
											<div class="p-col-8">
												<h1>BASIC</h1>
											</div>
											<div class="p-col-4">
												<h1>$5</h1>
												<span>/m</span>
											</div>
										</div>
									</div>
									<div class="card-content">
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Responsive</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Push Messages</div>
										</div>
										<div class="p-col-12 tier-button-wrapper">
											<Button class="tier-button basic" label="BASIC" @click="activeCard = 'basic', activeTab = 'payment'"/>
										</div>
									</div>
								</div>
							</div>
							<div class="p-col-12 p-md-6 p-lg-4">
								<div class="card pro">
									<div class="card-header">
										<div class="p-grid">
											<div class="p-col-7">
												<h1>PRO</h1>
											</div>
											<div class="p-col-5">
												<h1>$25</h1>
												<span>/m</span>
											</div>
										</div>
									</div>
									<div class="card-content">
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Responsive</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Push Messages</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">7/24 Support</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Free Shipping</div>
										</div>
										<div class="p-col-12 tier-button-wrapper">
											<Button class="tier-button pro" label="SELECT PRO" @click="activeCard = 'pro', activeTab = 'payment'"/>
										</div>
									</div>
								</div>
							</div>
							<div class="p-col-12 p-md-6 p-lg-4">
								<div class="card pro-plus">
									<div class="card-header">
										<div class="p-grid">
											<div class="p-col-7">
												<h1>PRO+</h1>
											</div>
											<div class="p-col-5">
												<h1>$50</h1>
												<span>/m</span>
											</div>
										</div>
									</div>
									<div class="card-content">
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Responsive</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Push Messages</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">7/24 Support</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Free Shipping</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Unlimited BW</div>
										</div>
										<div class="card-row p-grid">
											<div class="p-col-3">
												<i class="pi pi-fw pi-check"></i>
											</div>
											<div class="p-col-9">Special Gift Cards</div>
										</div>
										<div class="p-col-12 tier-button-wrapper">
											<Button class="tier-button pro-plus" label="SELECT PRO+" @click="activeCard = 'pro-plus', activeTab = 'payment'"/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div :class="['wizard-card-content payment', {'active-content': activeTab === 'payment'}]">
						<div class="p-grid p-nogutter">
							<div class="p-lg-8 p-col-12 payment-info">
								<div class="p-grid p-col" id="customPanel">
									<div class="p-col-1 p-lg-1 p-md-1" style="line-height: 2em">
										<RadioButton id="credit" name="group1" value="Credit" v-model="group1" />
									</div>
									<div class="p-col-11 p-lg-5 p-md-5">
										<div class="credits">
											<img src="assets/layout/images/extensions/asset-mastercard.svg" alt="ultima-layout"/>
											<img src="assets/layout/images/extensions/asset-visa.svg" alt="ultima-layout"/>
											<img src="assets/layout/images/extensions/asset-amex.svg" alt="ultima-layout"/>
										</div>
									</div>
									<div class="p-col-1 p-lg-1 p-md-1" style="line-height: 2em">
										<RadioButton id="paypal" name="group1" value="Paypal" v-model="group1" />
									</div>
									<div class="p-col-11 p-lg-5 p-md-5">
										<div class="paypal">
											<img src="assets/layout/images/extensions/asset-paypal.svg" alt="ultima-layout"/>
										</div>
									</div>
								</div>

								<div class="p-grid p-col">
									<div class="p-col-12">
										<span class="p-float-label">
											<InputText id="cardHolder" type="text" v-model="cardHolder"/>
											<label for="cardHolder">Card Holder Name</label>
										</span>
									</div>
								</div>
								<div class="p-grid p-col">
									<div class="p-col-6">
										<span class="p-float-label">
											<InputText id="cardNo" type="text" v-model="cardNo"/>
											<label for="cardNo">Card No</label>
										</span>
									</div>
									<div class="p-col-3">
										<span class="p-float-label">
											<InputText id="cardDate" type="text" v-model="cardDate"/>
											<label for="cardDate">Date</label>
										</span>
									</div>
									<div class="p-col-3">
										<span class="p-float-label">
											<InputText id="cardCCV" type="text" v-model="cardCCV"/>
											<label for="cardCCV">CCV</label>
										</span>
									</div>
								</div>

								<div class="p-grid p-col check-info" style="margin-left: 0">
									<Checkbox id="cb1" v-model="checked" :binary="true"></Checkbox>
									<label htmlFor="cb1" class="p-checkbox-label">Save credit card information for future usage</label>
								</div>
							</div>

							<div class="p-lg-4 p-col-12 order-info">
								<div class="p-grid p-col">
									<div class="p-col-12">
										<h1>ORDER SUMMARY</h1>
									</div>
								</div>

								<div :class="['order order-default', {'selected-order': activeCard === ''}]">
									<div class="p-grid p-col">
										<div class="p-col-8">Tier - </div>
										<div class="p-col-4 price">$0.00</div>
										<div class="p-col-8">VAT (%18)</div>
										<div class="p-col-4 price">$0.00</div>
									</div>
									<div class="p-grid p-col total">
										<div class="p-col-8">Total</div>
										<div class="p-col-4 price">$0.00</div>
										<div class="p-col-12">
											Please select one tier.
										</div>
									</div>
								</div>
								<div :class="['order order-basic', {'selected-order': activeCard === 'basic'}]">
									<div class="p-grid p-col">
										<div class="p-col-8">Tier - Basic</div>
										<div class="p-col-4 price">$5.00</div>
										<div class="p-col-8">VAT (%18)</div>
										<div class="p-col-4 price">$0.90</div>
									</div>
									<div class="p-grid p-col total">
										<div class="p-col-8">Total</div>
										<div class="p-col-4 price">$5.90</div>
										<div class="p-col-12">
											<Button type="button" label="CONFIRM ORDER" class="buy-button"/>
										</div>
									</div>
								</div>
								<div :class="['order order-pro', {'selected-order': activeCard === 'pro'}]">
									<div class="p-grid p-col">
										<div class="p-col-8">Tier - Pro</div>
										<div class="p-col-4 price">$25.00</div>
										<div class="p-col-8">VAT (%18)</div>
										<div class="p-col-4 price">$4.50</div>
									</div>
									<div class="p-grid p-col total">
										<div class="p-col-8">Total</div>
										<div class="p-col-4 price">$29.50</div>
										<div class="p-col-12">
											<Button type="button" label="CONFIRM ORDER" class="buy-button"/>
										</div>
									</div>
								</div>
								<div :class="['order order-pro-plus', {'selected-order': activeCard === 'pro-plus'}]">
									<div class="p-grid p-col">
										<div class="p-col-8">Tier - Pro+</div>
										<div class="p-col-4 price">$50.00</div>
										<div class="p-col-8">VAT (%18)</div>
										<div class="p-col-4 price">$9.00</div>
									</div>
									<div class="p-grid p-col total">
										<div class="p-col-8">Total</div>
										<div class="p-col-4 price">$59.00</div>
										<div class="p-col-12">
											<Button type="button" label="CONFIRM ORDER" class="buy-button"/>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				activeTab: 'register',
				dropdownOptions: [
					{label: 'UTC-12.00', value: {id: 1, name: 'UTC-12.00', code: '-12'}},
					{label: 'UTC-11.00', value: {id: 2, name: 'UTC-11.00', code: '-11'}},
					{label: 'UTC-10.00', value: {id: 3, name: 'UTC-10.00', code: '-10'}},
					{label: 'UTC-09.30', value: {id: 4, name: 'UTC-09.30', code: '-93'}},
					{label: 'UTC-09.00', value: {id: 5, name: 'UTC-09.00', code: '-09'}},
					{label: 'UTC-08.00', value: {id: 6, name: 'UTC-08.00', code: '-08'}},
					{label: 'UTC-07.00', value: {id: 7, name: 'UTC-07.00', code: '-07'}},
					{label: 'UTC-06.00', value: {id: 8, name: 'UTC-06.00', code: '-06'}},
					{label: 'UTC-05.00', value: {id: 9, name: 'UTC-05.00', code: '-05'}},
					{label: 'UTC-04.00', value: {id: 10, name: 'UTC-04.00', code: '-04'}},
					{label: 'UTC-03.30', value: {id: 11, name: 'UTC-03.30', code: '-33'}},
					{label: 'UTC-03.00', value: {id: 12, name: 'UTC-03.00', code: '-03'}},
					{label: 'UTC-02.00', value: {id: 13, name: 'UTC-02.00', code: '-02'}},
					{label: 'UTC-01.00', value: {id: 14, name: 'UTC-01.00', code: '-01'}},
					{label: 'UTC-+00.00', value: {id: 15, name: 'UTC-+00.00', code: '-00'}},
					{label: 'UTC+01.00', value: {id: 16, name: 'UTC+01.00', code: '+01'}},
					{label: 'UTC+02.00', value: {id: 17, name: 'UTC+02.00', code: '+02'}},
					{label: 'UTC+03.00', value: {id: 18, name: 'UTC+03.00', code: '+03'}},
					{label: 'UTC+03.30', value: {id: 19, name: 'UTC+03.30', code: '+33'}},
					{label: 'UTC+04.00', value: {id: 20, name: 'UTC+04.00', code: '+04'}},
					{label: 'UTC+04.30', value: {id: 21, name: 'UTC+04.30', code: '+43'}},
					{label: 'UTC+05.00', value: {id: 22, name: 'UTC+05.00', code: '+05'}},
					{label: 'UTC+05.30', value: {id: 23, name: 'UTC+05.30', code: '+53'}},
					{label: 'UTC+05.45', value: {id: 24, name: 'UTC+05.45', code: '+54'}},
					{label: 'UTC+06.00', value: {id: 25, name: 'UTC+06.00', code: '+06'}},
					{label: 'UTC+06.30', value: {id: 26, name: 'UTC+06.30', code: '+63'}},
					{label: 'UTC+07.00', value: {id: 27, name: 'UTC+07.00', code: '+07'}},
					{label: 'UTC+08.00', value: {id: 28, name: 'UTC+08.00', code: '+08'}},
					{label: 'UTC+08.45', value: {id: 29, name: 'UTC+08.45', code: '+84'}},
					{label: 'UTC+09.00', value: {id: 30, name: 'UTC+09.00', code: '+09'}},
					{label: 'UTC+09.30', value: {id: 31, name: 'UTC+09.30', code: '+93'}},
					{label: 'UTC+10.00', value: {id: 32, name: 'UTC+10.00', code: '+10'}},
					{label: 'UTC+10.30', value: {id: 33, name: 'UTC+10.30', code: '+13'}},
					{label: 'UTC+11.00', value: {id: 34, name: 'UTC+01.00', code: '+11'}},
					{label: 'UTC+12.00', value: {id: 35, name: 'UTC+01.00', code: '+12'}},
					{label: 'UTC+12.45', value: {id: 36, name: 'UTC+01.00', code: '+24'}},
					{label: 'UTC+13.00', value: {id: 37, name: 'UTC+01.00', code: '+13'}},
					{label: 'UTC+14.00', value: {id: 38, name: 'UTC+01.00', code: '+14'}},
				],
				dropdownTime: null,
				date: null,
				dropdownOptions2: [
					{label: 'Blogs', value: 'Blogs'},
					{label: 'Google Ads', value: 'google'},
					{label: 'Your Forum', value: 'prime-forum'},
					{label: 'Youtube', value: 'Youtube'},
					{label: 'Reddit', value: 'Reddit'},
					{label: 'Events', value: 'Events'},
					{label: 'Other', value: 'Other'}
				],
				dropdownHear: null,
				activeCard: '',
				checked: false,
				group1: null,
				name: '',
				email: '',
				password: '',
				cardHolder: '',
				cardNo: '',
				cardDate: '',
				cardCCV: ''
			}
		}
	}
</script>

<style scoped>

</style>
