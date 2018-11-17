<template>
    <a class="panel-block" >
  
  <input @click="toggle_complete()" v-model="task.completed" type="checkbox">

    <span @click="editing = true" v-if="!editing" >{{task.task}}</span>
    <input 
    v-if="editing" 
    v-on:keyup.escape="editing=false" 
    v-on:keyup.enter="save" 
    v-model="task.task"
    class="input" 
    type="text"   
    placeholder="Enter some ToDo text"/>
  
    &nbsp;
    <button @click="destroy()"  class="button is-small is-outline">delete</button>
  </a>
</template>
<script>
export default {
    props: ['task'],
    data: function(){
      return {
        editing: false,
        // completed: false
      }
    },
    methods:{
      'save': function(){
        this.editing = false
        this.$store.dispatch('tasks/UPDATE_TASK', this.task)
      },
      'toggle_complete': function(){
        // this.editing = false

        let task = {id:this.task.id, task:this.task.task, completed: this.task.completed}
        // console.log(task)
         this.$store.dispatch('tasks/UPDATE_TASK', task)
      },
      'destroy': function(){
        this.editing = false
        this.$store.dispatch('tasks/DELETE_TASK', this.task)
      }
    },
    computed:{
      
    }
}
</script>
<style scoped>
  .strike-it{
    text-decoration: line-through
  }
</style>

