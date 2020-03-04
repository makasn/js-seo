<template>
<div>
  <div class="row" v-for="(chunk, index1) in comments" :key="index1">
    <div class="column" v-for="(comment, index2) in chunk" :key="index2">
      <div class="column text-center">
        <div>{{ comment['name'] }}</div>
        <div>{{ comment['comment'] }}</div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  props: {
    comments: Array
  }
}
</script>
