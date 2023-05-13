import { reactive, ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default function useLogin(){
    
    const response = ref([]);
    const errors = ref([]);
    const router = useRouter();


    const login = async (data) => {
        try {
            const response = await axios.post("http://127.0.0.1:8000/api/v1/iniciarSesion", data);
            
            const token = response.data.token;

            localStorage.setItem('token', token);

            if (response.status === 200) {
                // El inicio de sesión fue exitoso
                await router.push({ name: "paginaPrincipal" });
            } else {
                // Hubo un error desconocido
                errors.value = "Ha ocurrido un error desconocido";
            }
        } catch (error) {
            if (error.response) {
                // La API devolvió un código de estado de error
                if (error.response.status === 422) {
                    // El servidor indica que los datos proporcionados son inválidos
                    errors.value = error.response.data.errors;
                } else {
                    // Otro código de estado de error
                    errors.value = error.response;
                }
                
            } else if (error.request) {
                // La solicitud no recibió respuesta
                errors.value = "No se ha recibido respuesta";
            } else {
                // Ocurrió un error en el proceso de solicitud
                errors.value = "Ha ocurrido un error";
            }
        }
    }

    return {
        login,
        errors,
        response,
    }
}