<template>
<div class="panel-block">
    <div class="field has-addons has-addons-right">
 
  <p class="control is-expanded">
    <input 
    v-on:keyup.enter="add_task"
    class="input" 
    v-model="task" 
    type="text" 
    placeholder="Start Typing"
    >
  </p>
  <p class="control">
    <a @click="add_task()" class="button is-primary">
      <span class="icon"><i class="fa fa-plus"></i>+</span>
    </a>
  </p>
</div>
</div>
</template>
<script>
export default {
    data: function(){
        return {
            task:''
        }
    },
    methods: {
        add_task: function(){
            this.$store.dispatch('tasks/ADD_TASK', {task:this.task})
            this.task = ''
        }
    }
}
</script>
<style scoped>

</style>

