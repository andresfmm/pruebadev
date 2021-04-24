<template>
    <div class="container h-100 pd-30 justify-content-center align-items-center bg-white radiur-form" v-bind:class="{ preloadform: isOpacid }">
        <div class="row">
            <div class="col-md-12 float-right">
                <div class="container">
                    <h2>¡Cotiza la tuya!</h2>
                    
                    <form class="row g-3 needs-validation" novalidate>
                       <div class="form-group col-md-12">
                            <label for="modelo">Seleciona un modelo</label>
                            <select v-model="selected_modelo" @change="onChange_model($event)" class="form-control" id="modelo" required>
                                <option v-for="modelo in modelos_car" :value="modelo.value">{{modelo.text}}</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleciona un modelo.
                            </div>
                        </div>

                        <div class="form-group  col-md-12">
                            <label for="nombre" class="form-label">Nombre completo</label>
                            <input type="text" v-model="nombre" class="form-control" id="nombre" value="" required>
                            <div class="invalid-feedback">
                              Campo nombre es requerido!
                            </div>
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" v-model="email" class="form-control" id="email" value="" required>
                            <div class="invalid-feedback">
                              Campo email es requerido!
                            </div>
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="celular" class="form-label">Numero celular</label>
                            <input type="number" v-model="celular" class="form-control" id="celular" value="" required>
                            <div class="invalid-feedback">
                              Campo celular es requerido!
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="departamento">departamento</label>
                            <select v-model="selected_departamento" @change="onChange_dep($event)" class="form-control" id="departamento" required>
                                <option v-for="departamento in departamentos" :value="{id: departamento.value, text: departamento.text }">{{departamento.text}}</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleciona un departamento.
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="ciudad">Ciudad</label>
                            <select v-model="selected_ciudad"  class="form-control" id="ciudad" required :disabled="validated_ciudad ? false : true">
                               <option v-for="ciudad in ciudades" :value="{id: ciudad.value, text: ciudad.text }">{{ciudad.text}}</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleciona una ciudad.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Acepto las politicas de <a href="#" @click="openModal()">Tratamiento de datos personales</a>
                            </label>
                            <div class="invalid-feedback">
                                Debes aceptar los terminos y condiciones.
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-black" type="submit" >Enviar datos</button>
                        </div>
                        </form>
                    </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="term_condiciones" tabindex="-1" aria-labelledby="term_condiciones" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Terminoc y condiciones</h5>
            </div>
            <div class="modal-body">
                <p> 
                  es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-black" @click="closeModal()">Entiendo</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            this.validateFields();
            this.getDepartamentos();
            this.getModelos();
           
            
        },
        data () {
          return {
            search: '',
            departamentos:[],
            selected_departamento: null,
            selected_ciudad: null,
            ciudades:[],
            validated_ciudad: false,
            selected_modelo: null,
            modelos_car:[],
            arr_modelos:[],
            nombre: '',
            email: '',
            celular: '',
            isOpacid: false
          }
       },
       methods:{

           validateFields() {
               
                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll('.needs-validation');
                    let self = this;
                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }else{
                            event.preventDefault();
                            self.guardarCotizacion();
                        }
                
                        form.classList.add('was-validated')
                        }, false)
                    });

                    
           },
           getModelos(){
               let self = this;
              fetch('https://integrador.processoft.com.co/api/menutest')
                    .then(function(response) {
                    return response.json();
                    })
                    .then(function(data) {
                    let arr = data[1].subitems;
                    self.arr_modelos.push(arr);
                    for (let i = 0; i < arr.length; i++) {
                        self.modelos_car.push({'value': arr[i].subtitle, 'text': arr[i].subtitle});
                    }

                   
               }).catch( error => {
                    console.log('error ', error);
               });
           },
           onChange_dep(){

              if( this.selected_departamento.id >= 1){
                  this.ciudades = [];
                  this.getCiudades();
              }
           },
           onChange_model(){
              clearInterval(window.zcwfsxad);
              let self = this;
              for(let i = 0; i < this.arr_modelos[0].length; i++){
                   if( self.selected_modelo == this.arr_modelos[0][i].subtitle ){
                       document.querySelector('.bg').style.backgroundImage = "url('"+this.arr_modelos[0][i].img+"')";
                       return;
                   }
              }
           },
           getDepartamentos(){
               let self = this;
               fetch('get-departamentos')
                    .then( function(response){
                         return response.json();
                    })
                    .then( function(data){
                        
                        
                        for(let i = 0; i < data.length; i++){
                            self.departamentos.push({
                                'value': data[i].id, 'text': data[i].departamento
                           });
                        }
                        
                    });
           },
           getCiudades(){
               let self = this;
               fetch('get-ciudades', {
                  method: 'POST',
                  body: JSON.stringify({
                      id_dep: self.selected_departamento.id
                  }),
                  headers: {
                      'Content-Type': 'application/json',
                      'X-Requested-With': 'XMLHttpRequest',
                      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                  }
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    
                    self.validated_ciudad = true;
                    for(let i = 0; i < data.length; i++){
                            self.ciudades.push({
                                'value': data[i].id, 'text': data[i].ciudad
                           });
                        }
                });
           },
           guardarCotizacion(){
               let self = this;
               this.isOpacid = true;
               fetch('guardar-cotizacion', {
                  method: 'POST',
                  body: JSON.stringify({
                      modelo: self.selected_modelo,
                      nombre: self.nombre,
                      email: self.email,
                      celular: self.celular,
                      departamento: self.selected_departamento.text,
                      ciudad: self.selected_ciudad.text
                  }),
                  headers: {
                      'Content-Type': 'application/json',
                      'X-Requested-With': 'XMLHttpRequest',
                      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                  }
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    self.isOpacid = false;
                    if(data.ok){
                        
                       
                        toastr.success('', 'Se ha enviado la cotizacion')
                    }else{
                        toastr.warning('', 'Tiene una cotizacion en progreso')
                    }
                    
                });
           },
           clearInputs(){
                this.selected_departamento = null,
                this.selected_ciudad = null,
                this.ciudades =[],
                this.validated_ciudad = false,
                this.selected_modelo = null,
                this.modelos_car =[],
                this.arr_modelos =[],
                this.nombre = '',
                this.email = '',
                this.celular = ''
           },
           openModal(){
               $('#term_condiciones').modal('show');
           },
           closeModal(){
               $('#term_condiciones').modal('hide');
           }
       }
    }
</script>
