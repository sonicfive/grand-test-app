
import { toast as superToast} from "bulma-toast";
const state = {
  open : false
}

const getters = {

}

const actions = {
    OPEN : (state, payload) => {
        superToast({
            message: payload.message,
            type: "is-success",
            dismissible: true,
            closeOnClick: true,
            duration: 2000,
            position: "top-right",
            animate: { in: 'fadeIn', out: 'fadeOut' }
          })
        // state.params = payload
      }
}

const mutations = {

}

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
