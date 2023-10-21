import { mostrarAlerta } from '../funciones';

export default (await import('vue')).defineComponent({
data() {
return {
nombres: '',
apellidos: '',
fecha_de_nacimiento: '',
avatar: '',
cargando: false
};
},

methods: {
guardar() {
event.preventDefault();
var miAvatar = document.getElementById('avatarimg');
this.avatar = miAvatar.src;

if (this.nombres.trim() == '') {
mostrarAlerta('Ingresa un nombre para tu dreamer', 'warning', 'nombres');
}


},
previsualizarAvatar(event) {
var reader = new FileReader();


reader.readAsDataURL(event.target.files[0]);

reader.onload = function () {
var miAvatar = document.getElementById('avatarimg');
miAvatar.src = reader.result;
this.avatar = miAvatar.src;


};

}
}
});
