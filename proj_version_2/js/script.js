Vue.config.devtools = true;

const app = new Vue({
  el: '#root',
  data: {
    discs: [],
    filteredDiscs: [],
    genre: '',
  },
  computed: {
    getUniqueGenres() {
      return [...new Set (this.discs.map(disc => {
        return disc.genre
      }))]
    }
  },
  methods: {
    fetchDiscs(){
      axios.get(`http://localhost:8888/php-ajax-dischi/api/dischi?genre=${this.genre}`).then(res => {
        this.discs = res.data;
        this.filteredDiscs = this.discs
      });
    },
    fetchDiscsGenre() {
      axios.get(`http://localhost:8888/php-ajax-dischi/api/dischi?genre=${this.genre}`).then(res => {
        this.filteredDiscs = res.data;
      });
    },
  },
  mounted() {
    this.fetchDiscs();
  },
});