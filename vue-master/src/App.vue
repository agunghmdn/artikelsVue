<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">Home</router-link>
    </div>
    <router-view/>
  </div>
</template>

<script>

export default {
  name: 'app',

}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  min-width: 50%;
  max-width: 95%;
  margin: 20px auto;
}
td, th {
  border: 1px solid #ddd;
  text-align: left;
  padding: 8px;
}
td:first-child, th {
  text-align: center;
}
th {
  background-color: #0dba55 ;
  color: #fff;
}
input{
  margin: 10px;
  padding: 3px;
  width: 155px;
  border: transparent;
  border-bottom: 1px solid #ddd; 
}
textarea{

  border: transparent;
  border-bottom: 1px solid #ddd;
}
label {
  margin: 10px;
}
button {
  padding: 5px;
  background-color: transparent;
  border-color: 1px solid #ddd;
  border-radius: 5px;
}

</style>
