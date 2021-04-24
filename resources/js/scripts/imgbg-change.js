

import { __id } from './utils';


class imgChangeBg{
     
      start(){

        window.pruebadevimgs = [];
        let self = this;
        fetch('https://integrador.processoft.com.co/api/menutest')
            .then(function(response) {
               return response.json();
            })
            .then(function(data) {
             let arrimg = data[1].subitems;
             for (let i = 0; i < arrimg.length; i++) {
                  pruebadevimgs.push(arrimg[i].img);
             }

            self.changeImgs(); 
        }).catch( error => {
           console.log('error ', error);
        });
      }

      changeImgs(){
          try {
            let counter = 0;
            window.zcwfsxad = setInterval(function(){ 
                 
                if (counter >= window.pruebadevimgs.length ) {
                    counter = 0;
                }else{
                    document.querySelector('.bg').style.backgroundImage = "url('"+window.pruebadevimgs[counter]+"')";
                   
                    counter++;
                }

                
          }, 5000);
              
          } catch (error) {
              console.log(error);
          }
      }
}

document.addEventListener("DOMContentLoaded", function(event) {

    let imgchangebg = new imgChangeBg();
        imgchangebg.start();

});