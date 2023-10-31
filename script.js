const {createApp}= Vue;

createApp ({
  data(){
      return{
          

          newTask:'',
          isError: false,
          selectFirst: false,
          
      } 

  },

  methods:{
    getList(){
      axios.get('server.php')
        .then(result => {
          console.log(result.data);
        })


    }

  },
  mounted(){
    this.getList();
  }
    
        
   
   
}).mount('#app');