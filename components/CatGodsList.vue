<template>
<div>
  <div class="row" v-for="(cats, index1) in catGods" :key="index1">
    <div class="column" v-for="(cat, index2) in cats" :key="index2">
      <div class="text-center">
        {{ cat['name'] }}
      </div>
      <img
        :src="'https://neko-nenne.s3-ap-northeast-1.amazonaws.com/images/' + cat['image_name']"
      />
      <div>
        {{ cat['description'] }}
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    catGods: Array
  }
}
</script>
