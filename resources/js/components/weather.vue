<template>
<div>
     <nav class="panel">
  <p class="panel-heading">
   Enter a Zip code, get the weather report
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" v-model="zipcode" type="text" placeholder="search by zipcode">
      <span class="icon is-small is-left">
        <i class="fa fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>

  <div class="panel-block">
    <button :class="{'is-loading':loading_data}" @click="get_report()" class="button is-success is-fullwidth">
      Get Report
    </button>
  </div>
</nav>
<div v-if="report" class="content">
  <h1>Weather for {{ report.name }}</h1>
  <div class="tile is-ancestor">
     <div class="tile is-parent">
       <article class="tile is-child notification is-warning">
          <p class="title">Current Temperature</p>
          <p class="subtitle">{{ kelvins_to_farenheit(report.main.temp)}}&deg;</p>
        </article>
    </div>
    <div class="tile is-parent is-vertical">
      <div class="tile is-child">
       <article class="tile is-child notification is-light">
          <p class="title">Min Temperature</p>
          <p class="subtitle">{{ kelvins_to_farenheit(report.main.temp_min)}}&deg; </p>
        </article>
    </div>
    <div class="tile is-child">
       <article class="tile is-child notification is-light">
          <p class="title">Max Temperature</p>
          <p class="subtitle">{{ kelvins_to_farenheit(report.main.temp_max)}}&deg;</p>
        </article>
    </div>
    </div>
    

  </div>
  <!-- <weather-tiles :max="data.max" :min="data.min"></weather-tiles> -->
</div>
</div>
</template>
<script>
    export default {

      data: function(){
        return {
          zipcode: ''
        }
      },
      methods:{
        'get_report': function(){
          this.loading = true
          this.$store.dispatch('weather/GET_REPORT_FROM_ZIPCODE', {zipcode: this.zipcode})
        },
        'kelvins_to_farenheit': function(k){
          return  ((k - 273.15) * 9/5 + 32).toFixed(0)
          
        }
        
      },
      computed:{
        report: function(){
          return this.$store.getters['weather/REPORT_DATA']
        },
        loading_data: function(){
          return this.$store.getters['weather/LOADING_DATA']
        }
      }
    }
</script>
<style scoped>

</style>

