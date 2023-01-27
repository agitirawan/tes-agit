<template>
  <div id="app">

    <div class="container">
        <!-- Content here -->
      
        <div class="jumbotron">

            <h1>Test UI Vue.js</h1>
            Oleh : Agit Ari Irawan

            <div class="card card-body">
              
              <komponenB />

              <div class="btn-action">
           
                  <a href="" class="btn">Cancel</a>
                  <a href="" class="btn btn-default">Save as Draft</a>
                  <a href="" class="btn btn-primary" style="background-color: lightseagreen">Submit</a>
              </div>
            </div>
            
        </div>
    </div>

  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
import KomponenB from './components/KomponenB.vue'

export default {
  name: 'App',
  components: {
    KomponenB
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}


.btn-action{
  text-align: right;
}
</style>
