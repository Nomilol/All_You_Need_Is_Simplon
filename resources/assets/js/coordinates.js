var axios = require('axios');
(function(){
   var app = {
     init(){
      this.listeners();
    },
    listeners(){
      $('#addButton').on('click', this.getValues);
    },
    getValues(e){
      e.preventDefault();
      let data = {};
      $('input').each(function(){
        var key = $(this).attr('name');
        data[key] = $(this).val() ? $(this).val() : null;
      });
      app.sendData(data);
    },
    sendData(data){
      axios.post('/api/simplonien/add', data)
      .then(function(response){
        console.log(response);
      })
      .catch(function(response){
        console.log(error);
      });
    }
  }
  app.init();
 })();
