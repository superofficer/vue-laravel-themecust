<template>
	<div class="p-grid p-fluid">
		<div class="p-col-12">
			<div class="card">
				<h1>Menubar</h1>
				<Menubar :model="nestedMenuitems" />

				<h1>Breadcrumb</h1>
				<Breadcrumb :home="breadcrumbHome" :model="breadcrumbItems" />
			</div>
		</div>

		<div class="p-col-12">
			<div class="card">
				<h1>Steps</h1>
				<p>Steps and TabMenu are integrated with the same child routes.</p>
				<Steps :model="nestedRouteItems" :readonly="false" />
				<router-view/>

				<h1>TabMenu</h1>
				<TabMenu :model="nestedRouteItems" />
				<router-view/>
			</div>
		</div>

		<div class="p-col-12 p-xl-8">
			<div class="card">
				<h1>MegaMenu</h1>
				<MegaMenu :model="megamenuItems" />

				<h1 style="margin-top: 1.55em">Vertical</h1>
				<MegaMenu :model="megamenuItems" orientation="vertical" />
			</div>
		</div>

		<div class="p-col-12 p-xl-4">
			<div class="card">
				<h1>Menu</h1>
				<Menu :model="menuitems" />

				<Menu ref="menu" :model="menuitems" :popup="true" />
				<Button type="button" label="Overlay" @click="toggleMenu" style="margin-top: 2em; width: auto"/>
			</div>
		</div>

		<div class="p-col-12 p-md-4">
			<div class="card">
				<h1>TieredMenu</h1>
				<TieredMenu :model="nestedMenuitems" />

				<TieredMenu ref="tieredMenu" :model="nestedMenuitems" :popup="true" />
				<Button type="button" label="Overlay" @click="toggleTieredMenu" style="margin-top: 2em; width: auto"/>
			</div>
		</div>

		<div class="p-col-12 p-md-4">
			<div class="card">
				<h1>ContextMenu</h1>
				<img alt="image" src="assets/demo/images/nature/nature3.jpg" @contextmenu="onImageRightClick" class="contextmenu-image">
				<ContextMenu ref="contextMenu" :model="nestedMenuitems" />
			</div>
		</div>

		<div class="p-col-12 p-md-4">
			<div class="card">
				<h1>PanelMenu</h1>
				<PanelMenu :model="panelMenuitems" />
			</div>
		</div>

	</div>
</template>

<script>
	export default {
		data() {
			return {
				menuitems: [
					{
						label: 'Options',
						items: [{label: 'New', icon: 'pi-md-plus'},
							{label: 'Delete', icon: 'pi-md-delete'}]
					},
					{
						label: 'Account',
						items: [{label: 'Option', icon: 'pi-md-settings'},
							{label: 'Sign Out', icon: 'pi-md-power-settings-new'} ]
					}
				],
				nestedMenuitems: [
					{
						label:'File',
						icon:'pi-md-insert-drive-file',
						items:[
							{
								label:'New',
								icon:'pi-md-plus',
								items:[
									{
										label:'Bookmark',
										icon:'pi-md-bookmark'
									},
									{
										label:'Video',
										icon:'pi-md-videocam'
									},

								]
							},
							{
								label:'Delete',
								icon:'pi-md-delete'
							},
							{
								separator:true
							},
							{
								label:'Export',
								icon:'pi-md-open-in-new'
							}
						]
					},
					{
						label:'Edit',
						icon:'pi-md-edit',
						items:[
							{
								label:'Left',
								icon:'pi-md-format-align-left'
							},
							{
								label:'Right',
								icon:'pi-md-format-align-right'
							},
							{
								label:'Center',
								icon:'pi-md-format-align-center'
							},
							{
								label:'Justify',
								icon:'pi-md-format-align-justify'
							},

						]
					},
					{
						label:'Users',
						icon:'pi-md-person',
						items:[
							{
								label:'New',
								icon:'pi-md-person-add',

							},
							{
								label:'Delete',
								icon:'pi-md-person-outline',

							},
							{
								label:'Search',
								icon:'pi-md-people',
								items:[
									{
										label:'Filter',
										icon:'pi-md-filter-list',
										items:[
											{
												label:'Print',
												icon:'pi-md-print'
											}
										]
									},
									{
										icon:'pi-md-menu',
										label:'List'
									}
								]
							}
						]
					},
					{
						label:'Events',
						icon:'pi-md-date-range',
						items:[
							{
								label:'Edit',
								icon:'pi-md-edit',
								items:[
									{
										label:'Save',
										icon:'pi-md-event-available'
									},
									{
										label:'Delete',
										icon:'pi-md-event-note'
									},

								]
							},
							{
								label:'Archieve',
								icon:'pi-md-event-busy',
								items:[
									{
										label:'Remove',
										icon:'pi-md-event-note'
									}
								]
							}
						]
					},
					{
						label:'Quit',
						icon:'pi-md-power-settings-new'
					}
				],
				panelMenuitems: [
					{
						label: 'File',
						icon:'pi-md-insert-drive-file',
						items: [
							{
								label: 'New',
								icon:'pi-md-plus',
								items: [
									{
										label: 'Bookmark',
										icon:'pi-md-bookmark'
									},
									{
										label: 'Video',
										icon:'pi-md-videocam'
									}
								]
							},
							{
								label: 'Delete',
								icon:'pi-md-delete'
							},
							{
								label: 'Export',
								icon:'pi-md-open-in-new'
							}
						]
					},
					{
						label: 'Edit',
						icon:'pi-md-edit',
						items: [
							{
								label: 'Left',
								icon:'pi-md-format-align-left'
							},
							{
								label: 'Right',
								icon:'pi-md-format-align-right'
							},
							{
								label: 'Center',
								icon:'pi-md-format-align-center'
							},
							{
								label: 'Justify',
								icon:'pi-md-format-align-justify'
							}
						]
					},
					{
						label: 'Users',
						icon:'pi-md-person',
						items: [
							{
								label: 'New',
								icon:'pi-md-person-add',

							},
							{
								label: 'Delete',
								icon:'pi-md-person-outline',
							},
							{
								label: 'Search',
								icon:'pi-md-people',
								items: [
									{
										label: 'Filter',
										icon:'pi-md-filter-list',
										items: [
											{
												label: 'Print',
												icon:'pi-md-print'
											}
										]
									},
									{
										icon:'pi-md-menu',
										label: 'List'
									}
								]
							}
						]
					},
					{
						label: 'Events',
						icon:'pi-md-date-range',
						items: [
							{
								label: 'Edit',
								icon:'pi-md-edit',
								items: [
									{
										label: 'Save',
										icon:'pi-md-event-available'
									},
									{
										label: 'Delete',
										icon:'pi-md-event-note'
									}
								]
							},
							{
								label: 'Archieve',
								icon:'pi-md-event-busy',
								items: [
									{
										label: 'Remove',
										icon:'pi-md-event-note'
									}
								]
							}
						]
					}
				],
				breadcrumbHome: {icon: 'pi-md-home', to: '/'},
				breadcrumbItems: [
					{label:'Categories'},
					{label:'Sports'},
					{label:'Football'},
					{label:'Countries'},
					{label:'Spain'},
					{label:'F.C. Barcelona'},
					{label:'Squad'},
					{label:'Lionel Messi', url: 'https://en.wikipedia.org/wiki/Lionel_Messi'}
				],
				megamenuItems: [
					{
						label: 'Videos', icon: 'pi-md-videocam',
						items: [
							[
								{
									label: 'Video 1',
									items: [{label: 'Video 1.1'}, {label: 'Video 1.2'}]
								},
								{
									label: 'Video 2',
									items: [{label: 'Video 2.1'}, {label: 'Video 2.2'}]
								}
							],
							[
								{
									label: 'Video 3',
									items: [{label: 'Video 3.1'}, {label: 'Video 3.2'}]
								},
								{
									label: 'Video 4',
									items: [{label: 'Video 4.1'}, {label: 'Video 4.2'}]
								}
							]
						]
					},
					{
						label: 'Users', icon: 'pi-md-people',
						items: [
							[
								{
									label: 'User 1',
									items: [{label: 'User 1.1'}, {label: 'User 1.2'}]
								},
								{
									label: 'User 2',
									items: [{label: 'User 2.1'}, {label: 'User 2.2'}]
								},
							],
							[
								{
									label: 'User 3',
									items: [{label: 'User 3.1'}, {label: 'User 3.2'}]
								},
								{
									label: 'User 4',
									items: [{label: 'User 4.1'}, {label: 'User 4.2'}]
								}
							],
							[
								{
									label: 'User 5',
									items: [{label: 'User 5.1'}, {label: 'User 5.2'}]
								},
								{
									label: 'User 6',
									items: [{label: 'User 6.1'}, {label: 'User 6.2'}]
								}
							]
						]
					},
					{
						label: 'Events', icon: 'pi-md-date-range',
						items: [
							[
								{
									label: 'Event 1',
									items: [{label: 'Event 1.1'}, {label: 'Event 1.2'}]
								},
								{
									label: 'Event 2',
									items: [{label: 'Event 2.1'}, {label: 'Event 2.2'}]
								}
							],
							[
								{
									label: 'Event 3',
									items: [{label: 'Event 3.1'}, {label: 'Event 3.2'}]
								},
								{
									label: 'Event 4',
									items: [{label: 'Event 4.1'}, {label: 'Event 4.2'}]
								}
							]
						]
					},
					{
						label: 'Settings', icon: 'pi-md-settings',
						items: [
							[
								{
									label: 'Setting 1',
									items: [{label: 'Setting 1.1'}, {label: 'Setting 1.2'}]
								},
								{
									label: 'Setting 2',
									items: [{label: 'Setting 2.1'}, {label: 'Setting 2.2'}]
								},
								{
									label: 'Setting 3',
									items: [{label: 'Setting 3.1'}, {label: 'Setting 3.2'}]
								}
							],
							[
								{
									label: 'Setting 4',
									items: [{label: 'Setting 4.1'}, {label: 'Setting 4.2'}]
								}
							]
						]
					}
				],
				nestedRouteItems: [{
					label: 'Personal',
					to: '/menus'
				},
					{
						label: 'Seat',
						to: '/menus/seat'
					},
					{
						label: 'Payment',
						to: '/menus/payment'
					},
					{
						label: 'Confirmation',
						to: '/menus/confirmation'
					}]
			}
		},
		methods: {
			toggleMenu(event) {
				this.$refs.menu.toggle(event);
			},
			onImageRightClick(event) {
				this.$refs.contextMenu.show(event);
			},
			toggleTieredMenu(event) {
				this.$refs.tieredMenu.toggle(event);
			}
		}
	}
</script>

<style scoped lang="scss">
	/deep/ .stepsdemo-content  {
		padding: 1em 0;

		p {
			font-weight: 400;
			display: inline-block;
			vertical-align: middle;
			font-size: 18px;
			margin: 0;
		}

		i {
			vertical-align: middle;
			margin-right: 0.25em;
		}
	}

	.contextmenu-image {
		width: 100%;
	}
</style>
