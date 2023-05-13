import { ref } from 'vue';
import axios from 'axios';

export default function useUser() {

    const response = ref([]);
    const errors = ref([]);

    const getUsuario = async (data) => {
        try {
            const response = await axios.get("http://127.0.0.1:8000/api/v1/usuarios");
        } catch (error) {
            if (error.response) {
                errors.value = error.response;
            }
        }
    }

    return {
        getUsuario,
        errors,
        response,
    }
}