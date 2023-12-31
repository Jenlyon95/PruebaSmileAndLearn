import Swal from "sweetalert2";
import axios from "axios";

export function mostrarAlerta(titulo, icono, foco = "") {
    if (foco !== "") {
      document.getElementById(foco).focus();
    }
  
    Swal.fire({
      title: titulo,
      icon: icono,
      customClass: { confirmButton: "btn btn-primary", popup: "animated zoomIn" },
      buttonsStyling: false,
    });
  }
  
  export function confirmar(urlConSlash, dreamer_id, icono, mensaje) {
    var url = urlConSlash + dreamer_id;
    const swalWithBootstrapButton = Swal.mixin({
      customClass: { confirmButton: "btn btn-success me-3", cancelButton: "btn btn-danger" },
    });
  
    swalWithBootstrapButton
      .fire({
        title: "¿Estás seguro?",
        text: mensaje,
        icon: "question",
        showCancelButton: true,
        confirmButtonText: '<i class="fa-solid fa-check"></i> Si, eliminar',
        cancelButtonText: '<i class="fa-solid fa-ban"></i> Cancelar',
      })
      .then((result) => {
        if (result.isConfirmed) {
          enviarSolicitud("DELETE", { dreamer_id: dreamer_id }, url, "Eliminado correctamente");
        } else {
          mostrarAlerta("Operación Cancelada", "info");
        }
      });
  }
  
  export function enviarSolicitud(metodo, parametros, url, mensaje) {
    axios({ method: metodo, url: url, data: parametros })
      .then(function (res) {
        var estado = res.status;
        if (estado === 200) {
          mostrarAlerta(mensaje, "success");
          window.setTimeout(function () {
            window.location.href = "/viewD";
          }, 1000);
        } else {
          mostrarAlerta("Error, contacte con soporte", "error");
        }
      })
      .catch(function (error) {
        mostrarAlerta("Error del servidor", "error");
      });
  }
