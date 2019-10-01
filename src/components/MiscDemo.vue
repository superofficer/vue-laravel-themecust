<template>
	<div class="p-grid">
		<div class="p-col-12">
			<div class="card">
				<div class="card-title">Upload</div>

				<FileUpload name="demo[]" url="./upload.php" @upload="onUpload" :multiple="true" accept="image/*" :maxFileSize="1000000" />
			</div>
		</div>

		<div class="p-col-12">
			<div class="card">
				<div class="card-title">ProgressBar</div>
				<ProgressBar :value="value" />
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data() {
		return {
			value: 0
		}
	},
	interval: null,
	methods: {
		startProgress() {
			this.interval = setInterval(() => {
				let newValue = this.value + Math.floor(Math.random() * 10) + 1;
				if (newValue >= 100) {
					newValue = 100;
				}
				this.value = newValue;
			}, 2000);
		},
		endProgress() {
			clearInterval(this.interval);
			this.interval = null;
		},
		onUpload() {
			this.$toast.add({severity: 'info', summary: 'Success', detail: 'File Uploaded', life: 3000});
		}
	},
	mounted() {
		this.startProgress();
	},
	beforeDestroy() {
		this.endProgress();
	}
}
</script>

<style scoped>

</style>