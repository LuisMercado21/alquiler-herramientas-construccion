import axios from 'axios';
import router from '../router';
import { ref } from 'vue';


const API_URL = 'http://localhost:8000/api/v1';

const axiosInstance = axios.create({
  baseURL: API_URL,
  headers: {
    'Content-Type': 'application/json',
    Accept: 'application/json',
  },
});

axiosInstance.interceptors.request.use(
  (config) => {
      const token = localStorage.getItem('user')
      ? JSON.parse(
          localStorage.getItem('user')
      ).access_token : null;
      
      if(token){
          config.headers.Authorization = `Bearer ${token}`;
      }
      return config;
  },
  (error) => Promise.reject(error)
);

export default function useAuthService() {

  const errors = ref([]);

  const login = async (user) => {
    try {
      const response = await axiosInstance.post(`${API_URL}/iniciarSesion`, user);
      if (response.status == 200) {
        localStorage.setItem('user', JSON.stringify(response.data[0]));
        await router.push({ name: "paginaPrincipal" });
      }
    } catch (error) {
      if (error.response) {
        errors.value = error.response;
      }
    }
  };

  const register = async (user) => {
    try {
      console.log(user);
      const response = await axios.post(`${API_URL}/registrarse`, user);
      if(response.status == 201){
        localStorage.setItem('user', JSON.stringify(response.data[0]));
        await router.push({ name: "paginaPrincipal" });
      }
    } catch (error) {
      return { error: 'Error al crear el usuario' };
    }
  };

  const logout = async () => {
    try {
      const response = await axiosInstance.post('/cerrarSesion');

      if(response.status == 200){
        localStorage.removeItem('user'); 
      }

      await router.push({ name: "paginaPrincipal" });
      
    } catch (error) {
      return { error: 'Error al crear el usuario' };
    }
  };

  return {
    errors,
    login,
    register,
    logout,
  };
}
