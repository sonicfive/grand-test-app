<template>
     <nav class="panel">
  <p class="panel-heading">
   Enter a Zip code, get the weather
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search by zipcode">
      <span class="icon is-small is-left">
        <i class="fa fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
  <p class="panel-tabs">
    <a class="is-active">all</a>
    <a>public</a>
    <a>private</a>
    <a>sources</a>
    <a>forks</a>
  </p>
  
  <a class="panel-block">
    <span class="panel-icon">
      <i class="fas fa-code-branch" aria-hidden="true"></i>
    </span>
    mojs
  </a>
  <label class="panel-block">
    <input type="checkbox">
    remember me
  </label>
  <div class="panel-block">
    <button class="button is-link is-outlined is-fullwidth">
      reset all filters
    </button>
  </div>
</nav>
</template>
<script>
    export default [

    ]
</script>
<style scoped>

</style>

