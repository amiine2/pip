<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>VueJs training</title>
	<script src='<?php echo base_url() . "js/vuejs.js" ?>'></script>
	<script src='<?php echo base_url() . "js/axios.js" ?>'></script>
</head>
<body>
<div id="app">
	{{message2}}
	<span v-bind:title="title">
		{{message}}
	</span>
</div>

<div id="app-2">
	<span v-if="seen">Now you see me !</span>
</div>

<div id="app-3">
	<ol>
		<li v-for="todo in todos">{{todo.text}}</li>
	</ol>
</div>

<div id="app-4">
	{{message}}
	<button v-on:click="reverseMessage">Reverse Message</button>
</div>
<script type="text/javascript">
  var app4 = new Vue({
  	el:"#app-4",
  	data:{
  		message:'hello VueJs !'
  	},
  	methods:{
  		reverseMessage: function(){
  			this.message = this.message.split(''). reverse(). join('')
  		}
  	}
  })

  var app3 = new Vue({
  	el:'#app-3',
  	data:{
  		todos:[
           {text:'learn js'},
           {text:'learn VueJs'},
           {text:'build something awesome'}
  		]
  	}
  })	
  var app2 = new Vue({
  	el:'#app-2',
  	data:{
  		seen:true
  	}
  })	
  var app = new Vue({
  	el:"#app",
  	data:{
  		message:"sour",
  		message2:"i am a real donkey !",
  		title: "this is the truth"
  	}
  })
</script>
</body>
</html>
