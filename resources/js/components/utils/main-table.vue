<template>
   <nav class="panel">
  <p class="panel-heading">
    Tasks
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>


  <entry></entry>
  
  <task v-for="item in all_tasks" :task="item"  v-bind:key="item.id"></task>



  <div class="panel-block">
    <button class="button is-link is-outlined is-fullwidth">
      reset all filters
    </button>
  </div>
</nav>
</template>
<script>
export default {
  data: function(){
    return {
       state: 'new'
    }
  },
  mounted() {
    
  },
  computed: {
    all_tasks: function() {
      return this.$store.getters['tasks/ALL']
    },
    completedTasks : function(){
      return this.$store.getters['tasks/COMPLETED']
    },
    notCompletedTasks : function(){
      return this.$store.getters['tasks/NOT_COMPLETED']
    },
    'typeClass' : function(){
      return {'is-active' : this.show_completed}
    }
  },
  components:{
    'task': require('./task'),
    'entry': require('./entry')
  }
};
</script>

<style scoped>
</style>
