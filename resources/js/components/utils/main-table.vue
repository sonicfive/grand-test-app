<template>
   <nav class="panel">
  <p class="panel-heading">
    Tasks
  </p>



  <entry></entry>
  
  <task v-for="item in all_tasks" :task="item"  v-bind:key="item.id"></task>

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
