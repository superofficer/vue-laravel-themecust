<template>
	<div class="help-wrapper">
		<div class="p-grid">
			<div class="p-col-12">
				<div class="card help-wrapper-card">
					<div class="help-header">
						<img src="assets/layout/images/extensions/help-header@2x.jpg" alt="ultima" style="width: 100%"/>
						<h1>Frequently Asked Questions</h1>
						<div class="search">
							<i class="pi pi-search"></i>
							<AutoComplete id="acSimple" placeholder="Search for Answers" v-model="text" :suggestions="filteredText" @complete="filterText($event)"></AutoComplete>
						</div>
					</div>

					<div class="help-content">
						<div class="card">
							<Accordion class="main-accordion" :activeIndex="0">
								<AccordionTab>
									<template v-slot:header>
										<div class="accordion-title">
											<i class="pi pi-bookmark"></i>
											<h4>The Basics</h4>
											<p>4 articles in this collection</p>
										</div>
									</template>

									<div class="questions">
										<Accordion class="sub-accordion" :activeIndex="0">
											<AccordionTab header="Which do I need to develop a SaaS application?">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pellentesque ligula dolor, pretium tincidunt libero sodales in. Integer at eros posuere, elementum felis a, laoreet libero. In sed nunc accumsan, dapibus nibh sit amet, aliquet ipsum.
											</AccordionTab>
											<AccordionTab header="I’m a freelancer/agency. Can I use the item for an end product I’m doing for a client?">
												Aliquam erat volutpat. Nulla hendrerit, arcu non lobortis fringilla, ipsum orci condimentum risus, ac hendrerit mauris justo eget lectus.
											</AccordionTab>
											<AccordionTab header="We’re a reseller, are we able to purchase a license on behalf of our client? ">
												Ut leo tellus, imperdiet tristique turpis eu, eleifend rhoncus dolor. Fusce eu feugiat urna. Nullam venenatis nisi varius justo ultrices, non aliquam nisi dapibus. Duis viverra nulla ipsum, ac laoreet mauris dapibus eu.
											</AccordionTab>
											<AccordionTab header="Is there a recurring fee or is it perpetual? ">
												Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur eu consequat libero. Donec euismod facilisis pulvinar.
											</AccordionTab>
										</Accordion>
									</div>
								</AccordionTab>
							</Accordion>
						</div>
						<div class="card">
							<Accordion class="main-accordion">
								<AccordionTab>
									<template v-slot:header>
										<div class="accordion-title">
											<i class="pi pi-bookmark"></i>
											<h4>Questions About Licenses</h4>
											<p>3 articles in this collection</p>
										</div>
									</template>

									<div class="questions">
										<Accordion class="sub-accordion">
											<AccordionTab header="Pellentesque faucibus convallis dolor ?">
												Donec facilisis, magna aliquam venenatis lobortis, nulla diam euismod orci, ac pharetra risus mi eget mauris. Praesent eleifend.
											</AccordionTab>
											<AccordionTab header="Sed rhoncus, lacus a volutpat elementum ?">
												Cras vel ullamcorper metus, vel faucibus ex. Nullam finibus ligula quis dolor aliquet, quis tempor lectus posuere. In sed mattis dui. Interdum et malesuada fames ac ante ipsum primis in faucibus.
											</AccordionTab>
											<AccordionTab header="Fusce porttitor augue turpis, vitae malesuada elit condimentum ?">
												Proin dapibus ipsum eget libero elementum, a consectetur tortor tristique. Suspendisse potenti. Aenean dictum blandit mauris, a sollicitudin ex sagittis sit amet.
											</AccordionTab>
										</Accordion>
									</div>
								</AccordionTab>
							</Accordion>
						</div>
						<div class="card">
							<Accordion class="main-accordion">
								<AccordionTab>
									<template v-slot:header>
										<div class="accordion-title">
											<i class="pi pi-bookmark"></i>
											<h4>Questions About Frameworks</h4>
											<p>6 articles in this collection</p>
										</div>
									</template>

									<div class="questions">
										<Accordion class="sub-accordion">
											<AccordionTab header="Lorem ipsum dolor sit amet, consectetur adipiscing elit ?">
												Vivamus in tortor arcu. Morbi ornare ex mi, sit amet pretium nibh sollicitudin eu.
											</AccordionTab>
											<AccordionTab header="Sed ut massa accumsan, consequat ligula sit amet, dignissim diam ?">
												Curabitur elit enim, scelerisque at eros ac, sagittis volutpat ante. Mauris ac accumsan lorem, in viverra turpis.
											</AccordionTab>
											<AccordionTab header=" Vivamus lobortis lacinia eros vel viverra. Vestibulum molestie tortor metus, ac dapibus massa sodales eget ?">
												Donec ut justo sit amet erat eleifend vulputate ut at mi.
											</AccordionTab>
											<AccordionTab header="Donec finibus tristique leo, consectetur tincidunt velit ?">
												Maecenas mattis malesuada lobortis. Praesent hendrerit eros quam. Praesent volutpat mauris ut dignissim maximus.
											</AccordionTab>
											<AccordionTab header="Praesent suscipit, magna at lacinia tempor ?">
												Velit leo commodo magna, at pharetra risus libero vitae urna.
											</AccordionTab>
											<AccordionTab header="Nulla auctor urna eget purus placerat maximus. Interdum ?">
												Et malesuada fames ac ante ipsum primis in faucibus.
											</AccordionTab>
										</Accordion>
									</div>
								</AccordionTab>
							</Accordion>
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
			text: null,
			filteredText: []
		}
	},
	methods: {
		filterText(event) {
			const query = event.query;
			let filteredText = []

			for (let i = 0; i < 10; i++) {
				filteredText.push(query + i);
			}
			this.filteredText = filteredText;
		}
	}
}
</script>

<style scoped>

</style>
