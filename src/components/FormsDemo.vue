<template>
	<div class="p-grid p-fluid">
		<div class="p-col-12 p-lg-6">
			<div class="card">
				<div class="card-title">InputText</div>
				<div class="p-grid form-group">
					<div class="p-col-12 p-md-4 form-cell">
						<span class="md-inputfield">
							<InputText type="text" v-model="textValue1"/>
							<label>Name</label>
						</span>
					</div>
					<div class="p-col-12 p-md-4 form-cell">
						<span class="md-inputfield">
							<InputText type="text" v-model="textValue2"/>
							<label>Email</label>
						</span>
					</div>
					<div class="p-col-12 p-md-4 form-cell">
						<span class="md-inputfield">
							<InputText type="text" v-model="textValue3"/>
							<label>Phone</label>
						</span>
					</div>
					<div class="p-col-12 p-md-4 form-cell">
						<span class="md-inputfield">
							<InputText type="text" v-model="textValue4"/>
							<label>Address</label>
						</span>
					</div>
					<div class="p-col-12 p-md-4 form-cell">
						<span class="md-inputfield">
							<InputText :disabled="true" type="text" v-model="textValue5"/>
							<label>Disabled</label>
						</span>
					</div>
					<div class="p-col-12 p-md-4 form-cell">
						<span class="md-inputfield">
							<InputText class="p-error" placeholder="Invalid" type="text" v-model="textValue6"/>
						</span>
					</div>
				</div>
				<div class="card-title">Filled InputText</div>
				<div class="p-grid form-group">
					<div class="p-col-12 p-md-4">
                            <span class="md-inputfield md-inputfield-fill">
                                <InputText type="text" v-model="textValue7"/>
                                <label>Name</label>
                            </span>
					</div>
					<div class="p-col-12 p-md-4">
                            <span class="md-inputfield md-inputfield-fill">
                                <InputText type="text" v-model="textValue8"/>
                                <label>Email</label>
                            </span>
					</div>
					<div class="p-col-12 p-md-4">
                            <span class="md-inputfield md-inputfield-fill">
                                <InputText type="text" v-model="textValue9"/>
                                <label>Phone</label>
                            </span>
					</div>
				</div>

				<div class="card-title">TextBox</div>
				<div class="p-grid form-group">
					<div class="p-col-12 p-md-4">
                            <span class="md-inputfield md-inputfield-box">
                                <InputText type="text" v-model="textValue10"/>
                                <label>Name</label>
                            </span>
					</div>
					<div class="p-col-12 p-md-4">
                            <span class="md-inputfield md-inputfield-box">
                                <InputText type="text" v-model="textValue11"/>
                                <label>Email</label>
                            </span>
					</div>
					<div class="p-col-12 p-md-4">
                            <span class="md-inputfield md-inputfield-box">
                                <InputText type="text" v-model="textValue12"/>
                                <label>Phone</label>
                            </span>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-title">TextArea</div>
				<Textarea placeholder="Your Message" :autoResize="true" rows="3" cols="30" />
			</div>

			<div class="card">
				<div class="card-title">AutoComplete</div>
				<div class="p-grid form-group">
					<div class="p-col-12">
						<label htmlFor="acSimple">Simple</label>
					</div>
					<div class="p-col-12" style="margin-bottom:10px">
						<AutoComplete v-model="selectedCountry" placeholder="Countries" :suggestions="filteredCountriesBasic" @complete="searchCountryBasic($event)" field="name" />
					</div>
					<div class="p-col-12">
						<label htmlFor="acAdvanced">Advanced</label>
					</div>
					<div class="p-col-12">
						<AutoComplete v-model="brand" :suggestions="filteredBrands" @complete="searchBrand($event)" placeholder="Hint: type 'v' or 'f'" :dropdown="true">
							<template #item="slotProps">
								<div class="p-clearfix p-autocomplete-brand-item">
									<img :alt="slotProps.item" :src="'assets/demo/images/car/' + slotProps.item + '.png'" width="32" style="display: inline-block; margin: 5px 0 2px 5px"/>
									<div style="font-size: 18px; float: right; margin: 10px 10px 0 0">{{slotProps.item}}</div>
								</div>
							</template>
						</AutoComplete>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-title">Calendar</div>
				<Calendar v-model="date1" :inline="true"/>

				<div class="p-grid form-group" style="margin-top: 20px">
					<div class="p-col-12">
						<Calendar placeholder="Popup" v-model="date2"/>
					</div>
					<div class="p-col-12">
						<Calendar placeholder="DateTime" v-model="date3" :showTime="true" dateFormat="dd/mm/yy" />
					</div>
					<div class="p-col-12">
						<Calendar placeholder="Time" v-model="date4" :timeOnly="true" :showTime="true" />
					</div>
					<div class="p-col-12">
						<Calendar placeholder="Button" v-model="date5" :showIcon="true" />
					</div>
					<div class="p-col-12">
						<Calendar placeholder="Multiple Months" v-model="date6" :numberOfMonths="3" />
					</div>
					<div class="p-col-12">
						<Calendar placeholder="Month Picker" v-model="date7" view="month" dateFormat="mm/yy"/>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12 p-lg-6">
			<div class="card">
				<div class="card-title">Checkboxes</div>
				<div class="p-grid form-group">
					<div class="p-col-12 p-md-4">
						<Checkbox id="theme1" name="theme" value="Ultima" v-model="themesCheckbox" />
						<label for="theme1" class="p-checkbox-label">Ultima</label>
					</div>
					<div class="p-col-12 p-md-4">
						<Checkbox id="theme2" name="theme" value="Avalon" v-model="themesCheckbox" />
						<label for="theme2" class="p-checkbox-label">Avalon</label>
					</div>
					<div class="p-col-12 p-md-4">
						<Checkbox id="theme3" name="theme" value="Serenity" v-model="themesCheckbox" />
						<label for="theme3" class="p-checkbox-label">Serenity</label>
					</div>
				</div>

				<div class="card-title">RadioButtons</div>
				<div class="p-grid form-group">
					<div class="p-col-12 p-md-4">
						<RadioButton id="themeR1" name="theme" value="Ultima" v-model="themesRadioButton" />
						<label for="themeR1" class="p-radiobutton-label">Ultima</label>
					</div>
					<div class="p-col-12 p-md-4">
						<RadioButton id="themeR2" name="theme" value="Avalon" v-model="themesRadioButton" />
						<label for="themeR2" class="p-radiobutton-label">Avalon</label>
					</div>
					<div class="p-col-12 p-md-4">
						<RadioButton id="themeR3" name="theme" value="Serenity" v-model="themesRadioButton" />
						<label for="themeR3" class="p-radiobutton-label">Serenity</label>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-title">Dropdown</div>
				<Dropdown v-model="dropdownCity" :options="dropdownCities" optionLabel="name" placeholder="Select a City" />

				<div class="card-title">MultiSelect</div>
				<MultiSelect v-model="multiselectedCars" :options="multiselectCars" optionLabel="brand" placeholder="Select Brands" />
			</div>

			<div class="card">
				<div class="card-title">ListBox</div>
				<Listbox v-model="listboxCity" :options="listboxCities" optionLabel="name" :filter="true"/>
			</div>

			<div class="card">
				<div class="card-title">Password</div>
				<Password v-model="passwordValue" />
			</div>

			<div class="card">
				<div class="card-title">Spinner</div>
				<Spinner v-model="spinnerValue" />
			</div>

			<div class="card">
				<div class="card-title">Rating</div>
				<Rating v-model="ratingValue" />
			</div>

			<div class="card">
				<div class="card-title">InputSwitch</div>
				<InputSwitch v-model="switchValue" />
			</div>

			<div class="card">
				<div class="card-title">Slider</div>
				<Slider v-model="sliderValue" :range="true" />
			</div>

			<div class="card">
				<div class="card-title">Chips</div>
				<Chips v-model="chipsValue" />
			</div>
		</div>

		<div class="p-col-12">
			<div class="card">
				<div class="card-title">Input Groups</div>
				<div class="p-grid form-group">
					<div class="p-col-12 p-md-6">
						<div class="p-inputgroup">
							<span class="p-inputgroup-addon"><i class="material-icons">account_circle</i></span>
							<InputText placeholder="Username"/>
						</div>
					</div>

					<div class="p-col-12 p-md-6">
						<div class="p-inputgroup">
							<span class="p-inputgroup-addon"><i class="material-icons">credit_card</i></span>
							<span class="p-inputgroup-addon"><i class="material-icons">card_travel</i></span>
							<InputText placeholder="Payment"/>
							<span class="p-inputgroup-addon">$</span>
							<span class="p-inputgroup-addon">.00</span>
						</div>
					</div>

					<div class="p-col-12 p-md-6">
						<div class="p-inputgroup">
							<InputText placeholder="Search"/>
							<Button icon="pi-md-search"/>
						</div>
					</div>

					<div class="p-col-12 p-md-6">
						<div class="p-inputgroup">
							<span class="p-inputgroup-addon p-inputgroup-addon-checkbox">
								<Checkbox v-model="inputGroupValue" :binary="true"/>
							</span>
							<InputText placeholder="Confirm"/>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="p-col-12">
			<div class="card">
				<div class="card-title">Editor</div>
				<Editor v-model="editorValue" editorStyle="height: 320px"/>
			</div>
		</div>

		<div class="p-col-12 p-nogutter">
			<div class="p-grid">
				<div class="p-col-12 p-lg-6">
					<div class="card">
						<div class="card-title">Buttons</div>

						<div class="p-grid">
							<div class="p-col-12">ToggleButton</div>
							<div class="p-col-12">
								<ToggleButton v-model="toggleValue" onLabel="Yes" offLabel="No"/>
							</div>

							<div class="p-col-12">SelectButton</div>
							<div class="p-col-12">
								<SelectButton v-model="selectButtonValue" :options="selectButtonValues" optionLabel="name" class="p-buttonset-3" />
							</div>

							<div class="p-col-12">Button</div>
							<div class="p-col-12">
								<Button label="Bookmark"/>
							</div>

							<div class="p-col-12">Left Icon</div>
							<div class="p-col-12">
								<Button label="Clear" icon="pi-md-close" />
							</div>

							<div class="p-col-12">Right Icon</div>
							<div class="p-col-12">
								<Button label="Clear" icon="pi-md-close" iconPos="right"/>
							</div>

							<div class="p-col-12">Icon Only</div>
							<div class="p-col-12">
								<Button icon="pi-md-check"/>
							</div>

							<div class="p-col-12">Link</div>
							<div class="p-col-12"><a href="http://www.primefaces.org">Homepage</a></div>

							<div class="p-col-12">SplitButton</div>
							<div class="p-col-12">
								<SplitButton label="Save" icon="pi-md-plus" :model="splitItems"></SplitButton>
							</div>
						</div>
					</div>
				</div>
				<div class="p-col-12 p-lg-6">
					<div class="card">
						<div class="card-title">Colored Buttons</div>
						<p>Flat buttons with various color alternatives.</p>

						<div class="p-grid">
							<div class="p-col-12 p-md-6" style="text-align: center">
								<Button label="Primary" style="margin-bottom: 10px" />
								<Button label="Inline Button" style="margin-bottom: 10px; width: auto"/>
								<Button label="Secondary" style="margin-bottom: 10px" class="p-button-secondary" />
								<Button label="Success" style="margin-bottom: 10px" class="p-button-success" />
								<Button label="Info" style="margin-bottom: 10px" class="p-button-info" />
								<Button label="Warning" style="margin-bottom: 10px" class="p-button-warning" />
								<Button label="Danger" style="margin-bottom: 10px" class="p-button-danger" />
								<Button label="Blue-Grey Button" style="margin-bottom: 10px" class="blue-grey-btn flat-btn" />
								<Button label="Cyan Button" style="margin-bottom: 10px" class="cyan-btn" />
								<Button label="Teal Button" style="margin-bottom: 10px" class="teal-btn" />
								<Button label="Orange Button" style="margin-bottom: 10px" class="orange-btn" />
								<Button label="Deep-Orange Button" style="margin-bottom: 10px" class="deep-orange-btn" />
								<Button label="Purple Button" style="margin-bottom: 10px" class="purple-btn" />
								<Button label="Indigo Button" style="margin-bottom: 10px" class="indigo-btn" />
								<Button label="Pink Button" style="margin-bottom: 10px" class="pink-btn" />
							</div>
							<div class="p-col-12 p-md-6" style="text-align: center">
								<Button label="Primary Button" style="margin-bottom: 10px" class="flat-btn" />
								<Button label="Inline Button" style="margin-bottom: 10px; width: auto" class="flat-btn" />
								<Button label="Secondary" style="margin-bottom: 10px" class="p-button-secondary flat-btn" />
								<Button label="Green / Success" style="margin-bottom: 10px" class="p-button-success flat-btn" />
								<Button label="Blue /Info" style="margin-bottom: 10px" class="p-button-info flat-btn" />
								<Button label="Amber / Warning" style="margin-bottom: 10px" class="p-button-warning flat-btn" />
								<Button label="Red / Danger" style="margin-bottom: 10px" class="p-button-danger flat-btn" />
								<Button label="Blue-Grey Button" style="margin-bottom: 10px" class="blue-grey-btn flat-btn" />
								<Button label="Cyan Button" style="margin-bottom: 10px" class="cyan-btn flat-btn" />
								<Button label="Teal Button" style="margin-bottom: 10px" class="teal-btn flat-btn" />
								<Button label="Orange Button" style="margin-bottom: 10px" class="orange-btn flat-btn" />
								<Button label="Deep-Orange Button" style="margin-bottom: 10px" class="deep-orange-btn flat-btn" />
								<Button label="Purple Button" style="margin-bottom: 10px" class="purple-btn flat-btn" />
								<Button label="Indigo Button" style="margin-bottom: 10px" class="indigo-btn flat-btn" />
								<Button label="Pink Button" style="margin-bottom: 10px" class="pink-btn flat-btn" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</template>

<script>
import CountryService from '../service/CountryService'

export default {
	data(){
		return {
			textValue1: '',
			textValue2: '',
			textValue3: '',
			textValue4: '',
			textValue5: '',
			textValue6: '',
			textValue7: '',
			textValue8: '',
			textValue9: '',
			textValue10: '',
			textValue11: '',
			textValue12: '',
			countries: null,
			selectedCountry: null,
			filteredCountriesBasic: null,
			brands: null,
			brand: null,
			filteredBrands: null,
			multiselectedCars: null,
			multiselectCars: [
				{brand: 'Audi', value: 'Audi'},
				{brand: 'Bmw', value: 'Bmw'},
				{brand: 'Fiat', value: 'Fiat'},
				{brand: 'Honda', value: 'Honda'},
				{brand: 'Jaguar', value: 'Jaguar'},
				{brand: 'Mercedes', value: 'Mercedes'},
				{brand: 'Renault', value: 'Renault'},
				{brand: 'Volkswagen', value: 'Volkswagen'},
				{brand: 'Volvo', value: 'Volvo'}
			],
			date1: null,
			date2: null,
			date3: null,
			date4: null,
			date5: null,
			date6: null,
			date7: null,
			chipsValue: null,
			themesCheckbox: [],
			themesRadioButton: null,
			switchValue: false,
			dropdownCities: [
				{name: 'New York', code: 'NY'},
				{name: 'Rome', code: 'RM'},
				{name: 'London', code: 'LDN'},
				{name: 'Istanbul', code: 'IST'},
				{name: 'Paris', code: 'PRS'}
			],
			dropdownCity: null,
			passwordValue: '',
			spinnerValue: null,
			sliderValue: [20,80],
			listboxCities: [
				{name: 'New York', code: 'NY'},
				{name: 'Rome', code: 'RM'},
				{name: 'London', code: 'LDN'},
				{name: 'Istanbul', code: 'IST'},
				{name: 'Paris', code: 'PRS'}
			],
			listboxCity: null,
			ratingValue: null,
			inputGroupValue: false,
			editorValue: '<div>Welcome to PrimeVue <b>Editor</b></div><div><br></div>',
			toggleValue: false,
			selectButtonValues: [
				{name: 'Apartment', code: 'Apartment'},
				{name: 'House', code: 'House'},
				{name: 'Studio', code: 'Studio'}
			],
			selectButtonValue: null,
			splitItems: [
				{label: 'Update', icon: 'pi-md-update'},
				{label: 'Delete', icon: 'pi-md-close'},
				{label: 'Home', icon: 'pi-md-home', url: 'http://www.primefaces.org/primevue'}
			]
		}
	},
	countryService: null,
	created() {
		this.countryService = new CountryService();
	},
	mounted() {
		this.countryService.getCountries().then(data => this.countries = data);
		this.brands = ['Audi', 'BMW', 'Fiat', 'Ford', 'Honda', 'Jaguar', 'Mercedes', 'Renault', 'Volvo'];
	},
	methods: {
		searchCountry(query) {
			return this.countries.filter((country) => {
				return country.name.toLowerCase().startsWith(query.toLowerCase());
			});
		},
		searchCountryBasic(event) {
			setTimeout(() => {
				this.filteredCountriesBasic = this.searchCountry(event.query);
			}, 250);
		},
		searchBrand(event) {
			setTimeout(() => {
				let results;

				if (event.query.length === 0) {
					results = [...this.brands];
				}
				else {
					results = this.brands.filter((brand) => {
						return brand.toLowerCase().startsWith(event.query.toLowerCase());
					});
				}

				this.filteredBrands = results;
			}, 250);
		}
	}
}
</script>