import { ref } from 'vue';
import axios from 'axios';

export default function useHerramientas(){
    
    const herramientas = ref([]);

    const getHerramientas = async () => {
        const response = await axios.get("http://127.0.0.1:8000/api/v1/herramientas");
        herramientas.value = response.data;
    }

    return {
        herramientas,
        getHerramientas
    }
}