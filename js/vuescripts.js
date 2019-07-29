// Heading Home
Vue.component('heading-tag',{ 
	template:
		 `<section class="container">
        <div class="row align-items-center">
          <div class="col-md-8" style="padding-top:230px">
            <h3 class="heading">We are Bringing Divinity to Humanity</h3>  
          </div>
          <div class="col-md-8">
            <a href="#" class="btn btn-primary btn-hover-white py-3 px-5 live-btn">Join Our Live Service</a>
          </div>
        </div>
      </section>`
})
new Vue({el:'#heading-component'});

// Heading About
Vue.component('heading-tag',{
	template:
		 `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">About Our Church</h2>
          </div>
        </div>
      </section>`
})
new Vue({el:'#heading-component-2'});

// Heading Leadership
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">Meet Our Pastors</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-3'});

// Heading Messages
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">Get Our Messages</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-4'});

// Heading Contact
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">We'd Love to Hear From You</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-5'});

// Heading Support
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">Support Us</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-6'});

// Heading Elixir
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading">Our Devotional</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-7'});

// Heading Gallery
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading font-adj">Pictures Worth A Thousand Words</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-8'});

//Heading Workforce
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading font-adj">Workforce</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-9'});

//Heading Articles & e-Books
Vue.component('heading-tag',{
  template:
     `<section class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="heading font-adj">Articles & e-Books</h2>
          </div>
        </div>
      </section>`
});
new Vue({el:'#heading-component-10'});

var fortress = new Vue({
  el: '#uList',
  data:{
    textBold: ''
  }
});