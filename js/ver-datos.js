
var temp = 0;
var val = true;

// MOSTRAR LAS CASAS Y SU INFORMACIÓN.

document.querySelector('#mostrar').addEventListener('click', mostrarDatos);

function mostrarDatos() {

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', 'data-1.json', true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {

            let datos = JSON.parse(this.responseText);
            
            let resultados = document.querySelector('#resultados');

            resultados.innerHTML = '';

            for(let item of datos){
                
                resultados.innerHTML += `
                    <tr>
                        <th><img class="responsive-img" width="175" height="175" src="img/home.jpg"></th>
                        
                        
                        <th><i>Dirección: </i><strong>${item.Direccion}</strong></br>
                        <i>Ciudad: </i><strong>${item.Ciudad}</strong></br>
                        <i>Telefono: </i><strong>${item.Telefono}</strong></br>
                        <i>Codigo Postal: </i><strong>${item.Codigo_Postal}</strong></br>
                        <i>Tipo: </i><strong>${item.Tipo}</strong></br>
                        <i>Precio: </i><strong>${item.Precio}</strong></th>

                        
                    </tr>
                `
            }
        }
    }
}


// MOSTRAR LAS CIUDADES EXISTENTES

document.querySelector('#selectCiudad').addEventListener('click', mostrarCiudades());


function mostrarCiudades() {

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', 'data-1.json', true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            
            let datos = JSON.parse(this.responseText);
            
            let selectCiudad = document.querySelector('#selectCiudad');

            selectCiudad.innerHTML = '';

            let ciudades = [];

            for(let ciudad of datos){
                if(temp == 0) {
                    
                    ciudades.push(ciudad.Ciudad);
                    temp ++;

                }else{
                    for (let i = 0; i < ciudades.length; i++) {

                        if (ciudad.Ciudad == ciudades[i]) {
                            val = false;
                            break;
                        }
                        
                    }
                    if (val == true) {
                        // console.log(ciudad.Ciudad);
                        ciudades.push(ciudad.Ciudad);
                    }else{
                        val = true;
                    }
                }
            }

            selectCiudad.innerHTML += `<option>Elige una ciudad </option>`;

            for(let i = 0; i < ciudades.length; i++){
                
                selectCiudad.innerHTML += `<option value="${ciudades[i]}">${ciudades[i]}</option>`
                
            }

        }
    }
    
} 


// MOSTRAR LOS TIPOS EXISTENTES.

document.querySelector('#selectTipo').addEventListener('click', mostrarTipos());

function mostrarTipos() {

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', 'data-1.json', true);

    xhttp.send();
    
    xhttp.onreadystatechange = function(){
        
        if (this.readyState == 4 && this.status == 200) {
            
            
            let datos = JSON.parse(this.responseText);
          
            let selectTipo = document.querySelector('#selectTipo');

            selectTipo.innerHTML = '';

            let tipos = [];
            // let temp = 0;
            // let val = true;
            
            for(let tipo of datos){
                if(temp == 0) {
                    
                    tipos.push(tipo.Tipo);
                    temp ++;

                }else{
                    for (let i = 0; i < tipos.length; i++) {

                        if (tipo.Tipo == tipos[i]) {
                            val = false;
                            break;
                        }
                        
                    }
                    if (val == true) {
                        // console.log(tipo.Tipo);
                        tipos.push(tipo.Tipo);
                    }else{
                        val = true;
                    }
                }
            }
            selectTipo.innerHTML += `<option>Elige un tipo</option>`;

            for(let i = 0; i < tipos.length; i++){
                
                selectTipo.innerHTML += `<option value="${tipos[i]}">${tipos[i]}</option>`
            }
        }
    }
}