import axios from 'axios';
// base da url :https://api.themoviedb.org/3
//https://api.themoviedb.org/3/movie/now_playing?api_key=12990211cbab45d41f7cbfc2d2f55434


const api = axios.create({
    baseURL: 'https://api.themoviedb.org/3',

})

export default api;