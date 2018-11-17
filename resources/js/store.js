import Vue from 'vue'
import Vuex from 'vuex'
import tasks from './store-modules/tasks'
import toast from './store-modules/toast'
import weather from './store-modules/weather'

Vue.use(Vuex)

export default new Vuex.Store({
  modules:{
    tasks,
    toast,
    weather
  }
})