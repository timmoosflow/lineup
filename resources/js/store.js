import { getLocalUser } from "./helpers/auth";

const user = getLocalUser()

export default {
    state: {
      currentUser: user,
      isLoggedIn: !!user,
      loading: false,
      auth_error: null,
      gig: {
        "id": 1,
        "gigDate": "1981-06-12",
        "gigTime": "20:05",
        "gigName": "Illo.",
        "gigVenue": "Dynamo",
        "gigColor": "green",
        "gigGenre": "Grunge",
        "gigAct1": "Prof. Jimmie Monahan",
        "gigAct2": "Prof. Lane Block",
        "gigAct3": "Miss Jane Conroy",
        "gigAct4": "Seamus Barrows",
        "gigAct5": "Neha Jacobi",
        "gigAct6": "Marques Yundt",
        "gigAct7": "Oswaldo Hoppe",
        "gigAct8": "Dolly Ruecker",
        "gigFace": "www.facebook.com",
        "gigTick": "www.tickets.nl",
        "gigUser": "bigdaddy",
        "created_at": "2018-12-20 00:58:53",
        "updated_at": "2018-12-20 00:58:53"
    }

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
        return state.auth_error;
      },
    },

    mutations: {
        login(state) {
            state.loading = true;
            state.auth_error = null;
        },
        loginSuccess(state, payload) {
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token});

            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload) {
            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state) {
            localStorage.removeItem("user");
            state.isLoggedIn = false;
            state.currentUser = null;
        },
        SET_GIG: (state, index) => {
            state.gig = index;
        }
    },

    actions: {
        login(context) {
            context.commit("login");
        }
    }
};
