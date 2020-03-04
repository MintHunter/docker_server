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
<div id="app">
	<component-name
            :comp ="message"
            :comp2 = "message1"
    ></component-name>

</div>

<script>
Vue.component('component-name',{
    data: function () { // В компоненте дата всегда функция, дял того, чтобы избежать
                        // присвоения переменной например count нескольким экземплярам <component-name />
        return {
            count: 0,
            someWord : 1213,
        }
    },
    props: ['comp2',"comp",],
    template:'<span @click = "nigga">{{someWord}}{{comp2}} {{comp}}</span>',
    computed: {  //Кешируются

    },
    methods:{  // Всегда запускаются прои обращении к методу
        nigga : function () {
            this.count++;
        }
    }

});
	var app = new Vue({
		el: "#app",
		data:{
            message1: "first message ",
		    message : "i'm string!"
		},
	});
</script>
<style>
	span{
		display: block;
	}
</style>
</body>
</html>