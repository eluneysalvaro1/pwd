const d = document,
    button = d.getElementById("bottonSubmit")
    
button.addEventListener('click' , (e) => {
    e.preventDefault()
    
    const pass = d.getElementById("clave"),
        user = d.getElementById("usuario"),
        form = d.querySelector('.needs-validation'),
        span1 = d.querySelector('#invalid-feedback1'),
        span2 = d.querySelector('#invalid-feedback2')
        
    span1.textContent = ''
    span2.textContent = ''
    
    let userValue = user.value,
        passValue = pass.value
    // console.log(user , pass)
    let $banderin = false;
    let $banderota = false;

    
    if (passValue.includes(userValue)) {
        span1.textContent = 'Su contraseña contiene valores de su usuario';
        console.log('Su contraseña contiene valores de su usuario');
        console.log('holasdasdasdasd');

    }else{
        $banderin = true;
    }

    if(passValue.length <= 8){
        span2.textContent = 'Su contraseña tiene menos de 8 digitos';
        console.log('Su contraseña tiene menos de 8 digitos');
    }else{
        $banderota = true;
    }


    if ($banderin && $banderota) {
        console.log('entrooooooooooooooooo')
        form.submit();
    }

})
