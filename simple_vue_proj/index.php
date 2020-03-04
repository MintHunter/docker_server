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
  <!--  <span> {{fullString}}   </span>
    <hr>-->
	<component-name
    :array = "messages"
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
    props: ['array',],
    template:'<span @click = "lol">{{objParse}}</span>',
    computed: {  //Кешируются
        objParse : function (e) {
           this.array.forEach((val)=>{
               if(val.first){
                   return val.first;
               }

           })
        }
    },
    methods:{  // Всегда запускаются прои обращении к методу , а так computed и method , похожи
        lol : function () {
            this.count++;
        }
    },
    watch:{
        /*Watch стоит использовать при “дорогих” операциях вычислений,
        а также для реализации асинхронных операций. Другим применением,
        может быть вызов дополнительной логики (например, для статистики).*/
    }

});
	var app = new Vue({
		el: "#app",
		data:{
            messages: [
                {first: "hello im string"},
                {second: " sec string"},
            ]
		},
        computed: {
		    fullString:{
		        get: function () {
                    return this.message1 + ' ' + this.message;
                },
                set: function (newValue) {
                    var piesesOfStr = newValue.split(',');
                    this.message1 = piesesOfStr[0];
                    this.message = piesesOfStr[1];
                }
            },

        }

	});

</script>
<style>
	span{
		display: block;
	}
</style>
</body>
</html>