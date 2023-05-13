import axios from "axios";
import { ref } from "vue";

const API_URL = 'http://localhost:8000/api/v1';

const axiosInstance = axios.create({
    baseURL: API_URL,
    headers: {
        'Content-Type': 'application/json',
    }
});

export default function useHerramientas(){

    const errors = ref([]);
    const message = ref([]);
    const herramientas = ref([]);

    const searchHerramienta = async (termino) => {
        try {
            const response = await axiosInstance.get('buscar/'+termino);
            
            if(response.status == 200){
                carrito.value = response.data;
            }
        } catch (error) {
            errors.value = error.response;
        }
    }

    return {
        errors,
        message,
        herramientas,
        searchHerramienta,
    }
}