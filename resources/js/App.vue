<template>
<div>
This is app view
<Example/>
</div>
</template>

<script>
import Example from'./components/example'
export default {
name: 'app',
components:{
  Example
},
data(){
return{
movies:[]
  }
},
methods: {
  getMovies(){
    let app = this;
    let token = localStorage.getItem('token');
    axios.get('/api/movies', {
      headers: { Authorization: "Bearer " + token}
    })
    .then(function(response){
      console.log(response);
     app.movies = response.data.data;
   })
    .catch(function(error){
      console.log(error);
    })
  }
},
}
</script>

<style>

</style>
