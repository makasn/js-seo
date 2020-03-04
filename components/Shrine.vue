<template>
<div>
  <div class="row">
    <div class="column text-center">
      <h2>
        神社へ参拝
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="column">
      <div class="message default text-center">
        <small>お気に入りの猫ちゃんにお賽銭をどうぞ</small>
      </div>
    </div>
  </div>
  <cat-gods-list :cat-gods="catGods"/>
</div>
</template>

<script>
import CatGodsList from "./CatGodsList"

export default {
  data() {
    return {
      catGods: []
    }
  },
  components: { CatGodsList },
  mounted() {
    this.fetchCatGods()
  },
  methods: {
    chunk(array, size) {
      const chunked = [];
      let index = 0;
      while (index < array.length) {
          chunked.push(array.slice(index, index + size));
          index += size;
      }
      return chunked;
    },
    fetchCatGods() {
      this.$axios.$get('/api/cats.json')
        .then(response => (this.catGods = this.chunk(response.catGods, 3)))
    }
  },
}
</script>
