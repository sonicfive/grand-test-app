import axios from "axios";
import { toast as superToast} from "bulma-toast";
let _this = this


const state = {
    report_by_zipcode : {},
    loading_data: false
}

const getters = {
    REPORT_DATA : (state, getters) => {
       return state.report_by_zipcode.data
    },
    LOADING_DATA: (state) => {
        return state.loading_data
    }
}

const actions = {
    GET_REPORT_FROM_ZIPCODE: async (context, payload) => {
        context.commit('SET_LOADING_DATA', true)
        let data = await axios.post("/weather-report/get", payload)
        .then( data  => {
            context.commit('SET_LOADING_DATA', false)
            context.commit('SET_REPORT_BY_ZIPCODE', data)
        })
    }
}

const mutations = {
    SET_REPORT_BY_ZIPCODE: (state, payload) => {
        state.report_by_zipcode = payload
    },
    SET_LOADING_DATA: (state, payload) => {
        state.loading_data = payload
    }
}


axios.interceptors.response.use(
    (response) => { return response },
    (error) => {
        if(error.response){
            context.commit('SET_LOADING_DATA', false)
            superToast({
                message: "Bad Request - Error 418 - I'm a Teapot",
                type: "is-danger",
                dismissible: true,
                closeOnClick: true,
                duration: 3000,
                position: "top-left",
                animate: { in: 'fadeIn', out: 'fadeOut' }
              })
        } 
    }
)

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}