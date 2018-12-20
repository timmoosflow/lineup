
export function login(credentials) {
    return new Promise((res, rej) => {
        axios.post('/api/auth/login', credentials)
            .then((response) => {
                res(respons.data);
            })
            .catch((err) =>{
                rej('wrong password or email');
            })
    })
}

export function getLocalUser() {
    const userStr = localStorage.getItem("user");

    if (!userStr) {
        return null;
    }

    return JSON.parse(userStr);
}
