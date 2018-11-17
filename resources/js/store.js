import Vue from 'vue'
import Vuex from 'vuex'
import tasks from './store-modules/tasks'
import toast from './store-modules/toast'

Vue.use(Vuex)

export default new Vuex.Store({
  modules:{
    tasks,
    toast
  }
})