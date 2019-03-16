<template>
	<div>
		<form @submit.prevent="submitForm">
			<div>
				<label>Nama</label>
				<input type="text" v-model="artikel.nama">
			</div>
			<div>
				<label>Judul</label>
				<input type="text" v-model="artikel.judul">
			</div>
			<div>
				<label>Kategori</label>
				<input type="text" v-model="artikel.kategori">
			</div>
			<div>
				<label>isi_artikel</label>
				<textarea v-model="artikel.isi_artikel"></textarea>
			</div>
			<button type="submit">Save</button>
			</form>
	</div>
</template>

<script>
import { api } from '@/helper/api.js'

export default {
		name: 'ArtikelForm',
		data () {
			return {
			artikel: {
					id: null,
					nama: '',
					judul: '',
					kategori: '',
					isi_artikel:'',
				}
			}
	},
	mounted () {
		let id = this.$route.params.id

		if (id) {
			api.get('/artikel/' + id).then(res => {

			this.artikel = res.data.result

			})
		}
	},
	methods: {
		submitForm () { 	
			let url = 'artikel'
			let data = this.artikel

			if (this.artikel.id) {
				url += '/' + this.artikel.id
			}

			api.post(url, data).then(res => {
			if (res.data.status === 'success'){
				this.$router.push('/')
				} else {
				//console.log(res.data.message)
				}
			}).catch(error =>{
				this.artikel.nama = error
			})
		}
	}
}
</script>