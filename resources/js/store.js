import { getLocalUser } from "./helpers/auth";

const user = getLocalUser()

export default {
    state: {
      currentUser: user,
      isLoggedIn: !!user,
      loading: false,
      auth_error: null,

    },
    getters: {
      isLoading(state) {
          return state.loading;
      },
      isLoggedIn(state) {
        return state.isLoggedIn;
      },
      currentUser(state) {
        return state.currentUser;
      },
      authError(state) {
        return state.authError;
      },
    },

    mutations: {
        login(state) {
            state.loading = true;
            state.auth_error = null;
        },
        loginSucces(state, payload) {
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUSer = Object.assign({}, payload.user, {token: payload.acces_token});

            localstorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload) {
            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state) {
            localStorage.removeItem("user");
            state.isLoggedIn = false;
            state.currentUser = null;
        }
    },

    actions: {
        login(context) {
            context.commit("login");
        }
    }
};
