<template>
	<div>
		<router-link to="/artikel/create">Add Data</router-link>
		<table>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Judul</th>
				<th>Kategori</th>
				<th>Isi Artikel</th>
				<th>Action</th>
			</tr>
			<tr v-for="(artikel, index) in data_artikel" :key="index">
				<td>{{ index + 1 }}</td>
				<td>{{  artikel.nama }}</td>
				<td>{{ artikel.judul }}</td>
				<td>{{ artikel.kategori }}</td>
				<td>{{ artikel.isi_artikel }}</td>
				<td>
					<router-link :to="'/artikel/' + artikel.id">Edit</router-link>
					<button @click="deleteRow(artikel.id)">Delete</button>
				</td>
			</tr>
		</table>
	</div>
</template>

<script>
import { api } from '@/helper/api.js'

	export default {
		name: 'artikel',
		data () {
			return {
				headers: [
					{
						text: 'No',
						sortable:true,
						value: 'no',
						align: 'left'
					},
					{ text: 'Nama',value:'nama' },
					{ text: 'Judul',value:'judul' },
					{ text: 'Kategori',value:'kategori' },
					{ text: 'isi',value:'isi_artikel' },
				],
				data_artikel: []
			}
		},
		mounted (){
			this.get()
		},
		methods: {
			get () {
				api.get('artikel').then(res => {
					if (res.data.status === 'success'){
						this.data_artikel = res.data.result
					} else {
		//console.log(lol)			
					}
				}).catch({
				
				})
			},
			deleteRow (id) {
				api.delete('artikel/' + id).then(res => {
					if (res.data.status === 'success') {
						this.get()
					} else {
						// console.log(res.data.message)
					}
				}).catch(	{

				})
			}
		}
	}
</script>