
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

Echo.channel('messages-channel')
    .listen('MessageChatReceived', (data) => {
    	let comment = data.message;
    	if(comment.text_comment != null)
    	{
    		let html = `
        	<strong>${comment.nickname}</strong>:<p>${comment.text_comment}</p>
    		`;
    		$(html).appendTo('#chatpanel');
    	}
    	else if(comment.meme_comment != null)
    	{
            var re = /public/gi;
            var enlace = comment.meme_comment.replace(re,"storage"); 
    		let html = `<strong>${comment.nickname}</strong>: <img src="${enlace}" class="img-responsive" style="height:200px;width:200px;">`;
    		$(html).appendTo('#chatpanel');
    	}
    	else if(comment.video_comment != null)
    	{
    		var re = /public/gi;
            var enlace2 = comment.video_comment.replace(re,"storage"); 
    		let html = `<strong>${comment.nickname}</strong>: <video width="320" height="240" controls>
  						<source src="${enlace2}">
					</video>`;
    		$(html).appendTo('#chatpanel');
    	}
        
        var audio = document.createElement("audio");
        audio.src = "chat.mp3";
        audio.play();
    		
    })