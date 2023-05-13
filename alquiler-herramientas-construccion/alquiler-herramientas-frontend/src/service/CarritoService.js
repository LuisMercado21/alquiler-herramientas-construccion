import axios from "axios";
import { ref } from "vue";
import router from "../router";
import { RouterView } from "vue-router";

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

export default function useCarrito(){

    const errors = ref([]);
    const message = ref([]);
    const carrito = ref([]);

    const showCarrito = async () => {
        try {
            const response = await axiosInstance.get('mostrar-carrito');
            
            if(response.status == 200){
                carrito.value = response.data;
            }
        } catch (error) {
            errors.value = error.response;
        }
    }

    const addItemCarrito = async(id) => {
        try {
            const response = await axiosInstance.post('agregar-producto-carrito/'+id);

            if(response.status == 200){
                message.value = response.data;
            }
        } catch (error) {
            errors.value = error.response;
        }
    }

    const deleteItemCarrito = async(id) => {
        try {
            const response = await axiosInstance.post('eliminar-producto-carrito/'+id);

            if(response.status == 200){
                message.value = response.data;
                router.push({name: 'carritoCampras'});
            }
        } catch (error) {
            errors.value = error.response;
        }
    }

    return {
        errors,
        carrito,
        message,
        showCarrito,
        addItemCarrito,
        deleteItemCarrito,
    }
}