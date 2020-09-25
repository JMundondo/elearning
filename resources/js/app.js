/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        buttonstate:true,
        student:false,
        showteacher:false,
        showstudent:false,
        forms:['form 1','form 2','form 3 sciences','form 3 arts','form 3 commercials',
        'form 4 sciences','form 4 arts','form 4 commercials',
        'L6 sciences','L6 arts','L6 commercials',
        'U6 sciences','U6 arts','U6 commercials'
                 
        
    
    ]
      },
  
      methods: {
          changestate: function () {
           return this.buttonstate = !this.buttonstate
          },
          changestudent:function (){
              return this.student = !this.student
          },
          showTeacher: function(){
              return this.showteacher = !this.showteacher
          },
          showStudent: function(){
              return this.showstudent = !this.showstudent
          },
      }
});
