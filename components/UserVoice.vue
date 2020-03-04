<template>
<div>
  <div class="row">
    <div class="column text-center">
      <h2>
        猫さまへの最新のコメント
      </h2>
    </div>
  </div>
  <comment-list :comments="comments"/>
</div>
</template>

<script>
import CommentList from "./CommentList"

export default {
  data() {
    return {
      comments: [],
    }
  },
  components: { CommentList },
  mounted() {
    this.fetchComments()
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
    fetchComments() {
      this.$axios.$get('/api/comments.json')
        .then(response => (this.comments = this.chunk(response.comments, 3)))
    }
  }
}
</script>
