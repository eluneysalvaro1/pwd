const d = document, 
    w = window,
    borrar = d.getElementById('borrar'),
    enviar = d.getElementById('enviar')

borrar.addEventListener('click' , (e) => {
    e.preventDefault()
    inputs = d.querySelectorAll('input')
    inputs.forEach(input => {
        input.value = ''
    });
})

enviar.addEventListener('click' , e => {
    e.preventDefault()
    e.stopPropagation()
    let bandera = false, 
    inputAnio = d.getElementById('inputAnio'), 
    inputDuracion = d.getElementById('inputDuracion'),
    form = d.querySelector('form'),
    needValidation = d.querySelectorAll('.val'),
    valid = d.querySelectorAll('.inv')

    let invalido = d.querySelector('.invalido'), 
    invalido2 = d.querySelector('.invalido2')


    invalido.classList.remove('alert-danger')
    invalido2.classList.remove('alert-danger')
    invalido.textContent = ''
    invalido2.textContent = ''

    let primerAnio = new Date(1900,01,01).getFullYear(),
        segundoAnio = new Date().getFullYear()

    if(inputAnio.value.length < 4 || inputAnio.value.length > 4 ){
        invalido.classList.add('alert-danger')
        invalido.textContent = 'El año debe contar con 4 digitos'
    }
    if (inputDuracion.value.length > 3) {
        invalido2.classList.add('alert-danger')
        invalido2.textContent = 'La duracion tiene que tener como maximo 3 digitos'
    }
    if(inputDuracion.value.length < 0){
        invalido2.classList.add('alert-danger')
        invalido2.textContent = 'La duracion tiene que tener como minimo 1 digitos'
    }
    if (inputAnio.value > segundoAnio || inputAnio.value < primerAnio) {
        invalido.classList.add('alert-danger')
        invalido.textContent = 'El año debe ser entre 1900 y 2021'
    }

    let banderin = true,
        i = 0


    valid.forEach(el => {
        el.textContent = ''
    })

    while (banderin && i < needValidation.length) {
        if (needValidation[i].value == '') {
            valid[i].textContent = 'Este campo no puede estar vacio'
            banderin = false
        }
        i++
    }

    console.log(inputDuracion.value.length)


    if(inputAnio.value.length == 4 && inputDuracion.value.length <=3  && inputDuracion.value.length > 0 && banderin == true ) {
        bandera = true
    }
    if(bandera == true){
        form.submit()
    }    
} )