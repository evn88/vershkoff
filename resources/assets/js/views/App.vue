<template>
  <div>
    <header class="grid">
        <a href="/">
            <img src="http://vershkoff.ru/storage/cache/images/000/405/logo1,medium.1534409687.png" alt="Анна Вершкова" class="custom_logo">
        </a>
        <nav>
            <ul>
                <li><router-link :to="{ name: 'albums' }">Альбомы</router-link></li>
                <li><router-link :to="{ name: 'blog' }">Блог</router-link></li>
                <li><router-link :to="{ name: 'about' }">Обо мне</router-link></li>
            </ul>
        </nav>
    </header>

     <main class="grid">
        <router-view>Загрузка...</router-view>
     </main>

     <footer>
        <div class="wrapper">
           {{ getYear }} © Anna Vershkova <br>
           Профессиональный фотограф Волгоград <br>
            <a href="/sendme">Написать мне</a>
        </div>
        <div class="bottom"></div>
    </footer>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        footerMessage: 'Привет, Vue!',
        albums: [],
      }
    },
    mounted() {
              //  this.getAlbums();
    },
    computed: {
      getYear: function() {
        return new Date().getUTCFullYear();
      }
    },
    methods: { 
      // getAlbums() {
      //   axios.get('/api/test')
      //         .then(response => {
      //           this.albums = response.data;
      //         });
      // },
    }
  }
</script>