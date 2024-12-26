
// ----------------------

// Cuenta regresiva
var fechaInicio = new Date().getTime();
var fechaFin = new Date(fechaCuentaRegresiva).getTime();
var diff = (fechaFin - fechaInicio) / 1000;

// Config countdown
$('.countdown').ClassyCountdown({

  theme: "black",

  labelsOptions: {
    style: 'font-size: 17px;font-family: \'Montserrat\', sans-serif;'
  },

  style: {
    // textResponsive: 0.6,
    secondsElement: {
      gauge: {
        fgColor: "#F00"
      }
    },

    days: {
      gauge: {
        thickness: 0.01,
        fgColor: colorCirculosCuentaRegresiva
      },
      textCSS: 'color:' + colorTextoCuentaRegresiva + ';font-size: 30px;font-family: \'Montserrat\', sans-serif;'
    },


    hours: {
      gauge: {
        thickness: 0.01,
        fgColor: colorCirculosCuentaRegresiva
      },
      textCSS: 'color:' + colorTextoCuentaRegresiva + ';font-size: 30px !important;font-family: \'Montserrat\', sans-serif;'
    },


    minutes: {
      gauge: {
        thickness: 0.01,
        fgColor: colorCirculosCuentaRegresiva
      },
      textCSS: 'color:' + colorTextoCuentaRegresiva + ';font-size: 30px !important;font-family: \'Montserrat\', sans-serif;'
    },


    seconds: {
      gauge: {
        thickness: 0.01,
        fgColor: colorCirculosCuentaRegresiva
      },
      textCSS: 'color:' + colorTextoCuentaRegresiva + ';font-size: 30px !important;font-family: \'Montserrat\', sans-serif;'
    }


  },

  // Fecha finalizacion
  end: $.now() + diff,

  // Al finalizar
  onEndCallback: function () {
    // $('.cuenta-regresiva').hide();
  }

});


// configuracion de invitados

const invitados = document.querySelector('#invitados');
const apellido = document.querySelector('#apellido');
const nombre = document.querySelector('#nombre');

const invitadosSolos = [
  {
    nombre: 'martin hugo',
    apellido: 'aguilera'
  },
  {
    nombre: 'martha',
    apellido: 'borda'
  },
  {
    nombre: 'maria',
    apellido: 'reynaud'
  },
  {
    nombre: 'eliana',
    apellido: 'alcodoy'
  },
  {
    nombre: 'martin',
    apellido: 'tribuson'
  },
  {
    nombre: 'matias',
    apellido: 'bayon'
  },
  {
    nombre: 'nadia',
    apellido: 'quinteros'
  },
]

apellido.addEventListener('blur', function () {
  if (apellido.value.length > 0 && !invitadoSolo()) {
    invitados.classList.remove('d-none');
  } else {
    invitados.classList.add('d-none');
  }
});

function invitadoSolo() {
  const invitado = invitadosSolos.find(function (invitado) {
    return invitado.apellido.includes(apellido.value.toLowerCase().split(' ')[0]) && invitado.nombre.includes(nombre.value.toLowerCase().split(' ')[0]);
  });

  return invitado;
}