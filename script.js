const {createApp}= Vue;

createApp ({
  data(){
      return{
          list: []
          
      } 

  },

  methods:{
    getList(){
      axios.get('server.php')
        .then(result => {
          console.log(result.data);
          this.list = result.data;
        })


    }

  },
  mounted(){
    this.getList();
  }
    
        
   
   
}).mount('#app');