<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
<div id="app-2">
  <span v-for="message of messages" @click="changeFunc(message,newClass)" v-bind:style="newClass">
    {{message.name}}
  </span>
</div>

<script>
	var app2 = new Vue({
		el: '#app-2',
		data:{
		    messages:[
				{name:'try it'},
				{name:'try it'},
			],
			newClass: {
		        color:'red',
				'font-size':'10px',

			}
		},
		methods:{
            changeFunc:(data,className)=>{
                data.name = Math.round(Math.random()*1000);
                className.color = 'green';
                className['font-size'] = Math.round(Math.random()*100)+"px";
                className['text-align'] = 'center';

			}
		}
	})
</script>
<style>
	span{
		display: block;
	}
</style>
</body>
</html>