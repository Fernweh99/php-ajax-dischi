Vue.config.devtools = true;

const app = new Vue({
  el: '#root',
  data: {
    discs: [],
  },
  mounted() {
    axios.get('http://localhost:8888/php-ajax-dischi/api/dischi').then(res => {
      this.discs = res.data;
    });
  }
});