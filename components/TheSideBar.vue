<template>
  <aside class="aside column column-25">
    <div class="content">
      <div class="row">
        <div class="column text-center">
          <h4>人気の猫神さま</h4>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="text-center">☆1位☆</div>
          <img
            v-if="catGods && catGods[0]"
            :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + catGods[0]['image_name']"
          />
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="text-center">☆2位☆</div>
          <img
            v-if="catGods && catGods[1]"
            :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + catGods[1]['image_name']"
          />
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="text-center">☆3位☆</div>
          <img
            v-if="catGods && catGods[2]"
            :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + catGods[2]['image_name']"
          />
        </div>
      </div>
      <hr />
      <div class="row">
        <div class="column text-center">
          <h4>コメントの多い猫神さま</h4>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="text-center">☆1位☆</div>
          <img
            v-if="catGods && catGods[3]"
            :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + catGods[3]['image_name']"
          />
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="text-center">☆2位☆</div>
          <img
            v-if="catGods && catGods[4]"
            :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + catGods[4]['image_name']"
          />
        </div>
      </div>
      <div class="row">
        <div class="column">
          <div class="text-center">☆3位☆</div>
          <img
            v-if="catGods && catGods[5]"
            :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + catGods[5]['image_name']"
          />
        </div>
      </div>
    </div>
  </aside>
</template>

<script>
export default {
  data() {
    return {
      catGods: []
    }
  },
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
    async fetchCatGods() {
      await this.$axios.$get('/api/cats.json')
        .then(response => (this.catGods = response.catGods))
    }
  }
}
</script>
