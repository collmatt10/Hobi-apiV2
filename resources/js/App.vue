<template>
  <b-container>
    <b-row>
      <b-col>
<MovieViewer/>
</b-col>
</b-row>
</b-container>
</template>

<script>
import MovieViewer from './components/MovieViewer.vue'
export default {
  name: 'app',
  components: {
    MovieViewer
  }
}
</script>

<style>

</style>
