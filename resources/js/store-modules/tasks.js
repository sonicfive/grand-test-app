import axios from "axios";

const state = {
  tasks : []
}

const getters = {
  ALL : state => {
    return _.orderBy(state.tasks, ['completed'], ['asc'])
  },

  COMPLETED : (state, getters) => {
      return getters.ALL.filter(task => {
          return task.completed
      })
  },

  NOT_COMPLETED : (state, getters) => {
      return getters.ALL.filter(task => { return !task.completed })
  }
}

const actions = {
  GET_TASKS : async (context) => {
    let {data} = await axios.get ("/tasks/all")
    context.commit('SET_TASKS', data.data )
  },
  ADD_TASK : async (context, payload) => {
    let _this = this
    await axios.post("/tasks/create", payload)
    .then( data => {
        context.dispatch(
            'toast/OPEN', 
            {message: "Added a new task"}, 
            {root:true})
        context.dispatch('GET_TASKS')
    })
  },
  UPDATE_TASK: async (context, payload) => {
    let _this = this
    await axios.put("/tasks/update", payload)
    .then(
        data => {
         context.dispatch('toast/OPEN',{message: "Updated task successfuly"},{root:true}
         )
         context.dispatch('GET_TASKS')
        }
    )
  },
  DELETE_TASK: async (content, payload) => {
    let _this = this
    console.log(payload)
    // await axios.delete("/tasks/delete", payload)
    // .then(
    //     data => {
    //         console.log(payload)
    //     //  context.dispatch('toast/OPEN',{message: "Deleted task successfuly"},{root:true})
    //     //  context.dispatch('GET_TASKS')
    //     }
    // )
  }
}

const mutations = {
  SET_TASKS : (state, payload) => {
    state.tasks = payload
  }
}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
