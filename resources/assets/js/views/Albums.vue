<template>
<div class="grid albums">
    <a href="#" v-for="album in albums"  v-bind:key="album.id">
        <img src="http://vershkoff.ru/storage/cache/images/000/607/IMG-5553,300.225.85.60.crop.2x.1534768508.JPG">    
        <span>{{ album.name }}</span>
    </a>
</div>
</template>

<script>
    export default {
        data() {
          return {
            albums: [],
          }
        },
        mounted() {
          this.getAlbums();
        },
        computed: {
          getYear: function() {
            return new Date().getUTCFullYear();
          }
        },
        methods: { 
          getAlbums() {
            axios.get('/api/albums')
                  .then(response => {
                    this.albums = response.data;
                  });
          },
        }
    }
</script>
