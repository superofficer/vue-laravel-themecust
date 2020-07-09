<template>
	<div class="p-grid button-demo">
		<div class="p-col-12 p-md-6">
			<div class="card">
				<h5>Default</h5>
				<Button label="Submit" class="p-mr-2 p-mb-2"></Button>
				<Button label="Disabled" class="p-mr-2 p-mb-2" :disabled="true"></Button>
			</div>

			<div class="card">
				<h5>Icons</h5>
				<Button icon="pi pi-star" class="p-mr-2 p-mb-2"></Button>
				<Button label="Bookmark" icon="pi-md-bookmark-border" class="p-mr-2 p-mb-2"></Button>
				<Button label="Bookmark" icon="pi-md-bookmark-border" iconPos="right" class="p-mr-2 p-mb-2"></Button>
			</div>

			<div class="card">
				<h5>Button Group</h5>
				<span class="p-buttonset">
					<Button label="Save" icon="pi-md-check" />
					<Button label="Delete" icon="pi-md-delete" />
					<Button label="Cancel" icon="pi-md-clear" />
				</span>
			</div>

			<div class="card">
				<h5>SplitButton</h5>
				<SplitButton label="Save" icon="pi-md-check" :model="items" class="p-button-secondary p-mr-2 p-mb-2"></SplitButton>
				<SplitButton label="Save" icon="pi-md-check" :model="items" class="p-button-success p-mr-2 p-mb-2"></SplitButton>
				<SplitButton label="Save" icon="pi-md-check" :model="items" class="p-button-info p-mr-2 p-mb-2"></SplitButton>
				<SplitButton label="Save" icon="pi-md-check" :model="items" class="p-button-warning p-mr-2 p-mb-2"></SplitButton>
				<SplitButton label="Save" icon="pi-md-check" :model="items" class="p-button-danger p-mr-2 p-mb-2"></SplitButton>
			</div>
		</div>
		<div class="p-col-12 p-md-6">
			<div class="card">
				<h5>Severities</h5>
				<Button label="Primary" class="p-mr-2 p-mb-2"/>
				<Button label="Secondary" class="p-button-secondary p-mr-2 p-mb-2" />
				<Button label="Success" class="p-button-success p-mr-2 p-mb-2" />
				<Button label="Info" class="p-button-info p-mr-2 p-mb-2" />
				<Button label="Warning" class="p-button-warning p-mr-2 p-mb-2" />
				<Button label="Danger" class="p-button-danger p-mr-2 p-mb-2" />
			</div>

			<div class="card">
				<h5>Raised</h5>
				<Button label="Primary" class="p-button-raised p-mr-2 p-mb-2" />
				<Button label="Secondary" class="p-button-raised p-button-secondary p-mr-2 p-mb-2" />
				<Button label="Success" class="p-button-raised p-button-success p-mr-2 p-mb-2" />
				<Button label="Info" class="p-button-raised p-button-info p-mr-2 p-mb-2" />
				<Button label="Warning" class="p-button-raised p-button-warning p-mr-2 p-mb-2" />
				<Button label="Danger" class="p-button-raised p-button-danger p-mr-2 p-mb-2" />
			</div>

			<div class="card">
				<h5>Rounded</h5>
				<Button label="Primary" class="p-button-rounded p-mr-2 p-mb-2" />
				<Button label="Secondary" class="p-button-rounded p-button-secondary p-mr-2 p-mb-2" />
				<Button label="Success" class="p-button-rounded p-button-success p-mr-2 p-mb-2" />
				<Button label="Info" class="p-button-rounded p-button-info p-mr-2 p-mb-2" />
				<Button label="Warning" class="p-button-rounded p-button-warning p-mr-2 p-mb-2" />
				<Button label="Danger" class="p-button-rounded p-button-danger p-mr-2 p-mb-2" />
			</div>

			<div class="card">
				<h5>Rounded Icons</h5>
				<Button icon="pi-md-star" class="p-button-rounded p-mr-2 p-mb-2" />
				<Button icon="pi-md-bookmark-border" class="p-button-rounded p-button-secondary p-mr-2 p-mb-2" />
				<Button icon="pi-md-check" class="p-button-rounded p-button-success p-mr-2 p-mb-2" />
				<Button icon="pi-md-search" class="p-button-rounded p-button-info p-mr-2 p-mb-2" />
				<Button icon="pi-md-person-outline" class="p-button-rounded p-button-warning p-mr-2 p-mb-2" />
				<Button icon="pi-md-input" class="p-button-rounded p-button-danger p-mr-2 p-mb-2" />
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				items: [
					{
						label: 'Update',
						icon: 'pi pi-refresh'
					},
					{
						label: 'Delete',
						icon: 'pi pi-times'
					},
					{
						separator:true
					},
					{
						label: 'Home',
						icon: 'pi pi-home'
					},
				]
			}
		}
	}
</script>

<style scoped>

</style>
