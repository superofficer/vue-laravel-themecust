<template>
	<div class="p-grid">
		<div class="p-col-12">
			<div class="card">
				<h1 class="first">Toast</h1>
                <Toast />
				<Button @click="showInfo()" label="Info" class="p-button-info" style="width: 10em; margin-right: .5em" />
				<Button @click="showSuccess()" label="Success" class="p-button-success" style="width: 10em; margin-right: .5em" />
				<Button @click="showWarn()" label="Warn" class="p-button-warning" style="width: 10em; margin-right: .5em" />
				<Button @click="showError()" label="Error" class="p-button-danger" style="width: 10em; margin-right: .5em" />

				<h1>Messages</h1>
				<div class="p-grid">
					<div class="p-col-12 p-md-3">
						<Message severity="info">PrimeVue Rocks</Message>
					</div>
					<div class="p-col-12 p-md-3">
						<Message severity="success">Record Saved</Message>
					</div>
					<div class="p-col-12 p-md-3">
						<Message severity="warn">Are you sure?</Message>
					</div>
					<div class="p-col-12 p-md-3">
						<Message severity="error">Field is required</Message>
					</div>
				</div>

                <h1>Validation Message</h1>
                <div class="p-grid validation-grid">
                    <div class="p-col-12">
                        <InputText placeholder="Username" class="p-error" style="margin-right: .5em" />
						<InlineMessage>Field is required</InlineMessage>
                    </div>
                    <div class="p-col-12">
                        <InputText placeholder="Email" class="p-error" style="margin-right: .5em" />
						<InlineMessage />
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
			messages: []
		}
	},
	methods: {
		showInfo() {
			this.$toast.add({severity:'info', summary: 'Info Message', detail:'PrimeVue rocks', life: 3000});
		},
		showSuccess() {
			this.$toast.add({severity:'success', summary: 'Success Message', detail:'Order submitted', life: 3000});
		},
		showWarn() {
			this.$toast.add({severity:'warn', summary: 'Warn Message', detail:'There are unsaved changes', life: 3000});
		},
		showError() {
			this.$toast.add({severity:'error', summary: 'Error Message', detail:'Validation failed', life: 3000});
		}
	}
}
</script>

<style scoped>
.validation-grid > .p-col-12 {
    padding: 1em .5em;
}
</style>
