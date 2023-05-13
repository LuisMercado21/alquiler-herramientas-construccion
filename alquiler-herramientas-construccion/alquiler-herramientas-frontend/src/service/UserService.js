import axios from 'axios';
import router from '../router';
import { ref } from 'vue';



const API_URL = 'http://localhost:8000/api/v1';

const axiosInstance = axios.create({
    baseURL: API_URL,
    headers: {
        'Content-Type': 'application/json',
    }
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

export default function useUser() {

    const user = ref([]);
    const userErrors = ref([]);
  
    const getUser = async () => {
      try {
          const response = await axiosInstance.get('usuario');

          if(response.status == 200){
              user.value = response.data;
          }
      } catch (error) {
          user.value = null;
          userErrors.value = error.response;
      }
  }
  
    return {
      user,
      userErrors,
      getUser,
    };
  }
  